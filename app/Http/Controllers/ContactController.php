<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Postmark\PostmarkClient;
use Exception;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name'    => ['required','string','max:100','regex:/^[a-zA-Z\s\-\']+$/'],
            'email'   => ['required','email','max:255'],
            'message' => ['required','string','max:5000'],
            'g-recaptcha-response' => ['required'],
        ]);

        // Verify Google reCAPTCHA
        $captcha = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );

        if (!($captcha->json()['success'] ?? false)) {
            return back()
                ->withErrors(['captcha' => 'reCAPTCHA verification failed.'])
                ->withInput();
        }

        try {
            // Postmark send
            $client  = new PostmarkClient(env('POSTMARK_TOKEN'));

            $from    = env('MAIL_FROM_ADDRESS');
            $fromName= env('MAIL_FROM_NAME', 'Website');
            $to      = env('CONTACT_TO');
            $stream  = env('CPOSTMARK_STREAM');

            $subject = "{$validated['name']} contacted you from eviebowerman.com";
            $html    = "<strong>Hello!</strong> My name is {$validated['name']}<br><br>"
                     . "Email: {$validated['email']}<br><br>"
                     . nl2br(e($validated['message']));
            $text    = "Hello! My name is {$validated['name']}\n"
                     . "Email: {$validated['email']}\n\n"
                     . $validated['message'];

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

            return back()->with('success', '✅ Thank you! Your message has been sent.');

        } catch (Exception $e) {
            // Log for debugging
            Log::error('Contact form Postmark error: '.$e->getMessage());

            return back()
                ->withErrors(['send' => 'Sorry, something went wrong while sending your message. Please try again later.'])
                ->withInput();
        }
    }
}