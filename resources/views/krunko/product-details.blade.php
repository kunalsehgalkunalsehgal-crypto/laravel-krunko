<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $product['short_description'] }} Explore {{ $product['name'] }} and send KRUNKO an enquiry.">
    <title>{{ $product['name'] }} | KRUNKO</title>

    {{-- The SAME shared styles used on your current KRUNKO website. --}}
    <link rel="stylesheet" href="{{ asset('krunko/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/css/enquiry-cart.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/css/product-details.css') }}">

    {{-- Existing menu/header JS and cart JS stay in place. --}}
    <script src="{{ asset('krunko/js/script.js') }}" defer></script>
    <script src="{{ asset('krunko/js/enquiry-cart.js') }}" defer></script>
    <script src="{{ asset('krunko/js/product-details.js') }}" defer></script>
</head>
<body>
    @include('krunko.partials.header')

    <main class="krpd-page">
        <div class="krpd-top container">
            <nav class="krpd-crumb" aria-label="Breadcrumb">
                <a href="{{ route('krunko.customer') }}">Home</a>
                <span aria-hidden="true">/</span>
                <a href="{{ route('krunko.shop') }}">Shop</a>
                <span aria-hidden="true">/</span>
                <span aria-current="page">{{ $product['name'] }}</span>
            </nav>
            <a class="krpd-back" href="{{ route('krunko.shop') }}">
                <span aria-hidden="true">←</span> Back to Shop
            </a>
        </div>

        <section class="krpd-main container" aria-labelledby="krpd-title">
            <div class="krpd-media">
                <div class="krpd-media-stage">
                    <span class="krpd-media-stamp">YOUR NEXT CRUNCH ✦</span>
                    <img id="krpd-main-image"
                        src="{{ asset($product['images'][0]['file']) }}"
                        alt="KRUNKO {{ $product['name'] }} - {{ $product['images'][0]['label'] }}"
                        width="700" height="700" fetchpriority="high" decoding="async">
                    <span class="krpd-photo-corner" aria-hidden="true">KRUNKO.</span>
                </div>

                @if(count($product['images']) > 1)
                    <div class="krpd-thumbnails" aria-label="Product photos">
                        @foreach($product['images'] as $index => $photo)
                            <button type="button" class="krpd-thumb {{ $index === 0 ? 'is-selected' : '' }}"
                                data-krpd-photo="{{ asset($photo['file']) }}"
                                data-krpd-alt="KRUNKO {{ $product['name'] }} - {{ $photo['label'] }}"
                                aria-label="View {{ $photo['label'] }} photo"
                                aria-pressed="{{ $index === 0 ? 'true' : 'false' }}">
                                <img src="{{ asset($photo['file']) }}"
                                    alt="" width="130" height="130" loading="lazy" decoding="async">
                                <span>{{ $photo['label'] }}</span>
                            </button>
                        @endforeach
                    </div>
                @endif
                <p class="krpd-photo-note">Product images are for reference. Check the pack for final details.</p>
            </div>

            <div class="krpd-copy">
                <div class="krpd-mini-brand">KRUNKO <span aria-hidden="true">✦</span> {{ $product['category'] }}</div>
                <h1 id="krpd-title">{{ $product['name'] }}<span class="krpd-dot">.</span></h1>
                <p class="krpd-intro">{{ $product['short_description'] }}</p>

                <div class="krpd-pill-row" aria-label="Product information">
                    <span class="krpd-pill">{{ $product['type'] }}</span>
                    <span class="krpd-pill">Flavoured Makhana</span>
                    <span class="krpd-pill krpd-pill--yellow">Enquiry Only</span>
                </div>

                <p class="krpd-description">{{ $product['description'] }}</p>

                <div class="krpd-quantity-area">
                    <div>
                        <p class="krpd-section-label">HOW MANY PIECES?</p>
                        <p class="krpd-quantity-help">Choose the number of {{ strtolower($product['type']) }}s you need.</p>
                    </div>
                    <div class="krpd-qty-control" aria-label="Select quantity">
                        <button type="button" data-krpd-qty="minus" aria-label="Decrease quantity">−</button>
                        <label class="sr-only" for="krpd-qty">Quantity</label>
                        <input id="krpd-qty" type="number" min="1" max="99" step="1" value="1" inputmode="numeric">
                        <button type="button" data-krpd-qty="plus" aria-label="Increase quantity">+</button>
                    </div>
                </div>

                <button type="button" class="krpd-add add-cart"
                    data-product="{{ $product['key'] }}"
                    data-quantity="1">
                    <span class="krpd-add-text">Add to Enquiry Cart</span>
                    <span aria-hidden="true">↗</span>
                </button>
                <button type="button" class="krpd-view-cart" id="krpd-view-cart">
                    <span aria-hidden="true">🛒</span> View Enquiry Cart
                </button>
                <p class="krpd-order-note">No payment, no confirmed order. KRUNKO will receive your enquiry by email.</p>

                <div class="krpd-micro-benefits">
                    <div><span aria-hidden="true">✦</span><strong>Pick Your Flavour</strong><small>Find the one you like</small></div>
                    <div><span aria-hidden="true">＋</span><strong>Set Your Quantity</strong><small>One to 99 pieces</small></div>
                    <div><span aria-hidden="true">✉</span><strong>Send an Enquiry</strong><small>We will get your request</small></div>
                </div>
            </div>
        </section>

        {{-- <section class="krpd-about" aria-labelledby="krpd-about-title">
            <div class="container krpd-about-inner">
                <div>
                    <p class="krpd-section-label">A LITTLE CRUNCH. A LOT OF JOY.</p>
                    <h2 id="krpd-about-title">Know Your <span>Crunch.</span></h2>
                </div>
                <div class="krpd-about-text">
                    <p>{{ $product['description'] }}</p>
                    <p>For pack weight, ingredients, allergens and availability, please check the product pack or ask the KRUNKO team.</p>
                </div>
            </div>
        </section> --}}

        @if(count($related))
            <section class="krpd-related container" aria-labelledby="krpd-related-title">
                <div class="krpd-related-title">
                    <div>
                        <p class="krpd-section-label">MORE WAYS TO CRUNCH</p>
                        <h2 id="krpd-related-title">You May Also <span>Like.</span></h2>
                    </div>
                    <a href="{{ route('krunko.shop') }}">View All Products ↗</a>
                </div>
                <div class="krpd-related-grid">
                    @foreach($related as $item)
                        <a class="krpd-related-card" href="{{ route('krunko.product.show', ['slug' => $item['slug']]) }}">
                            <div class="krpd-related-image">
                                <img src="{{ asset($item['images'][0]['file']) }}"
                                     alt="KRUNKO {{ $item['name'] }}"
                                     width="360" height="360" loading="lazy" decoding="async">
                            </div>
                            <div class="krpd-related-info">
                                <div><h3>{{ $item['name'] }}</h3><p>{{ $item['short_description'] }}</p></div>
                                <span aria-hidden="true">↗</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </main>

    @include('krunko.partials.footer')
</body>
</html>
