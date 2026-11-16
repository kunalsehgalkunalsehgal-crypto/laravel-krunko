<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Meet KRUNKO: wholesome makhana, irresistible flavours and a brighter way to snack.">
        
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/assets/krunko/css/enquiry-cart.css">

    <title>KRUNKO — Crunch Big. Snack Smart.</title>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('krunko/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/css/enquiry-cart.css') }}">
    <script src="{{ asset('krunko/js/script.js') }}" defer></script>
</head>

<body>
    @include('krunko.partials.header')

    <main>
        

<style>
/* =========================================
   KRUNKO - KAUSHAL GROUP LEGACY SECTION
   Completely independent design
========================================= */

.krlegacy-new {
    --kl-green: #365b28;
    --kl-dark: #152d16;
    --kl-yellow: #ffdf00;
    --kl-cream: #fff9eb;

    position: relative;
    isolation: isolate;
    width: 100%;
    overflow: hidden;
    padding: 95px 20px 90px;
    background: var(--kl-cream);
    color: var(--kl-dark);
    font-family: "Outfit", Arial, sans-serif;
}

.krlegacy-new *,
.krlegacy-new *::before,
.krlegacy-new *::after {
    box-sizing: border-box;
}

/* BACKGROUND CORNER SHAPES */

.krlegacy-new::before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -145px;
    left: -140px;
    width: 300px;
    height: 300px;
    background: var(--kl-yellow);
    border-radius: 37% 63% 60% 40%;
    transform: rotate(25deg);
}

.krlegacy-new::after {
    content: "";
    position: absolute;
    z-index: -1;
    right: -120px;
    bottom: -170px;
    width: 300px;
    height: 270px;
    background: var(--kl-green);
    border-radius: 60% 40% 55% 45%;
    transform: rotate(-15deg);
}

.krlegacy-new .kl-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

/* =========================================
   SECTION HEADING
========================================= */

.krlegacy-new .kl-header {
    text-align: center;
    margin-bottom: 65px;
}

.krlegacy-new .kl-eyebrow {
    display: inline-block;
    padding: 13px 30px;
    margin-bottom: 25px;
    background: var(--kl-yellow);
    color: var(--kl-dark);
    font-size: 13px;
    font-weight: 900;
    letter-spacing: 1.2px;
    line-height: 1.3;
    text-transform: uppercase;

    border-radius: 45% 12% 30% 12% /
                   15% 25% 15% 30%;

    transform: rotate(-1deg);
}

.krlegacy-new .kl-title {
    margin: 0;
    color: var(--kl-dark);
    font-family: "Outfit", Arial, sans-serif;
    font-size: clamp(42px, 7vw, 86px);
    font-weight: 900;
    line-height: 1.05;
    letter-spacing: -3px;
    text-transform: uppercase;
}

.krlegacy-new .kl-title span {
    color: var(--kl-green);
}

.krlegacy-new .kl-yellow-stroke {
    display: block;
    width: 200px;
    max-width: 45%;
    height: 10px;
    margin: 15px auto 26px;
    background: var(--kl-yellow);
    border-radius: 80% 20% 65% 35%;
    transform: rotate(-3deg);
}

.krlegacy-new .kl-subtitle {
    margin: 0;
    color: var(--kl-green);
    font-size: clamp(21px, 3vw, 34px);
    font-weight: 800;
    line-height: 1.25;
}

/* =========================================
   IMAGE + CONTENT GRID
========================================= */

.krlegacy-new .kl-story-grid {
    display: grid;
    grid-template-columns: 42% 1fr;
    gap: 55px;
    align-items: center;
    margin-bottom: 65px;
}

/* LEFT SIDE - YOUR IMAGE */

.krlegacy-new .kl-image-wrap {
    position: relative;
    width: 100%;
    min-height: 420px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* LIGHT GREEN SHAPE BEHIND IMAGE */

.krlegacy-new .kl-image-wrap::before {
    content: "";
    position: absolute;
    z-index: 0;
    width: 88%;
    aspect-ratio: 1;
    background: #e4eea0;
    border-radius: 55% 45% 58% 42% /
                   40% 60% 44% 56%;
    transform: rotate(-12deg);
}

.krlegacy-new .kl-years-image {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    max-width: 470px;
    height: auto;
    object-fit: contain;
}

/* YELLOW DECORATIVE LINES */

.krlegacy-new .kl-image-rays {
    position: absolute;
    top: 9%;
    right: 8%;
    z-index: 2;
    display: flex;
    gap: 8px;
    transform: rotate(-20deg);
}

.krlegacy-new .kl-image-rays i {
    display: block;
    width: 7px;
    height: 31px;
    border-radius: 20px;
    background: #f7ba00;
}

.krlegacy-new .kl-image-rays i:nth-child(2) {
    height: 23px;
    margin-top: 10px;
    transform: rotate(30deg);
}

.krlegacy-new .kl-image-rays i:nth-child(3) {
    height: 17px;
    margin-top: 19px;
    transform: rotate(55deg);
}

/* RIGHT SIDE - STORY */

.krlegacy-new .kl-story-content {
    padding-left: 40px;
    border-left: 1px solid #d5ddc7;
}

.krlegacy-new .kl-story-content p {
    margin: 0 0 23px;
    color: #263627;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.8;
}

.krlegacy-new .kl-story-content p:last-child {
    margin-bottom: 0;
}

.krlegacy-new .kl-story-content strong {
    color: var(--kl-dark);
    font-weight: 900;
}

/* =========================================
   CHAIRPERSON QUOTE
========================================= */

.krlegacy-new .kl-quote {
    position: relative;
    display: grid;
    grid-template-columns: 170px 1fr;
    align-items: center;
    gap: 35px;
    margin: 0 10px 70px 0;
    padding: 45px 60px 48px 45px;

    background: var(--kl-green);
    color: #ffffff;

    border-radius: 65px 50px 65px 50px /
                   35px 60px 35px 50px;

    box-shadow: 10px 11px 0 var(--kl-yellow);
}

.krlegacy-new .kl-quote-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    min-height: 130px;
    border-right: 1px solid rgba(255,255,255,0.5);

    color: var(--kl-yellow);
    font-family: Georgia, serif;
    font-size: 165px;
    line-height: 0.7;
    padding-top: 35px;
}

