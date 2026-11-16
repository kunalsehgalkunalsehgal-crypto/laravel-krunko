<?php

namespace App\Http\Controllers;

use App\Mail\FarmProjectEnquiryMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Throwable;

class FarmProjectEnquiryController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        // Match the phone/GSTIN cleanup already done in the old front-end JS.
        $request->merge([
            'phone' => preg_replace('/[\s+()\-]/', '', (string) $request->input('phone', '')),
            'gstin' => strtoupper(trim((string) $request->input('gstin', ''))),
        ]);

        $products = $request->input('products', []);
        $products = is_array($products) ? $products : [];

        $data = $request->validate([
            'fullName' => ['required', 'string', 'max:80'],
            'phone' => ['required', 'regex:/^(?:91)?[6-9][0-9]{9}$/'],
            'businessName' => ['required', 'string', 'max:100'],
            'businessType' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:80'],
            'state' => ['required', 'string', 'max:80'],
            'pincode' => ['required', 'regex:/^[1-9][0-9]{5}$/'],
            'gstin' => ['nullable', 'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z][A-Z0-9]Z[A-Z0-9]$/'],
            'shopAddress' => ['nullable', 'string', 'max:180'],
            'products' => ['required', 'array', 'min:1', 'max:3'],
            'products.*' => ['required', 'string', 'distinct', Rule::in(['Premium', 'Supreme', 'Standard'])],
            'grade_premium' => [Rule::requiredIf(in_array('Premium', $products, true)), 'nullable',
             Rule::in(['5 Plus', '5 Plus handpicked', '6 Plus', '6 Plus handpicked '])],
            'grade_supreme' => [Rule::requiredIf(in_array('Supreme', $products, true)), 'nullable', Rule::in(['4 Plus', '4 Plus handpicked', '5 Pure'])],
            'grade_standard' => [Rule::requiredIf(in_array('Standard', $products, true)), 'nullable', Rule::in(['3 Plus', '4 pure handpicked', '4 pure'])],
            'monthlyVolume' => ['nullable', 'string', 'max:80'],
            'buyingTimeline' => ['nullable', 'string', 'max:80'],
            'email' => ['nullable', 'email:rfc', 'max:120'],
            'message' => ['nullable', 'string', 'max:900'],
            'consent' => ['accepted'],
        ]);

        $recipient = config('mail.from.address');
        if (!$recipient || !filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
            Log::error('Farm Project enquiry inbox is not configured.');
            return response()->json([
                'message' => 'Enquiry email is not ready yet. Please contact our team directly.',
            ], 503);
        }

        try {
            $mail = new FarmProjectEnquiryMail($data);
            if (!empty($data['email'])) {
                $mail->replyTo($data['email'], $data['fullName']);
            }
            Mail::to($recipient)->send($mail);
        } catch (Throwable $e) {
            Log::error('Farm Project enquiry email failed.', [
                'exception' => $e::class,
                'error' => $e->getMessage(),
            ]);
            return response()->json([
                'message' => 'Your enquiry could not be sent right now. Please try again.',
            ], 503);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your enquiry has been sent successfully. Our team will contact you.',
        ]);
    }
}
