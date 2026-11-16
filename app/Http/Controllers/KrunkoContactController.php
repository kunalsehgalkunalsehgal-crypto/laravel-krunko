<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Throwable;

class KrunkoContactController extends Controller
{
    public function send(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'regex:/^[0-9+() .-]{10,20}$/'],
            'topic' => ['required', Rule::in([
                'Product Enquiry',
                'Bulk / Wholesale',
                'Brand Collaboration',
                'General Question',
            ])],
            'message' => ['required', 'string', 'max:2000'],
            'consent' => ['accepted'],
            'website' => ['nullable', 'size:0'],
        ]);

        // Reuse the SAME inbox as KRUNKO enquiry cart. No database.
        $recipient = trim((string) config('krunko_enquiry.notification_email', ''));
        if (!filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'message' => 'Contact email is not configured yet.',
            ], 503);
        }

        // Never show success for Laravel's development-only mail drivers.
        if (in_array(config('mail.default'), ['array', 'log'], true)) {
            return response()->json([
                'message' => 'SMTP mail is not enabled yet.',
            ], 503);
        }

        try {
            Mail::send('krunko.emails.contact', ['contact' => $data],
                function ($mail) use ($data, $recipient): void {
                    $mail->to($recipient)
                        ->replyTo($data['email'], $data['name'])
                        ->subject('KRUNKO Contact: '.$data['topic']);
                }
            );
        } catch (Throwable $exception) {
            Log::error('KRUNKO contact email failed', [
                'exception' => $exception::class,
                'message' => $exception->getMessage(),
            ]);
            return response()->json([
                'message' => 'Message could not be sent. Please try again later.',
            ], 503);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thanks for reaching out! Your message has been sent to KRUNKO.',
        ]);
    }
}
