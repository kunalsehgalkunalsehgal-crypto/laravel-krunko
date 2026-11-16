<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class KrunkoProductController extends Controller
{
    public function show(string $slug): View
    {
        $catalog = (array) config('krunko_products.products', []);
        $product = $catalog[$slug] ?? null;

        abort_if(!is_array($product) || !($product['active'] ?? false), 404);

        // Prevent showing a product that cannot be added to the enquiry cart.
        $allowed = (array) config('krunko_enquiry.products', []);
        abort_unless(array_key_exists($product['key'], $allowed), 404);

        $related = [];
        foreach ($catalog as $relatedSlug => $item) {
            if ($relatedSlug === $slug || !($item['active'] ?? false)) {
                continue;
            }
            if (!array_key_exists($item['key'], $allowed)) {
                continue;
            }
            $related[] = ['slug' => $relatedSlug] + $item;
            if (count($related) === 3) {
                break;
            }
        }

        return view('krunko.product-details', compact('product', 'slug', 'related'));
    }
}
