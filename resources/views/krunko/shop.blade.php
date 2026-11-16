<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Explore KRUNKO makhana flavours and send a product enquiry.">
    <title>Shop KRUNKO | Explore Makhana Flavours</title>

    {{-- Reuse the exact styles already used by your KRUNKO website. --}}
    <link rel="stylesheet" href="{{ asset('krunko/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/css/enquiry-cart.css') }}">

    <style>
        /* Only the NEW shop page. Other KRUNKO pages are not affected. */
        .kr-shop-intro {
            background: #ffdf00;
            border-bottom: 2px solid #181a14;
            padding: 62px 20px 54px;
            text-align: center;
        }
        .kr-shop-intro .eyebrow { color: #365b28; margin-bottom: 12px; }
        .kr-shop-intro h1 {
            color: #181a14;
            font-size: clamp(40px, 7vw, 76px);
            line-height: 1.05;
            margin: 0 0 16px;
            letter-spacing: -0.055em;
        }
        .kr-shop-intro p:last-child { margin: 0 auto; max-width: 600px; }
        .kr-shop-note {
            margin: 0 0 28px;
            padding: 15px 18px;
            background: #fffbea;
            border-left: 4px solid #365b28;
            border-radius: 8px;
            color: #363b2b;
            font-weight: 600;
        }
        .kr-shop-page .product-bottom { gap: 12px; }
        .kr-shop-page .product-bottom strong {
            font-size: 13px;
            color: #365b28;
            text-transform: uppercase;
            letter-spacing: .035em;
        }
        .kr-shop-page .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .kr-shop-page .product-card[hidden] { display: none !important; }
        @media (max-width: 600px) {
            .kr-shop-intro { padding: 44px 16px 39px; }
        }
    </style>

    {{-- Existing KRUNKO interactions + your email-only enquiry cart. --}}
    <script src="{{ asset('krunko/js/script.js') }}" defer></script>
    <script src="{{ asset('krunko/js/enquiry-cart.js') }}" defer></script>
</head>
<body>
    @include('krunko.partials.header')

    <main class="kr-shop-page">
        {{-- <section class="kr-shop-intro" aria-labelledby="kr-shop-title">
            <p class="eyebrow">CHOOSE YOUR KIND OF CRUNCH</p>
            <h1 id="kr-shop-title">Shop KRUNKO.</h1>
            <p>Find your favourite makhana flavour and send us an enquiry.</p>
        </section> --}}

        @php
            // Temporary product list. No admin panel or product database needed yet.
            // The 'key' MUST match config/krunko_enquiry.php and the cart controller.
            // $shopProducts = [
            //     [
            //         'key' => 'Cheese jar',
            //         'name' => 'Cheese Makhana',
            //         'image' => 'krunko/assets/jar-cheese.jpg',
            //         'description' => 'Creamy, cheesy, seriously crunchy.',
            //     ],
            //     [
            //         'key' => 'Himalayan Salt jar',
            //         'name' => 'Himalayan Salt Makhana',
            //         'image' => 'krunko/assets/jar-salt.jpg',
            //         'description' => 'A little salt. A whole lot of crunch.',
            //     ],
            //     [
            //         'key' => 'Peri Peri jar',
            //         'name' => 'Peri Peri Makhana',
            //         'image' => 'krunko/assets/jar-peri.jpg',
            //         'description' => 'A fiery kick for your snack break.',
            //     ],
            //     [
            //         'key' => 'Tangy Tomato jar',
            //         'name' => 'Tangy Tomato Makhana',
            //         'image' => 'krunko/assets/jar-tomato.jpg',
            //         'description' => 'Big tomato flavour. Happy taste buds.',
            //     ],
            //     [
            //         'key' => 'Gud Til jar',
            //         'name' => 'Gud Til Makhana',
            //         'image' => 'krunko/assets/gud til.webp',
            //         'description' => 'A sweet little twist on your crunch.',
            //     ],
            // ];
            

    $shopProducts = [
        [
            'key' => 'Cheese jar',
            'slug' => 'cheese-makhana',
            'name' => 'Cheese Makhana',
            'image' => 'krunko/assets/jar-cheese.jpg',
            'description' => 'Creamy, cheesy, seriously crunchy.',
        ],
        [
            'key' => 'Himalayan Salt jar',
            'slug' => 'himalayan-salt-makhana',
            'name' => 'Himalayan Salt Makhana',
            'image' => 'krunko/assets/jar-salt.jpg',
            'description' => 'A little salt. A whole lot of crunch.',
        ],
        [
            'key' => 'Peri Peri jar',
            'slug' => 'peri-peri-makhana',
            'name' => 'Peri Peri Makhana',
            'image' => 'krunko/assets/jar-peri.jpg',
            'description' => 'A fiery kick for your snack break.',
        ],
        [
            'key' => 'Tangy Tomato jar',
            'slug' => 'tangy-tomato-makhana',
            'name' => 'Tangy Tomato Makhana',
            'image' => 'krunko/assets/jar-tomato.jpg',
            'description' => 'Big tomato flavour. Happy taste buds.',
        ],
        [
            'key' => 'Gud Til jar',
            'slug' => 'gud-til-makhana',
            'name' => 'Gud Til Makhana',
            'image' => 'krunko/assets/gud til.webp',
            'description' => 'A sweet little twist on your crunch.',
        ],
    ];
@endphp

        

        <section class="jar-products section container" id="shop" aria-labelledby="shop-products-title">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">OUR MAKHANA FLAVOURS</p>
                    <h2 id="shop-products-title">Find Your <span>Favourite.</span></h2>
                    <p>Pick the flavours you like.</p>
                </div>
            </div>

            <div class="kr-shop-note" role="note">
                Select your products, open the cart, and send an enquiry. No payment or order is placed.
            </div>

            <p class="search-result" role="status" hidden></p>

            {{-- <div class="jar-grid">
                @foreach($shopProducts as $product)
                    <article class="product-card" data-name="{{ $product['name'] }}">
                        <div class="product-image">
                            <img src="{{ asset($product['image']) }}"
                                 alt="KRUNKO {{ $product['name'] }} jar"
                                 loading="lazy" decoding="async">
                            <span class="product-tag">ENQUIRY ONLY</span>
                        </div>
                        <div class="product-info">
                            <p class="eyebrow">ROASTED MAKHANA</p>
                            <h3>{{ $product['name'] }}</h3>
                            <p>{{ $product['description'] }}</p>
                            <div class="product-bottom">
                                <strong>Ask for details</strong>
                                <button type="button" class="add-cart"
                                        data-product="{{ $product['key'] }}">
                                    Add to Cart <span aria-hidden="true">+</span>
                                </button>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div> --}}
            
<div class="jar-grid">

    @foreach($shopProducts as $product)

        <article class="product-card"
                 data-name="{{ $product['name'] }}">

            <div class="product-image">

                <a href="{{ route('krunko.product.show', ['slug' => $product['slug']]) }}"
                   aria-label="View details for {{ $product['name'] }}">

                    <img
                        src="{{ asset($product['image']) }}"
                        alt="KRUNKO {{ $product['name'] }} jar"
                        loading="lazy"
                        decoding="async"
                    >

                </a>

                <span class="product-tag">
                    ENQUIRY ONLY
                </span>

            </div>

            <div class="product-info">

                <p class="eyebrow">
                    ROASTED MAKHANA
                </p>

                <h3>
                    <a href="{{ route('krunko.product.show', ['slug' => $product['slug']]) }}">
                        {{ $product['name'] }}
                    </a>
                </h3>

                <p>{{ $product['description'] }}</p>

                {{-- <a href="{{ route('krunko.product.show', ['slug' => $product['slug']]) }}"
                   style="display:inline-block; margin:-11px 0 15px; color:#365b28; font-weight:800; font-size:13px; text-decoration:underline;">
                    View Details →
                </a> --}}

                <div class="product-bottom">

                    {{-- <strong>Ask for details</strong> --}}
 <div class="add-cart"> <a href="{{ route('krunko.product.show', ['slug' => $product['slug']]) }}"
                   style="display:inline-block;  color:#365b28; font-weight:800; font-size:13px; text-decoration:none;">
                    View Details →
                </a></div>
                    <button
                        type="button"
                        class="add-cart"
                        data-product="{{ $product['key'] }}"
                    >
                        Add to Cart
                        <span aria-hidden="true">+</span>
                    </button>

                </div>

            </div>

        </article>

    @endforeach

</div>

        </section>
    </main>

    @include('krunko.partials.footer')
</body>
</html>
