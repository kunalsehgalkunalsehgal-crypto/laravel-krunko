<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Throwable;

class KrunkoEnquiryController extends Controller
{
    private const SESSION_KEY = 'krunko.enquiry_cart';

    // Get allowed KRUNKO products
    private function catalog(): array
    {
        return (array) config('krunko_enquiry.products', []);
    }

    // Get cart products and quantities
    private function cartData(Request $request): array
    {
        $cart = (array) $request->session()
            ->get(self::SESSION_KEY, []);

        $items = [];
        $count = 0;

        foreach ($cart as $product => $quantity) {

            if (!array_key_exists($product, $this->catalog())) {
                continue;
            }

            $quantity = max(1, min(99, (int) $quantity));

            $items[] = [
                'product' => $product,
                'name' => $this->catalog()[$product],
                'quantity' => $quantity,
            ];

            $count += $quantity;
        }

        return [
            'items' => $items,
            'count' => $count,
        ];
    }

    // Show cart
    public function cart(Request $request): JsonResponse
    {
        return response()->json($this->cartData($request));
    }

    // Add product to cart
    // public function add(Request $request): JsonResponse
    // {
    //     $data = $request->validate([
    //         'product' => [
    //             'required',
    //             'string',
    //             Rule::in(array_keys($this->catalog())),
    //         ],
    //     ]);

    //     $cart = (array) $request->session()
    //         ->get(self::SESSION_KEY, []);

    //     $product = $data['product'];

    //     if (!array_key_exists($product, $cart) && count($cart) >= 20) {
    //         throw ValidationException::withMessages([
    //             'cart' => 'Maximum 20 different products allowed.',
    //         ]);
    //     }

    //     $cart[$product] = min(
    //         99,
    //         (int) ($cart[$product] ?? 0) + 1
    //     );

    //     $request->session()->put(self::SESSION_KEY, $cart);

    //     return response()->json($this->cartData($request));
    // }
    
public function add(Request $request): JsonResponse
{
    $data = $request->validate([
        'product' => [
            'required',
            'string',
            Rule::in(array_keys($this->catalog())),
        ],

        'quantity' => [
            'sometimes',
            'required',
            'integer',
            'between:1,99',
        ],
    ]);

    $cart = (array) $request->session()
        ->get(self::SESSION_KEY, []);

    $product = $data['product'];

    $quantity = (int) ($data['quantity'] ?? 1);

    if (!array_key_exists($product, $cart) && count($cart) >= 20) {
        throw ValidationException::withMessages([
            'cart' => 'Maximum 20 different products allowed.',
        ]);
    }

    $cart[$product] = min(
        99,
        (int) ($cart[$product] ?? 0) + $quantity
    );

    $request->session()->put(
        self::SESSION_KEY,
        $cart
    );

    return response()->json(
        $this->cartData($request)
    );
}


    // Update product quantity
    public function update(Request $request): JsonResponse
    {
        $data = $request->validate([
            'product' => [
                'required',
                'string',
                Rule::in(array_keys($this->catalog())),
            ],
            'quantity' => [
                'required',
                'integer',
                'between:1,99',
            ],
        ]);

        $cart = (array) $request->session()
            ->get(self::SESSION_KEY, []);

        if (!array_key_exists($data['product'], $cart)) {
            throw ValidationException::withMessages([
                'cart' => 'Product is not in your cart.',
            ]);
        }

        $cart[$data['product']] = (int) $data['quantity'];

        $request->session()->put(self::SESSION_KEY, $cart);

        return response()->json($this->cartData($request));
    }

    // Remove product from cart
    public function remove(Request $request): JsonResponse
    {
        $data = $request->validate([
            'product' => [
                'required',
                'string',
                Rule::in(array_keys($this->catalog())),
            ],
        ]);

        $cart = (array) $request->session()
            ->get(self::SESSION_KEY, []);

        unset($cart[$data['product']]);

        $request->session()->put(self::SESSION_KEY, $cart);

        return response()->json($this->cartData($request));
    }

    // Send cart enquiry to company email
    public function submit(Request $request): JsonResponse
    {
        // Validate customer details
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],

            'phone' => [
                'required',
                'string',
                'regex:/^[0-9+() .-]{10,20}$/',
            ],

            'email' => ['nullable', 'email', 'max:150'],

            'city' => ['required', 'string', 'max:100'],

            'address' => ['nullable', 'string', 'max:250'],

            'message' => ['nullable', 'string', 'max:1000'],

            'consent' => ['accepted'],

            'website' => ['nullable', 'size:0'],
        ]);

        // Get customer cart
        $items = $this->cartData($request)['items'];

        if (empty($items)) {
            throw ValidationException::withMessages([
                'cart' => 'Please add at least one product.',
            ]);
        }

        // Company email from config
        $to = trim((string) config(
            'krunko_enquiry.notification_email',
            ''
        ));

        if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'message' => 'Company email is not configured.',
            ], 503);
        }

        // Prevent fake email success in test mode
        if (in_array(config('mail.default'), ['log', 'array'], true)) {
            return response()->json([
                'message' => 'Please configure SMTP email settings.',
            ], 503);
        }

        try {

            Mail::send(
                'krunko.emails.enquiry',
                [
                    'customer' => $data,
                    'items' => $items,
                ],
                function ($message) use ($data, $to) {

                    $message->to($to)
                        ->subject('New KRUNKO Product Enquiry');

                    if (!empty($data['email'])) {
                        $message->replyTo(
                            $data['email'],
                            $data['name']
                        );
                    }
                }
            );

        } catch (Throwable $exception) {

            Log::error('KRUNKO enquiry email failed', [
                'error' => $exception->getMessage(),
            ]);

            return response()->json([
                'message' => 'Email send nahi ho paayi. Please try again.',
            ], 502);
        }

        // Clear cart only after email is sent
        $request->session()->forget(self::SESSION_KEY);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your KRUNKO enquiry was sent.',
        ]);
    }
}
