<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The story behind Kaushal Agro Industries and KRUNKO, rooted in Bihar and built around makhana.">
    <title>Our Story | KRUNKO</title>
    <link rel="stylesheet" href="{{ asset('krunko/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/our-story/css/our-story.css') }}">
    <script src="{{ asset('krunko/js/script.js') }}" defer></script>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

@include('krunko.partials.header')

<main>
<section class="ks-story-hero" aria-labelledby="ks-story-hero-title">
    <div class="ks-story-container ks-story-hero__inner">

        <div class="ks-story-hero__content">

            <p class="ks-story-eyebrow">
                OUR STORY · ROOTED IN BIHAR
            </p>

            <h1 id="ks-story-hero-title">
                From the heart of
                Bihar, to every
                <span>happy crunch.</span>
            </h1>

            <p class="ks-story-hero__description">
                Our journey began with a simple idea:
                to bring the goodness of Bihar's makhana
                to more people, with care, quality
                and great taste.
            </p>

            <a href="#journey" class="ks-story-hero__button">
                Read Our Journey
                <span>→</span>
            </a>

        </div>

        <div class="ks-story-hero__visual">
            <img
                src="{{ asset('krunko/our-story/images/hero-mascot-story.png') }}"
                alt="KRUNKO mascot and Purnia Bihar makhana"
            >
        </div>

    </div>
</section>

<div class="ks-story-benefits">
    <div class="ks-story-container ks-story-benefits__inner">

        <div class="ks-story-benefit">
            <span>✦</span> 100% Vegetarian
        </div>

        <div class="ks-story-benefit">
            <span>✓</span> FSSAI Certified
        </div>

        <div class="ks-story-benefit">
            <span>⌖</span> Made in India
        </div>

        <div class="ks-story-benefit">
            <span>✿</span> Quality Ingredients
        </div>

    </div>
</div>
    {{-- <section class="story-hero">
        <div class="story-hero-bg"
             style="background-image:
             linear-gradient(90deg, rgba(25,43,28,.94) 0%, rgba(25,43,28,.82) 43%, rgba(25,43,28,.18) 100%),
             url('{{ asset('krunko/assets/mascot-farm.jpg') }}');">
        </div>

        <div class="story-container hero-inner">
            <div class="hero-copy">
                <p class="eyebrow">OUR STORY · ROOTED IN BIHAR</p>
                <h1>From the heart of Bihar,<br><span>to every happy crunch.</span></h1>
                <p>
                    Our story begins with makhana, a simple ingredient deeply connected with the land,
                    people and food culture of Bihar. Kaushal Agro brings that journey forward with care,
                    consistency and a new generation of products.
                </p>

                <div class="hero-actions">
                    <a href="#journey" class="btn btn-yellow">Read our journey <span>↓</span></a>
                    <a href="{{ route('krunko.customer') }}" class="text-link">Meet KRUNKO <span>↗</span></a>
                </div>
            </div>

            <aside class="hero-note">
                <span class="note-kicker">FROM OUR ROOTS</span>
                <strong>MAKHANA</strong>
                <p>A traditional ingredient. A modern journey.</p>
                <div class="note-line"></div>
                <small>Purnia · Bihar · India</small>
            </aside>
        </div>
    </section> --}}
{{-- KRUNKO OUR STORY | SECTION 02: OUR ROOTS + FARM TO FAMILY --}}
{{-- No header/footer. Add this partial inside the existing Our Story page. --}}
<section id="journey" class="kr-roots-section" aria-labelledby="kr-roots-heading">
    <div class="kr-rp-container">
        <div class="kr-roots-grid">
            <div class="kr-roots-content">
                <p class="kr-rp-eyebrow">OUR ROOTS</p>
                <h2 id="kr-roots-heading">A story that starts <span>close to the source.</span></h2>
                <p class="kr-roots-description">
                    Kaushal Agro Industries was built on a simple thought: to work with
                    Bihar's rich makhana heritage and create products that people can
                    trust and enjoy every day.
                </p>

                <div class="kr-roots-values">
                    <article class="kr-root-card">
                        <span class="kr-root-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 56 56" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M28 39C18 32 21 20 28 12c7 8 10 20 0 27Z" fill="#ffdf00"/>
                                <path d="M27 40C15 40 9 33 9 23c10 0 19 5 19 17ZM29 40c12 0 18-7 18-17-10 0-19 5-19 17Z"/>
                                <path d="M15 45c7-2 19-2 26 0M28 39v7"/>
                            </svg>
                            {{-- <i class="fa-solid fa-spa"></i> --}}

                        </span>
                        <h3>Rooted in<br>Bihar</h3>
                    </article>
                    <article class="kr-root-card">
                        <span class="kr-root-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 56 56" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M28 41C20 36 20 22 28 13c8 9 8 23 0 28Z" fill="#ffe300"/>
                                <path d="M28 41C15 41 9 31 10 23c10 1 18 9 18 18ZM28 41c13 0 19-10 18-18-10 1-18 9-18 18Z"/>
                                <path d="M16 44c6-3 18-3 24 0"/>
                            </svg>
                            {{-- <i class="fa-solid fa-spa"></i> --}}

                        </span>
                        <h3>Focused on<br>Makhana</h3>
                    </article>
                    <article class="kr-root-card">
                        <span class="kr-root-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 56 56" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="28" cy="15" r="7" fill="#ffdf00"/>
                                <circle cx="14" cy="23" r="6"/>
                                <circle cx="42" cy="23" r="6"/>
                                <path d="M17 42v-6c0-7 5-12 11-12s11 5 11 12v6H17Z" fill="#ffdf00"/>
                                <path d="M8 42v-5c0-5 3-8 8-9M48 42v-5c0-5-3-8-8-9"/>
                            </svg>
                        </span>
                        <h3>Built for<br>Today</h3>
                    </article>
                </div>
            </div>

            <div class="kr-roots-visual">
                <div class="kr-roots-yellow-blob" aria-hidden="true"></div>
                <div class="kr-roots-photo">
                    <img src="{{ asset('krunko/our-story/images/roots-lotus-field.png') }}"
                         alt="Lotus flowers in a makhana-growing landscape" loading="lazy">
                </div>
                <span class="kr-roots-spark" aria-hidden="true"><i></i><i></i><i></i></span>
            </div>
        </div>
    </div>
