<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Postmark\PostmarkClient;
use Exception;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        // Verify Google reCAPTCHA
        $captcha = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => config('services.recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );

        $captchaResult = $captcha->json();

        if (!($captchaResult['success'] ?? false)
            || ($captchaResult['score'] ?? 0) < config('services.recaptcha.min_score', 0.5)
        ) {
            return back()
                ->withErrors(['captcha' => 'reCAPTCHA verification failed.'])
                ->withInput();
        }

        try {
            $client   = new PostmarkClient(config('services.postmark.token'));

            $from     = config('services.contact.from_address');
            $fromName = config('services.contact.from_name');
            $to       = config('services.contact.to');
            $stream   = config('services.postmark.stream');

            $name    = e($request->validated('name'));
            $email   = e($request->validated('email'));
            $message = $request->validated('message');

            $subject = "{$name} contacted you from eviebowerman.com";
            $html    = "<strong>Hello!</strong> My name is {$name}<br><br>"
                     . "Email: {$email}<br><br>"
                     . nl2br(e($message));
            $text    = "Hello! My name is {$name}\n"
                     . "Email: {$email}\n\n"
                     . $message;

            $client->sendEmail(
                "{$fromName} <{$from}>",
                $to,
                $subject,
                $html,
                $text,
                'evie-enquiry',
                false, // track opens
                null, null, null, null, null,
                'None', // track links
                null,
                $stream
            );

            return back()->with('success', 'Thank you! Your message has been sent.');

        } catch (Exception $e) {
            Log::error('Contact form Postmark error: '.$e->getMessage());

            return back()
                ->withErrors(['send' => 'Sorry, something went wrong while sending your message. Please try again later.'])
                ->withInput();
        }
    }
}
