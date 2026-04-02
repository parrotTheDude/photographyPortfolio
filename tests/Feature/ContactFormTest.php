<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Postmark\Models\PostmarkResponse;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    // ── Helpers ────────────────────────────────────────────────────────────

    /** A minimal PostmarkResponse for successful send mocks. */
    private function fakePostmarkResponse(): PostmarkResponse
    {
        return new PostmarkResponse([
            'MessageID'      => 'test-message-id',
            'PostmarkStatus' => 'Active',
            'Message'        => 'OK',
            'SubmittedAt'    => now()->toIso8601String(),
            'To'             => 'hello@example.com',
            'ErrorCode'      => 0,
        ]);
    }

    /** Fake a passing reCAPTCHA response. */
    private function mockCaptchaPass(): void
    {
        Http::fake([
            'https://www.google.com/recaptcha/api/siteverify' => Http::response([
                'success' => true,
                'score'   => 0.9,
            ], 200),
        ]);
    }

    /** Fake a failing reCAPTCHA response (bot score). */
    private function mockCaptchaFail(): void
    {
        Http::fake([
            'https://www.google.com/recaptcha/api/siteverify' => Http::response([
                'success' => true,
                'score'   => 0.1,
            ], 200),
        ]);
    }

    /** Valid form payload. */
    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'name'                 => 'Jane Smith',
            'email'                => 'jane@example.com',
            'message'              => 'Hello, I would like to enquire about your work.',
            'g-recaptcha-response' => 'fake-token',
        ], $overrides);
    }

    // ── Contact page ───────────────────────────────────────────────────────

    public function test_contact_page_shows_form(): void
    {
        $this->get('/contact')
            ->assertStatus(200)
            ->assertSee('name="name"', false)
            ->assertSee('name="email"', false)
            ->assertSee('name="message"', false);
    }

    // ── Validation ─────────────────────────────────────────────────────────

    public function test_name_is_required(): void
    {
        $this->post('/contact', $this->validPayload(['name' => '']))
            ->assertSessionHasErrors('name');
    }

    public function test_email_is_required(): void
    {
        $this->post('/contact', $this->validPayload(['email' => '']))
            ->assertSessionHasErrors('email');
    }

    public function test_invalid_email_is_rejected(): void
    {
        $this->post('/contact', $this->validPayload(['email' => 'not-an-email']))
            ->assertSessionHasErrors('email');
    }

    public function test_message_is_required(): void
    {
        $this->post('/contact', $this->validPayload(['message' => '']))
            ->assertSessionHasErrors('message');
    }

    public function test_name_too_long_is_rejected(): void
    {
        $this->post('/contact', $this->validPayload(['name' => str_repeat('A', 121)]))
            ->assertSessionHasErrors('name');
    }

    public function test_message_too_long_is_rejected(): void
    {
        $this->post('/contact', $this->validPayload(['message' => str_repeat('a', 5001)]))
            ->assertSessionHasErrors('message');
    }

    public function test_name_with_invalid_characters_is_rejected(): void
    {
        $this->post('/contact', $this->validPayload(['name' => 'Jane <script>']))
            ->assertSessionHasErrors('name');
    }

    public function test_name_with_hyphen_and_apostrophe_is_accepted(): void
    {
        $this->mockCaptchaPass();

        // Swap Postmark out so we don't attempt a real send
        $this->mock(\Postmark\PostmarkClient::class, function ($mock) {
            $mock->shouldReceive('sendEmail')->once()->andReturn($this->fakePostmarkResponse());
        });

        $this->post('/contact', $this->validPayload(['name' => "O'Brien-Smith"]))
            ->assertSessionHasNoErrors();
    }

    public function test_recaptcha_token_is_required(): void
    {
        $this->post('/contact', $this->validPayload(['g-recaptcha-response' => '']))
            ->assertSessionHasErrors('g-recaptcha-response');
    }

    // ── reCAPTCHA verification ─────────────────────────────────────────────

    public function test_low_captcha_score_is_rejected(): void
    {
        $this->mockCaptchaFail();

        $this->post('/contact', $this->validPayload())
            ->assertSessionHasErrors('captcha');
    }

    // ── Successful submission ──────────────────────────────────────────────

    public function test_valid_submission_sends_email_and_redirects(): void
    {
        $this->mockCaptchaPass();

        $this->mock(\Postmark\PostmarkClient::class, function ($mock) {
            $mock->shouldReceive('sendEmail')->once()->andReturn($this->fakePostmarkResponse());
        });

        $this->post('/contact', $this->validPayload())
            ->assertSessionHasNoErrors()
            ->assertSessionHas('success');
    }

    // ── Error handling ────────────────────────────────────────────────────

    public function test_postmark_failure_returns_error_message(): void
    {
        $this->mockCaptchaPass();

        Log::shouldReceive('error')->once();

        $this->mock(\Postmark\PostmarkClient::class, function ($mock) {
            $mock->shouldReceive('sendEmail')
                ->once()
                ->andThrow(new \Exception('Postmark is down'));
        });

        $this->post('/contact', $this->validPayload())
            ->assertSessionHasErrors('send');
    }

    // ── Rate limiting ─────────────────────────────────────────────────────

    public function test_rate_limit_blocks_after_five_requests(): void
    {
        $this->mockCaptchaPass();

        $this->mock(\Postmark\PostmarkClient::class, function ($mock) {
            $mock->shouldReceive('sendEmail')->andReturn($this->fakePostmarkResponse());
        });

        // 5 allowed
        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact', $this->validPayload());
        }

        // 6th should be throttled
        $this->post('/contact', $this->validPayload())
            ->assertStatus(429);
    }
}