</section>

<section class="kr-process-section" aria-labelledby="kr-process-heading">
    <div class="kr-rp-container">
        <div class="kr-process-heading">
            <p class="kr-rp-eyebrow">OUR PROCESS</p>
            <h2 id="kr-process-heading">From Farm to <span>Family.</span></h2>
            <p>Every step is handled with care, from sourcing and processing to the finished makhana.</p>
        </div>

        <div class="kr-process-steps">
            <article class="kr-process-step">
                <img src="{{ asset('krunko/our-story/images/process-source.png') }}" alt="Makhana lotus plants" loading="lazy">
                <h3>Source</h3>
                <p>From makhana-growing regions</p>
            </article>
            <span class="kr-process-arrow" aria-hidden="true">→</span>
            <article class="kr-process-step">
                <img src="{{ asset('krunko/our-story/images/process-handle.png') }}" alt="Bowl of plain makhana" loading="lazy">
                <h3>Handle</h3>
                <p>Careful handling and processing</p>
            </article>
            <span class="kr-process-arrow" aria-hidden="true">→</span>
            <article class="kr-process-step">
                <img src="{{ asset('krunko/our-story/images/process-check.png') }}" alt="Worker checking food production" loading="lazy">
                <h3>Check</h3>
                <p>Attention to product quality</p>
            </article>
            <span class="kr-process-arrow" aria-hidden="true">→</span>
            <article class="kr-process-step">
                <img src="{{ asset('krunko/our-story/images/process-handle.png') }}" alt="Ready-to-enjoy makhana" loading="lazy">
                <h3>Share</h3>
                <p>Ready for people to enjoy</p>
            </article>
        </div>
    </div>
</section>


{{-- OUR STORY: WHY KRUNKO + OUR PEOPLE. No header / footer. --}}
<section class="ksp-story-blocks" aria-label="Why KRUNKO and our people">
    <div class="ksp-story-container">

        {{-- SECTION 04: WHY KRUNKO --}}
        <div class="ksp-why-grid" id="why-krunko">
            <div class="ksp-why-image">
                <img
                    src="{{ asset('krunko/our-story/images/why-krunko-mascot.png') }}"
                    alt="KRUNKO mascot holding a flavoured makhana jar"
                    loading="lazy"
                >
            </div>

            <div class="ksp-why-copy">
                <span class="ksp-eyebrow">WHY KRUNKO</span>

                <h2>Tradition got a<br><span>fun new voice.</span></h2>

                <p>
                    KRUNKO was created to take the timeless goodness
                    of makhana and turn it into a fun, tasty and everyday
                    snack for everyone.
                </p>

                <a href="{{ url('/krunko/customer') }}" class="ksp-cta">
                    Explore KRUNKO
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>

        {{-- SECTION 05: OUR PEOPLE --}}
        <div class="ksp-people-grid" id="our-people">
            <div class="ksp-people-copy">
                <span class="ksp-eyebrow">OUR PEOPLE</span>

                <h2>Built by people.<br><span>Not just machines.</span></h2>

                <p>
                    Behind every pack of KRUNKO is a dedicated team,
                    from farmers and sourcing partners to the people
                    who help with processing and quality. Their care
                    is part of every step of our journey.
                </p>
            </div>

            <div class="ksp-people-photos">
                <div class="ksp-photo-card ksp-team-photo">
                    <img
                        src="{{ asset('krunko/our-story/images/our-people-team.PNG') }}"
                        alt="Food production team working at a manufacturing facility"
                        loading="lazy"
                    >
                </div>

                <div class="ksp-photo-card ksp-processing-photo">
                    <img
                        src="{{ asset('krunko/our-story/images/our-people-processin.PNG') }}"
                        alt="Popped makhana moving through a food processing line"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

    </div>
