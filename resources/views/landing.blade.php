<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#183d2c">
    <meta name="description" content="Kaushal Agro Industries Private Limited | Makhana processing in Purnia, Bihar.">
    <title>Kaushal Agro Industries | Premium Makhana from Bihar</title>

    {{-- GLOBAL CSS: only once. All future sections reuse these variables and utilities. --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/kaushal/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/kaushal/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/kaushal/css/home.css') }}"> --}}
    <link rel="stylesheet" href="/assets/kaushal/css/base.css">

<link rel="stylesheet" href="/assets/kaushal/css/header.css">

<link rel="stylesheet" href="/assets/kaushal/css/home.css">
</head>
<body class="ka-site" id="top">
    @include('landing.sections.header')

    <main id="main-content">
        {{-- SECTION 02: approved Kaushal Agro hero. No extra JavaScript needed. --}}
<section class="ka-hero" id="home" aria-labelledby="ka-hero-heading">
    <div class="ka-container ka-hero__layout">
        <div class="ka-hero__copy">
            <h1 class="ka-hero__heading" id="ka-hero-heading">
                Bihar’s Makhana.<br>
                <span>Naturally Special.</span>
            </h1>
            <p class="ka-hero__description">
                At Kaushal Agro Industries Private Limited, we bring Bihar’s finest makhana
                to different markets with modern processing, careful handling and a focus
                on consistent quality.
            </p>

            <div class="ka-hero__actions">
                <a class="ka-hero__button ka-hero__button--primary" href="#products">
                    Explore Our Products
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
                <a class="ka-hero__button ka-hero__button--outline" href="#company">
                    About Our Company
                </a>
            </div>

            <ul class="ka-hero__highlights" aria-label="Our key strengths">
                <li>
                    <span class="ka-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32"><path d="M25.5 6.5C15 6 9 11 9 20c0 3.4 2.7 5.5 6 5.5 8 0 11-10 10.5-19Z"/><path d="M7 27c5.5-7.5 9-11 15-15"/></svg>
                    </span>
                    <span>Modern<br>Processing</span>
                </li>
                <li>
                    <span class="ka-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32"><path d="M16 3 26 7v8c0 6.5-4 11-10 14C10 26 6 21.5 6 15V7L16 3Z"/><path d="m11 16 3.5 3.5L21 12"/></svg>
                    </span>
                    <span>Consistent<br>Quality</span>
                </li>
                <li>
                    <span class="ka-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32"><path d="M4 10h17v13H4V10Zm17 5h5l3 4v4h-8v-8Z"/><circle cx="10" cy="24" r="3"/><circle cx="24" cy="24" r="3"/></svg>
                    </span>
                    <span>Trusted<br>Supply</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="ka-hero__visual" aria-hidden="true">
        <img
            src="{{ asset('assets/kaushal-landing/images/makhana-bowl.webp') }}"
            alt=""
            width="1509"
            height="1035"
            fetchpriority="high"
            decoding="async"
        >
    </div>

</section>
{{-- SECTION 03: Our Products. Add once after @include('landing.sections.hero'). --}}
{{-- <section class="ka-products ka-section" id="products" aria-labelledby="ka-products-heading">
    <div class="ka-container">
        <div class="ka-products__intro">
            <span class="ka-products__eyebrow">OUR PRODUCTS</span>
            <h2 class="ka-products__title ka-heading" id="ka-products-heading">
                One Crop. <span>Two Ways to Enjoy.</span>
            </h2>
            <p class="ka-products__lead">
                From classic natural makhana to exciting flavours, we offer quality options for different needs.
            </p>
        </div>

        <div class="ka-products__grid">
            <article class="ka-products__card ka-products__card--plain">
                <div class="ka-products__photo">
                    <img
                        src="{{ asset('assets/kaushal/images/plain-makhana.webp') }}"
                        alt="Plain white makhana in a wooden bowl"
                        width="850" height="850" loading="lazy" decoding="async">
                </div>
                <div class="ka-products__content">
                    <span class="ka-products__type">FOR RETAILERS &amp; BULK BUYERS</span>
                    <h3 class="ka-products__name ka-heading">Plain Makhana</h3>
                    <p class="ka-products__description">
                        Carefully graded makhana for retailers, traders and bulk buyers.
                        Discover options for your business needs.
                    </p>
                    <a class="ka-products__link" href="{{ url('/retailer') }}"
                       aria-label="Explore Plain Makhana for retailers">
                        Explore Plain <span aria-hidden="true">&#8594;</span>
                    </a>
                </div>
            </article>

            <article class="ka-products__card ka-products__card--flavoured">
                <div class="ka-products__photo">
                    <img
                        src="{{ asset('assets/kaushal/images/flavoured-makhana.webp') }}"
                        alt="Seasoned flavoured makhana served in a wooden bowl"
                        width="855" height="675" loading="lazy" decoding="async">
                </div>
                <div class="ka-products__content">
                    <span class="ka-products__type">FOR SNACK LOVERS</span>
                    <h3 class="ka-products__name ka-heading">Flavoured Makhana</h3>
                    <p class="ka-products__description">
                        Explore tasty makhana snacks from KRUNKO, with flavours made
                        for your everyday snack breaks.
                    </p>
                    <a class="ka-products__link" href="{{ url('/krunko') }}"
                       aria-label="Explore KRUNKO Flavoured Makhana">
                        Explore Flavours <span aria-hidden="true">&#8594;</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section> --}}

{{-- SECTION 03: OUR BRANDS | Replace the old products section with this. --}}
<section class="ka-products ka-section" id="products" aria-labelledby="ka-products-heading">
    <div class="ka-container">
        <div class="ka-products__intro">
            <span class="ka-products__eyebrow">OUR BRANDS</span>
            <h2 class="ka-products__title ka-heading" id="ka-products-heading">
                One Company. <span>Two Makhana Brands.</span>
            </h2>
            <p class="ka-products__lead">
                From carefully graded plain makhana to delicious flavoured snacks,
                discover the right brand for your needs.
            </p>
        </div>

        <div class="ka-products__grid">
            {{-- THE FARM PROJECT: Plain makhana for retailers, traders and bulk buyers. --}}
            <article class="ka-products__card ka-products__card--plain">
                <div class="ka-products__photo">
                    <img src="{{ asset('assets\farm-project\images\demodemo.png') }}"
                         alt="Plain popped makhana in a wooden bowl"
                         width="850" height="850" loading="lazy" decoding="async">
                </div>
                <div class="ka-products__content">
                    <span class="ka-products__type">FOR RETAILERS &amp; BULK BUYERS</span>
                    <h3 class="ka-products__name ka-heading">The Farm Project</h3>
                    <p class="ka-products__category">Plain Makhana</p>
                    <p class="ka-products__description">
                        Explore pure makhana grades, premium packs and bulk supply
                        options for your business.
                    </p>
                    <a class="ka-products__link" href="{{ url('/the-farm-project') }}"
                       aria-label="Explore The Farm Project plain makhana">
                        Explore The Farm Project
                        <span aria-hidden="true">&#8594;</span>
                    </a>
                </div>
            </article>

            {{-- KRUNKO: Flavoured makhana for snack lovers and customers. --}}
            <article class="ka-products__card ka-products__card--flavoured">
                <div class="ka-products__photo">
                    <img src="{{ asset('assets\farm-project\images\demodemodemo.png') }}"
                         alt="Flavoured roasted makhana in a wooden bowl"
                         width="855" height="675" loading="lazy" decoding="async">
                </div>
                <div class="ka-products__content">
                    <span class="ka-products__type">FOR SNACK LOVERS &amp; CUSTOMERS</span>
                    <h3 class="ka-products__name ka-heading">KRUNKO</h3>
                    <p class="ka-products__category">Flavoured Makhana</p>
                    <p class="ka-products__description">
                        Discover exciting makhana flavours and crunchy snacks
                        made for your everyday snack breaks.
                    </p>
                    <a class="ka-products__link" href="{{ url('/krunkoo') }}"
                       aria-label="Explore KRUNKO flavoured makhana">
                        Explore KRUNKO
                        <span aria-hidden="true">&#8594;</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- SECTION 04: ABOUT KAUSHAL AGRO. Include after Our Products. --}}
<section class="ka-about ka-section" id="company" aria-labelledby="ka-about-heading">
    <div class="ka-container ka-about__grid">

        {{-- LEFT SIDE: Company introduction --}}
        <div class="ka-about__content">
            <p class="ka-about__eyebrow"><span aria-hidden="true"></span>ABOUT KAUSHAL AGRO</p>

            <h2 class="ka-about__heading ka-heading" id="ka-about-heading">
                Quality Makhana.<br>
                <span>A Better Tomorrow.</span>
            </h2>

            <p class="ka-about__description">
                Kaushal Agro Industries Private Limited is based in Purnia, Bihar.
                We focus on modern makhana processing, careful grading and quality-led
                handling to bring Bihar's makhana to different markets with care.
            </p>

            <ul class="ka-about__benefits" aria-label="What matters to us">
                <li>
                    <span class="ka-about__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32" fill="none"><path d="M27 5C15 5 7 12 7 22a5 5 0 0 0 5 5c10 0 17-8 15-22Z"/><path d="M7 29c6-10 11-14 17-19"/></svg>
                    </span>
                    <span>Premium<br>Quality</span>
                </li>
                <li>
                    <span class="ka-about__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32" fill="none"><path d="m16 3 4 3 5-.1.6 5 3.4 3.5-3 4 1.1 5-5 1.3-2.1 4.4-4-2.5-4 2.5-2.1-4.4-5-1.3 1.1-5-3-4 3.4-3.5.6-5L12 6l4-3Z"/><circle cx="16" cy="16" r="4"/></svg>
                    </span>
                    <span>Modern<br>Processing</span>
                </li>
                <li>
                    <span class="ka-about__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="9" r="4"/><path d="M7 27v-4c0-4.5 4-7.5 9-7.5s9 3 9 7.5v4M4 16c2-1.8 5-1.8 7-.3M28 16c-2-1.8-5-1.8-7-.3M3 25v-3c0-2.5 1-4.5 4-5.5M29 25v-3c0-2.5-1-4.5-4-5.5"/></svg>
                    </span>
                    <span>Farmer<br>Focused</span>
                </li>
                <li>
                    <span class="ka-about__icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="12"/><path d="M4 16h24M16 4c4 4 6 8 6 12s-2 8-6 12M16 4c-4 4-6 8-6 12s2 8 6 12M7 8.5c5 3 13 3 18 0M7 23.5c5-3 13-3 18 0"/></svg>
                    </span>
                    <span>Wider<br>Reach</span>
                </li>
            </ul>

            {{-- Same-page link; no extra company page required. --}}
            <a class="ka-about__button" href="#location">
                Learn More About Us
                <svg viewBox="0 0 24 24" aria-hidden="true" fill="none"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
            </a>
        </div>

        {{-- RIGHT SIDE: Use the provided makhana photo --}}
        <div class="ka-about__media">
            <img
                src="{{ asset('assets/kaushal/images/about-makhana.webp') }}"
                alt="Plain makhana in a wooden bowl"
                width="614"
                height="776"
                loading="lazy"
                decoding="async"
            >
        </div>

    </div>
</section>

{{-- SECTION 05: OUR STRENGTHS. Add after About Kaushal Agro. --}}
<section class="ka-strengths ka-section" id="strengths" aria-labelledby="ka-strengths-heading">
    <div class="ka-container">

        <div class="ka-strengths__intro">
            <p class="ka-strengths__eyebrow">OUR STRENGTHS</p>
            <h2 class="ka-strengths__title ka-heading" id="ka-strengths-heading">
                Quality You Can <span>Count On.</span>
            </h2>
            <p class="ka-strengths__lead">
                From modern processing to careful grading, we focus on quality at every stage.
            </p>
        </div>

        <div class="ka-strengths__grid">
            <article class="ka-strengths__item">
                <span class="ka-strengths__icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" fill="none">
                        <path d="M13 3.5h6l.8 3.4 2.8 1.2 3-1.8 4.1 4.1-1.8 3 1.2 2.8 3.4.8v5.7l-3.4.8-1.2 2.8 1.8 3-4.1 4.1-3-1.8-2.8 1.2-.8 3.4h-6l-.8-3.4-2.8-1.2-3 1.8-4.1-4.1 1.8-3-1.2-2.8-3.4-.8v-5.7l3.4-.8 1.2-2.8-1.8-3 4.1-4.1 3 1.8 2.8-1.2L13 3.5Z" transform="translate(3 0) scale(.81)"/>
                        <circle cx="16" cy="16" r="5"/>
                    </svg>
                </span>
                <h3>Modern Processing</h3>
                <p>Machine-led processing supports consistency.</p>
            </article>

            <article class="ka-strengths__item">
                <span class="ka-strengths__icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" fill="none">
                        <path d="M16 2.7 27 7v8.8c0 7-4.6 11.2-11 14-6.4-2.8-11-7-11-14V7l11-4.3Z"/>
                        <path d="m10.5 16 3.8 3.8 7.3-8"/>
                    </svg>
                </span>
                <h3>Hygienic Handling</h3>
                <p>Careful handling with cleanliness in focus.</p>
            </article>

            <article class="ka-strengths__item">
                <span class="ka-strengths__icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" fill="none">
                        <rect x="3.5" y="7" width="25" height="18" rx="3"/>
                        <path d="M7 12h18M7 20h18M12 12v8M20 12v8"/>
                        <path d="M10.5 7V4.5M21.5 7V4.5M10.5 25v2.5M21.5 25v2.5"/>
                    </svg>
                </span>
                <h3>Careful Grading</h3>
                <p>Makhana sorted by size and quality.</p>
            </article>

            <article class="ka-strengths__item">
                <span class="ka-strengths__icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" fill="none">
                        <path d="M4 11 16 4l12 7v14l-12 6L4 25V11Z"/>
                        <path d="m4 11 12 7 12-7M16 18v13"/>
                        <path d="m11 11.8 3.1 3.1 6.6-6.1"/>
                    </svg>
                </span>
                <h3>Quality Focus</h3>
                <p>Attention to detail before packaging.</p>
            </article>
        </div>

    </div>
</section>
{{-- SECTION 06: FACTORY LOCATION + GOOGLE MAP. Place after Our Strengths. --}}
<section class="ka-location ka-section" id="location" aria-labelledby="ka-location-heading">
    <div class="ka-container">
        <div class="ka-location__grid">
            <div class="ka-location__content">
                <p class="ka-location__eyebrow"><span aria-hidden="true"></span> OUR LOCATION</p>

                <h2 class="ka-location__heading ka-heading" id="ka-location-heading">
                    Proudly Based in <span>Purnia, Bihar.</span>
                </h2>

                <p class="ka-location__intro">
                    Our makhana processing unit is located in Purnia, Bihar,
                    close to the region where this special crop is grown.
                </p>

                <div class="ka-location__address">
                    <span class="ka-location__address-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.7"/>
                        </svg>
                    </span>
                    <div>
                        <p class="ka-location__address-label">MANUFACTURING UNIT</p>
                        <h3>Kaushal Agro Industries Pvt. Ltd.</h3>
                        <address>
                            Plug n Play Shed B1, Gate No. 3,<br>
                            Industrial Growth Centre Maranga,<br>
                            Purnia, Bihar - 854303, India.
                        </address>
                    </div>
                </div>

                {{-- Map link uses the public business listing; confirm the exact plant pin before launch. --}}
                <a class="ka-location__button"
                   href="https://www.google.com/maps/search/?api=1&amp;query=Kaushal%20Agro%20Industries%20Pvt%20Ltd%20Maranga%20Purnia%20Bihar&amp;query_place_id=ChIJyTYkVgD97zkRRxH6mAZXn9U"
                   target="_blank" rel="noopener noreferrer">
                    View on Google Maps <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="ka-location__map-panel">
                <div class="ka-location__map-top">
                    <span class="ka-location__map-dot" aria-hidden="true"></span>
                    <span>FIND US IN PURNIA, BIHAR</span>
                </div>

                {{-- No API key required for this search-based iframe.
                     To pinpoint the exact gate, replace the URL with the official
                     Google Maps Share > Embed a map URL supplied by the client. --}}
                <iframe
                    class="ka-location__map"
                    title="Google Map for Kaushal Agro Industries in Maranga, Purnia"
                    src="https://www.google.com/maps?q=Kaushal%20Agro%20Industries%20Pvt%20Ltd%2C%20Maranga%2C%20Purnia%2C%20Bihar%20854303&amp;output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>

                <div class="ka-location__map-bottom">
                    <span>Purnia, Bihar, India</span>
                    <span aria-hidden="true">✦</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SECTION 07: FOOTER. Place this ONCE after the closing </main> in landing.blade.php. --}}
<footer class="ka-footer" id="ka-footer" aria-label="Kaushal Agro site footer">
    <div class="ka-footer__main">
        <div class="ka-container ka-footer__grid">

            {{-- COMPANY / BRAND --}}
            <div class="ka-footer__company">
                <a href="#top" class="ka-footer__brand" aria-label="Kaushal Agro, back to top">
                    {{-- Reuse the exact same lotus image used in header. --}}
                    <img
                        src="{{ asset('assets/kaushal-landing/images/logo.png') }}"
                        alt="" width="55" height="55" loading="lazy"
                    >
                    <span class="ka-footer__brand-words">
                        <strong>KAUSHAL AGRO</strong>
                        <small>INDUSTRIES PRIVATE LIMITED</small>
                    </span>
                </a>
                <p class="ka-footer__tagline">Bihar's Makhana. A Better Tomorrow.</p>
                <div class="ka-footer__products">
                    <a href="{{ url('/retailer') }}">Plain Makhana</a>
                    <span aria-hidden="true">/</span>
                    <a href="{{ url('/krunko') }}">Flavoured Makhana</a>
                </div>
            </div>

            {{-- ALL COMPANY LINKS STAY ON THE SAME LANDING PAGE. --}}
            <nav class="ka-footer__links" aria-label="Footer quick links">
                <h2 class="ka-footer__title">Quick Links</h2>
                <a href="#top">Home</a>
                <a href="#company">Our Company</a>
                <a href="#products">Our Products</a>
                <a href="#strengths">Our Strengths</a>
                <a href="#location">Contact</a>
            </nav>

            {{-- CORRECT PURNIA MANUFACTURING ADDRESS; NO PATNA ADDRESS. --}}
            <div class="ka-footer__location">
                <h2 class="ka-footer__title">Our Location</h2>
                <div class="ka-footer__address-row">
                    <svg viewBox="0 0 24 24" aria-hidden="true" fill="none">
                        <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/>
                        <circle cx="12" cy="10" r="2.5"/>
                    </svg>
                    <address>
                        <strong>Kaushal Agro Industries Pvt. Ltd.</strong>
                        Plug n Play Shed B1, Gate No. 3,<br>
                        Industrial Growth Centre Maranga,<br>
                        Purnia, Bihar - 854303, India.
                    </address>
                </div>
                <a class="ka-footer__location-link" href="#location">
                    Find our factory <span aria-hidden="true">&#8599;</span>
                </a>
            </div>
        </div>
    </div>

    <div class="ka-footer__bottom">
        <div class="ka-container ka-footer__bottom-inner">
            <p>&copy; {{ date('Y') }} Kaushal Agro Industries Private Limited. All rights reserved.</p>
            <a href="#top">Back to top <span aria-hidden="true">&#8593;</span></a>
        </div>
    </div>
</footer>
    </main>

    {{-- GLOBAL JS: loaded only once. Future small interactions go in this file. --}}
    <script src="{{ asset('assets/kaushal/js/landing.js') }}" defer></script>
</body>

</html>