.krlegacy-new .kl-quote-text blockquote {
    margin: 0 0 20px;
    color: #fffdf2;
    font-family: "Outfit", Arial, sans-serif;
    font-size: clamp(23px, 3vw, 33px);
    font-weight: 800;
    line-height: 1.4;
    letter-spacing: -0.6px;
}

.krlegacy-new .kl-quote-text figcaption {
    color: #ffffff;
    font-size: 16px;
    line-height: 1.6;
}

.krlegacy-new .kl-quote-text figcaption strong {
    color: var(--kl-yellow);
    font-weight: 900;
}

/* =========================================
   BOTTOM SIGNATURE
========================================= */

.krlegacy-new .kl-signature {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 14px;
    text-align: center;
}

.krlegacy-new .kl-leaf-row {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 22px;
    width: 100%;
    max-width: 400px;
}

.krlegacy-new .kl-leaf-row span {
    width: 100%;
    max-width: 140px;
    height: 1px;
    background: #95ac7b;
}

.krlegacy-new .kl-leaf-row svg {
    width: 44px;
    height: 40px;
    color: var(--kl-green);
    flex-shrink: 0;
}

.krlegacy-new .kl-signature-name {
    color: var(--kl-dark);
    font-size: 22px;
    font-weight: 900;
    letter-spacing: 5px;
}

.krlegacy-new .kl-tagline {
    display: inline-block;
    padding: 9px 30px;
    background: var(--kl-yellow);
    color: var(--kl-dark);
    border-radius: 50% 15% 45% 14% /
                   20% 35% 15% 30%;
    font-family: Georgia, serif;
    font-size: 22px;
    font-style: italic;
    font-weight: 700;
    transform: rotate(-2deg);
}

/* =========================================
   TABLET RESPONSIVE
========================================= */

@media (max-width: 950px) {

    .krlegacy-new {
        padding: 75px 24px;
    }

    .krlegacy-new .kl-story-grid {
        grid-template-columns: 40% 1fr;
        gap: 30px;
    }

    .krlegacy-new .kl-story-content {
        padding-left: 25px;
    }

    .krlegacy-new .kl-image-wrap {
        min-height: 330px;
    }

    .krlegacy-new .kl-quote {
        grid-template-columns: 105px 1fr;
        gap: 25px;
        padding: 35px;
    }

    .krlegacy-new .kl-quote-icon {
        font-size: 115px;
        min-height: 100px;
    }
}

/* =========================================
   MOBILE RESPONSIVE
========================================= */

@media (max-width: 700px) {

    .krlegacy-new {
        padding: 60px 16px 65px;
    }

    .krlegacy-new::before {
        width: 170px;
        height: 170px;
        top: -90px;
        left: -90px;
    }

    .krlegacy-new::after {
        width: 150px;
        height: 150px;
        right: -85px;
        bottom: -95px;
    }

    .krlegacy-new .kl-header {
        margin-bottom: 35px;
    }

    .krlegacy-new .kl-eyebrow {
        font-size: 10px;
        letter-spacing: 0.5px;
        padding: 12px 16px;
        margin-bottom: 18px;
    }

    .krlegacy-new .kl-title {
        font-size: clamp(35px, 9vw, 50px);
        letter-spacing: -1.5px;
    }

    .krlegacy-new .kl-yellow-stroke {
        width: 130px;
        height: 7px;
        margin: 12px auto 20px;
    }

    .krlegacy-new .kl-subtitle {
        font-size: 20px;
    }

    .krlegacy-new .kl-story-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-bottom: 40px;
    }

    .krlegacy-new .kl-image-wrap {
        width: 100%;
        min-height: 0;
        max-width: 400px;
        margin: 0 auto;
        padding: 12px 0;
    }

    .krlegacy-new .kl-years-image {
        max-width: 340px;
    }

    .krlegacy-new .kl-story-content {
        padding-left: 0;
        border-left: none;
    }

    .krlegacy-new .kl-story-content p {
        font-size: 14px;
        line-height: 1.75;
        margin-bottom: 17px;
    }

    .krlegacy-new .kl-quote {
        display: block;
        margin: 0 7px 55px 0;
        padding: 34px 25px;
        border-radius: 35px 25px 35px 25px;
        box-shadow: 7px 8px 0 var(--kl-yellow);
    }

    .krlegacy-new .kl-quote-icon {
        display: block;
        width: 100%;
        min-height: 0;
        padding: 0;
        margin: 0 0 12px;
        border-right: none;
        font-size: 86px;
        line-height: 0.6;
        text-align: left;
    }

    .krlegacy-new .kl-quote-text blockquote {
        font-size: 22px;
        line-height: 1.45;
    }

    .krlegacy-new .kl-quote-text figcaption {
        font-size: 13px;
    }

    .krlegacy-new .kl-signature-name {
        font-size: 17px;
        letter-spacing: 3px;
    }

    .krlegacy-new .kl-tagline {
        font-size: 18px;
        padding: 8px 22px;
    }
}
</style>