</section>

<section class="kr-promise-section" id="our-promise">
    <div class="kr-promise-wrap">

        <div class="kr-promise-heading">
            <span class="kr-promise-eyebrow">OUR PROMISE</span>

            <h2>
                Keep it simple.
                <span>Keep it meaningful.</span>
            </h2>
        </div>

        <div class="kr-promise-grid">

            <div class="kr-promise-card">
                <div class="kr-promise-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h3>Care in handling</h3>
                <p>
                    Thoughtful processes
                    for a better product.
                </p>
            </div>

            <div class="kr-promise-card">
                <div class="kr-promise-icon">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <h3>Clear product focus</h3>
                <p>
                    Real makhana,
                    real goodness.
                </p>
            </div>

            <div class="kr-promise-card">
                <div class="kr-promise-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h3>Consistency matters</h3>
                <p>
                    Reliable quality
                    in every pack.
                </p>
            </div>

            <div class="kr-promise-card">
                <div class="kr-promise-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <h3>Proud of our roots</h3>
                <p>
                    From Bihar, with
                    care and commitment.
                </p>
            </div>

        </div>
    </div>
</section>

    {{-- <section class="origin-section story-space" id="journey">
        <div class="story-container origin-grid">
            <div class="origin-heading">
                <p class="section-kicker">01 · WHERE IT ALL BEGAN</p>
                <h2>A story that starts <span>close to the source.</span></h2>
            </div>

            <div class="origin-copy">
                <p class="lead">
                    For us, makhana is more than a product. It is part of a region, a livelihood
                    and a food tradition that has travelled through generations.
                </p>
                <p>
                    Kaushal Agro Industries was built with a simple thought: take this familiar ingredient,
                    handle it with care, and make it easier for more people and businesses to experience.
                    That same thought now connects our plain makhana business and KRUNKO, our playful
                    flavoured makhana brand.
                </p>

                <div class="origin-facts">
                    <div><strong>01</strong><span>Rooted in Bihar</span></div>
                    <div><strong>02</strong><span>Focused on makhana</span></div>
                    <div><strong>03</strong><span>Built for today</span></div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="journey-section story-space">
        <div class="story-container">
            <div class="section-intro centered">
                <p class="section-kicker">02 · FROM FARM TO FAMILY</p>
                <h2>One ingredient.<br><span>Many careful steps.</span></h2>
                <p>Every stage matters, from where makhana begins to how it reaches the people who enjoy it.</p>
            </div>

            <div class="journey-track">
                <article class="journey-card">
                    <div class="journey-icon">✦</div>
                    <span>STEP 01</span>
                    <h3>Source</h3>
                    <p>The journey starts close to makhana-growing regions and trusted supply networks.</p>
                </article>

                <article class="journey-card">
                    <div class="journey-icon">◎</div>
                    <span>STEP 02</span>
                    <h3>Handle</h3>
                    <p>The product moves through planned handling and processing steps at the unit.</p>
                </article>

                <article class="journey-card">
                    <div class="journey-icon">✓</div>
                    <span>STEP 03</span>
                    <h3>Check</h3>
                    <p>Quality and consistency are kept in focus before the product moves forward.</p>
                </article>

                <article class="journey-card">
                    <div class="journey-icon">☺</div>
                    <span>STEP 04</span>
                    <h3>Share</h3>
                    <p>Plain or flavoured, the final goal is simple: make makhana easier to enjoy and sell.</p>
                </article>
            </div>
        </div>
    </section> --}}

    {{-- <section class="krunko-story story-space">
        <div class="story-container krunko-grid">
            <div class="krunko-visual">
                <div class="yellow-orbit"></div>
                <img src="{{ asset('krunko/assets/logo.png') }}" alt="KRUNKO" class="krunko-logo">
                <div class="krunko-tag">A playful new chapter</div>
            </div>

            <div class="krunko-copy">
                <p class="section-kicker">03 · WHY KRUNKO</p>
                <h2>Tradition got a <span>fun new voice.</span></h2>
                <p class="lead">
                    KRUNKO grew from the idea that makhana can feel familiar and fresh at the same time.
                </p>
                <p>
                    While Kaushal Agro carries the roots, sourcing and business side of the journey,
                    KRUNKO brings colour, flavour and personality to the consumer experience.
                    It is our way of taking a traditional snack into modern everyday moments.
                </p>

                <a href="{{ route('krunko.customer') }}" class="btn btn-dark">Explore KRUNKO <span>↗</span></a>
            </div>
        </div>
    </section> --}}

    {{-- <section class="people-section story-space">
        <div class="story-container">
            <div class="people-grid">
                <div class="people-copy">
                    <p class="section-kicker">04 · PEOPLE BEHIND THE CRUNCH</p>
                    <h2>Built by people.<br><span>Not just machines.</span></h2>
                    <p>
                        Behind every product are people making decisions, handling materials,
                        checking details and moving the work forward every day.
                    </p>
                    <p>
                        This page is designed for your real team, factory and sourcing photos.
                        Replace the image slots with your actual photographs to make the story truly yours.
                    </p>
                </div>

                <div class="photo-collage">
                    <div class="photo-slot large"
                         style="background-image:url('{{ asset('krunko/assets/farm-bowl.jpg') }}')">
                        <span>TEAM / FACTORY</span>
                    </div>
                    <div class="photo-slot"
                         style="background-image:url('{{ asset('krunko/assets/mascot-farm.jpg') }}')">
                        <span>ROOTS / SOURCE</span>
                    </div>
                    <div class="photo-slot accent">
                        <strong>REAL PEOPLE.<br>REAL ROOTS.</strong>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="promise-section story-space">
        <div class="story-container">
            <div class="section-intro">
                <p class="section-kicker">05 · OUR PROMISE</p>
                <h2>Keep it simple.<br><span>Keep it meaningful.</span></h2>
            </div>

            <div class="promise-grid">
                <article>
                    <span>01</span>
                    <h3>Care in handling</h3>
                    <p>Thoughtful handling from sourcing through the next stage of the product journey.</p>
                </article>
                <article>
                    <span>02</span>
                    <h3>Clear product focus</h3>
                    <p>Plain makhana for business needs and flavoured makhana for consumer snacking.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>Consistency matters</h3>
                    <p>A focus on making the product experience dependable and easy to understand.</p>
                </article>
                <article>
                    <span>04</span>
                    <h3>Proud of our roots</h3>
                    <p>A business story connected to Bihar, makhana and the people behind the work.</p>
                </article>
            </div>
        </div>
    </section> --}}

    {{-- <section class="two-paths story-space">
        <div class="story-container">
            <div class="section-intro centered">
                <p class="section-kicker">06 · TWO WAYS WE SERVE</p>
                <h2>One makhana story.<br><span>Two clear journeys.</span></h2>
            </div>

            <div class="path-grid">
                <article class="path-card plain-card">
                    <span class="path-label">FOR BUSINESS</span>
                    <h3>Plain Makhana</h3>
                    <p>For retailers, traders and bulk buyers looking to start a supply conversation.</p>
                    <a href="{{ url('/the-farm-project') }}">Explore Plain Makhana <span>↗</span></a>
                </article>

                <article class="path-card flavour-card">
                    <span class="path-label">FOR SNACK LOVERS</span>
                    <h3>Flavoured Makhana</h3>
                    <p>KRUNKO brings a more playful, colourful and flavour-led side of makhana.</p>
                    <a href="{{ route('krunko.customer') }}">Explore KRUNKO Flavours <span>↗</span></a>
                </article>
            </div>
        </div>
    </section> --}}

    <section class="roots-section">
        <div class="story-container roots-grid">
            <div class="roots-copy">
                <p class="section-kicker">07 · WHERE WE ARE ROOTED</p>
                <h2>Purnia, Bihar.</h2>
                <p>
                    Kaushal Agro Industries Pvt Ltd<br>
                    Plug n Play Shed B1, Gate No. 3,<br>
                    Industrial Growth Centre Maranga,<br>
                    Purnia, Bihar - 854303
                </p>
                <a class="btn btn-yellow" href="{{ route('krunko.customer') }}#contact">Contact us <span>↗</span></a>
            </div>

            <div class="roots-map">
                <iframe
                    title="Kaushal Agro Industries location in Purnia"
                    src="https://www.google.com/maps?q=Kaushal%20Agro%20Industries%20Pvt%20Ltd%20Industrial%20Growth%20Centre%20Maranga%20Purnia%20Bihar%20854303&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    {{-- <section class="closing-section">
        <div class="story-container closing-inner">
            <p>FROM OUR ROOTS TO YOUR EVERYDAY</p>
            <h2>Every crunch carries a little piece of <span>where we come from.</span></h2>
            <div class="closing-actions">
                <a href="{{ url('/the-farm-project') }}" class="btn btn-yellow">Plain Makhana <span>↗</span></a>
                <a href="{{ route('krunko.customer') }}" class="btn btn-light">KRUNKO Flavours <span>↗</span></a>
            </div>
        </div>
    </section> --}}

</main>

@include('krunko.partials.footer')

</body>
</html>