{{-- =========================================
     KAUSHAL GROUP SECTION HTML
========================================= --}}

<section
    class="krlegacy-new"
    id="kaushal-group-legacy"
    aria-labelledby="kl-legacy-title"
>

    <div class="kl-container">

        {{-- SECTION HEADING --}}
        <div class="kl-header">

            <span class="kl-eyebrow">
                THE LEGACY BEHIND OUR JOURNEY
            </span>

            <h2 class="kl-title" id="kl-legacy-title">
                KAUSHAL <span>GROUP</span>
            </h2>

            <span
                class="kl-yellow-stroke"
                aria-hidden="true"
            ></span>

            <p class="kl-subtitle">
                A Legacy Built on Trust.<br>
                A Future Driven by Quality.
            </p>

        </div>


        {{-- IMAGE + STORY CONTENT --}}
        <div class="kl-story-grid">

            {{-- LEFT: CUSTOM 40+ IMAGE --}}
            <div class="kl-image-wrap">

                <img
                    src="{{ asset('krunko/our-story/images/40-years-legacy.png') }}"
                    alt="Kaushal Group, 40 plus years of experience"
                    class="kl-years-image"
                    loading="lazy"
                    decoding="async"
                >

                <span class="kl-image-rays" aria-hidden="true">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>

            </div>


            {{-- RIGHT: COMPLETE COMPANY STORY --}}
            <div class="kl-story-content">

                <p>
                    With over
                    <strong>40 years of experience</strong>,
                    our Chairperson,
                    <strong>Mr. Sunil Agarwal</strong>,
                    has built the foundation of Kaushal Group
                    on hard work, integrity and an
                    uncompromising commitment to quality.
                </p>

                <p>
                    Guided by his vision and leadership,
                    and carried forward by
                    <strong>
                        Managing Directors Mrs. Sarita Agarwal,
                        Ayush Agarwal and Vivek Agarwal
                    </strong>,
                    the Group continues to strengthen its
                    legacy in the agro-products sector.
                </p>

                <p>
                    With deep agricultural roots and a
                    progressive outlook, we strive to
                    transform India's agricultural produce
                    through quality-driven processing,
                    innovation and responsible
                    business practices.
                </p>

                <p>
                    At Kaushal Group, quality is not just
                    a promise; it is a responsibility we
                    uphold with every product, every
                    partnership and every customer
                    we serve.
                </p>

            </div>

        </div>


        {{-- CHAIRPERSON QUOTE --}}
        <figure class="kl-quote">

            <span
                class="kl-quote-icon"
                aria-hidden="true"
            >“</span>

            <div class="kl-quote-text">

                <blockquote>
                    Four decades of experience have taught
                    us that a business is built with hard
                    work, but a legacy is built with trust.
                </blockquote>

                <figcaption>
                    —
                    <strong>Mr. Sunil Agarwal</strong>,
                    Chairperson
                </figcaption>

            </div>

        </figure>


        {{-- BOTTOM BRAND SIGNATURE --}}
        <div class="kl-signature">

            <div class="kl-leaf-row" aria-hidden="true">

                <span></span>

                <svg
                    viewBox="0 0 50 42"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M7 36C16 20 25 13 42 5
                           M21 20C13 12 8 10 7 8
                           C21 7 27 13 21 20
                           M28 14C27 5 35 3 45 3
                           C43 14 35 18 28 14
                           M13 29C3 24 3 18 2 16
                           C15 17 20 23 13 29Z"
                        stroke="currentColor"
                        stroke-width="2.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>

                <span></span>

            </div>

            <strong class="kl-signature-name">
                KAUSHAL GROUP
            </strong>

            <em class="kl-tagline">
                From Soil To Soul.
            </em>

        </div>

    </div>

</section>
    </main>
    @include('krunko.partials.footer')
    
<script src="/assets/krunko/js/enquiry-cart.js" defer></script>
<script src="{{ asset('krunko/js/enquiry-cart.js') }}" defer></script>
</body>

</html>
