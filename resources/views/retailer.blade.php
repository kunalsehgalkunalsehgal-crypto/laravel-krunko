<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffdf00" />
    <meta name="description" content="Explore THE FARM PROJECT products, view their front and back packaging, and send an enquiry for the product you need." />
    <title>THE FARM PROJECT Products for Businesses | Retailer Enquiry</title>
    <!-- Existing Farm Project design CSS -->
    <link rel="stylesheet" href="{{ asset('assets/farm-project/css/retailer.css') }}?v=20261117">

    <link rel="stylesheet" href="{{ asset('assets/farm-project/css/retailer-products.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/farm-project/css/process-flow.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <script defer src="{{ asset('assets/farm-project/js/retailer.js') }}"></script>
    <script defer src="{{ asset('assets/farm-project/js/farm-enquiry-submit.js') }}"></script>
    <style>
/* THE FARM PROJECT | OUR STRENGTHS | Editorial Bento v3 */
            .fp-strength-bento {
                --fs-forest: #173a29;
                --fs-forest-dark: #0f3021;
                --fs-lime: #a9ce50;
                --fs-lemon: #f2ce5b;
                --fs-cream: #fcf9f0;
                --fs-line: #e1e6d8;
                background: var(--fs-cream);
                color: var(--fs-forest);
                padding: 75px 22px 75px;
                overflow: hidden;
                isolation: isolate;
                font-family: 'DM Sans', Arial, sans-serif;
            }

            .fp-strength-bento *,
            .fp-strength-bento *::before,
            .fp-strength-bento *::after {
                box-sizing: border-box
            }

            .fp-strength-bento .section-head h2 {
                color: black;
            }

            .fp-strength-bento .fsb-container {
                width: 100%;
                max-width: 1250px;
                margin-inline: auto
            }

            .fp-strength-bento .fsb-head {
                text-align: center;
                margin-bottom: 40px
            }

            .fp-strength-bento .fsb-eyebrow {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 16px;
                margin: 0 0 9px;
                font-size: 12px;
                letter-spacing: .2em;
                font-weight: 850;
                text-transform: uppercase;
                color: #648534
            }

            .fp-strength-bento .fsb-eyebrow::before,
            .fp-strength-bento .fsb-eyebrow::after {
                content: '';
                width: 46px;
                height: 2px;
                border-radius: 20px;
                background: #9fb960
            }

            .fp-strength-bento .fsb-page-title {
                margin: 0;
                color: #132f21;
                font-family: 'Outfit', Arial, sans-serif;
                font-weight: 850;
                font-size: clamp(30px, 4.2vw, 56px);
                letter-spacing: -.04em;
                line-height: 1.08
            }

            .fp-strength-bento .fsb-page-title em {
                font-style: normal;
                color: #80a632
            }

            .fp-strength-bento .fsb-layout {
                display: grid;
                grid-template-columns: minmax(0, .92fr) minmax(0, 1.08fr);
                gap: 22px;
                align-items: stretch
            }

            /* Left story panel */
            .fp-strength-bento .fsb-story {
                position: relative;
                min-height: 530px;
                padding: 53px clamp(26px, 4.5vw, 56px);
                background: var(--fs-forest);
                border-radius: 28px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                color: white
            }

            .fp-strength-bento .fsb-story::before {
                content: '';
                position: absolute;
                right: -140px;
                top: -160px;
                width: 355px;
                height: 355px;
                border: 1px solid rgba(201, 231, 145, .22);
                border-radius: 50%;
                box-shadow: 0 0 0 50px rgba(201, 231, 145, .035), 0 0 0 110px rgba(201, 231, 145, .025)
            }

            .fp-strength-bento .fsb-topline {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                color: #d5e6bc;
                font-size: 12px;
                letter-spacing: .18em;
                font-weight: 850;
                text-transform: uppercase
            }

            .fp-strength-bento .fsb-dot {
                display: inline-block;
                width: 9px;
                height: 9px;
                background: var(--fs-lemon);
                border-radius: 50%;
                box-shadow: 0 0 0 5px rgba(242, 206, 91, .12)
            }

            .fp-strength-bento .fsb-story h3 {
                position: relative;
                z-index: 1;
                margin: 38px 0 22px;
                font-family: 'Outfit', Arial, sans-serif;
                font-size: clamp(40px, 4.5vw, 69px);
                line-height: 1.07;
                letter-spacing: -.055em;
                font-weight: 850;
                color: #fffef5
            }

            .fp-strength-bento .fsb-story h3 span {
                color: var(--fs-lemon);
                font-family: Georgia, serif;
                font-style: italic;
                font-weight: 500;
                letter-spacing: -.045em
            }

            .fp-strength-bento .fsb-story p {
                max-width: 410px;
                position: relative;
                z-index: 1;
                font-size: 16px;
                line-height: 1.75;
                color: #e0e9dd;
                margin: 0
            }

            .fp-strength-bento .fsb-story-footer {
                position: relative;
                display: flex;
                align-items: center;
                gap: 13px;
                z-index: 1;
                border-top: 1px solid rgba(255, 255, 255, .22);
                padding-top: 24px;
                margin-top: 54px;
                color: #e8f1db;
                font-weight: 700;
                font-size: 13px;
                letter-spacing: .02em
            }

            .fp-strength-bento .fsb-story-footer svg {
                width: 30px;
                height: 30px;
                stroke: #e3cb67;
                flex: none
            }

            /* Bento stats */
            .fp-strength-bento .fsb-stats {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 18px
            }

            .fp-strength-bento .fsb-card {
                min-width: 0;
                position: relative;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding: 30px 30px 27px;
                min-height: 256px;
                border-radius: 24px;
                box-shadow: 0 8px 26px rgba(23, 58, 41, .045);
                border: 1px solid var(--fs-line);
                background: white;
                color: var(--fs-forest)
            }

            .fp-strength-bento .fsb-card--gold {
                background: #f5d878;
                border-color: #ecc85c
            }

            .fp-strength-bento .fsb-card--lime {
                background: #e8f1d2;
                border-color: #dbe8ba
            }

            .fp-strength-bento .fsb-icon {
                display: grid;
                place-items: center;
                width: 55px;
                height: 55px;
                border-radius: 16px;
                background: rgba(24, 62, 43, .075);
                color: #285c37;
                margin-bottom: 16px
            }

            .fp-strength-bento .fsb-icon svg {
                width: 29px;
                height: 29px;
                fill: none;
                stroke: currentColor;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-width: 1.9
            }

            .fp-strength-bento .fsb-card h4 {
                margin: 0 0 7px;
                color: var(--fs-forest-dark);
                font: 850 clamp(45px, 5vw, 72px)/1 'Outfit', Arial, sans-serif;
                letter-spacing: -.06em
            }

            .fp-strength-bento .fsb-card p {
                margin: 0;
                max-width: 220px;
                color: #40574a;
                font: 650 clamp(14px, 1.45vw, 18px)/1.3 'DM Sans', Arial, sans-serif
            }

            .fp-strength-bento .fsb-card::after {
                content: '';
                position: absolute;
                right: -30px;
                bottom: -36px;
                width: 125px;
                height: 125px;
                border: 1px solid rgba(30, 77, 43, .14);
                border-radius: 50%;
                box-shadow: 0 0 0 18px rgba(30, 77, 43, .035)
            }

            .fp-strength-bento .fsb-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 16px 35px rgba(23, 58, 41, .105);
                transition: transform .22s ease, box-shadow .22s ease
            }

            /* Finishing ribbon */
            .fp-strength-bento .fsb-footnote {
                margin-top: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 26px;
                flex-wrap: wrap;
                color: #4d6f4b;
                font-weight: 750;
                font-size: 12px;
                letter-spacing: .055em;
                text-transform: uppercase
            }

            .fp-strength-bento .fsb-footnote .fsb-spark {
                color: #98b64d;
                font-size: 18px;
                line-height: 1
            }

            @media(max-width:1050px) {
                .fp-strength-bento .fsb-layout {
                    grid-template-columns: minmax(0, .87fr) minmax(0, 1.13fr)
                }

                .fp-strength-bento .fsb-story {
                    padding: 38px 32px;
                    min-height: 510px
                }

                .fp-strength-bento .fsb-story h3 {
                    font-size: clamp(34px, 5vw, 55px)
                }

                .fp-strength-bento .fsb-card {
                    padding: 23px;
                    min-height: 245px
                }
            }

            @media(max-width:760px) {
                .fp-strength-bento {
                    padding: 68px 16px 65px
                }

                .fp-strength-bento .fsb-head {
                    margin-bottom: 26px
                }

                .fp-strength-bento .fsb-layout {
                    grid-template-columns: 1fr;
                    gap: 14px
                }

                .fp-strength-bento .fsb-story {
                    min-height: 345px;
                    padding: 35px 29px;
                    border-radius: 22px
                }

                .fp-strength-bento .fsb-story h3 {
                    font-size: clamp(39px, 8vw, 57px);
                    margin: 24px 0 16px
                }

                .fp-strength-bento .fsb-story p {
                    font-size: 14px
                }

                .fp-strength-bento .fsb-story-footer {
                    margin-top: 30px
                }

                .fp-strength-bento .fsb-stats {
                    gap: 12px
                }

                .fp-strength-bento .fsb-card {
                    min-height: 218px;
                    padding: 20px;
                    border-radius: 18px
                }

                .fp-strength-bento .fsb-card h4 {
                    font-size: clamp(43px, 9vw, 60px)
                }

                .fp-strength-bento .fsb-card p {
                    font-size: 13px
                }

                .fp-strength-bento .fsb-footnote {
                    gap: 10px;
                    font-size: 10px
                }
            }

            @media(max-width:380px) {
                .fp-strength-bento .fsb-card {
                    min-height: 200px;
                    padding: 16px
                }

                .fp-strength-bento .fsb-icon {
                    width: 45px;
                    height: 45px
                }

                .fp-strength-bento .fsb-card h4 {
                    font-size: 42px
                }

                .fp-strength-bento .fsb-card p {
                    font-size: 12px
                }
            }

            @media(prefers-reduced-motion:reduce) {
                .fp-strength-bento .fsb-card:hover {
                    transform: none;
                    transition: none
                }
            }

/* OUR STRENGTHS - FONT AWESOME */
.fp-strength-bento .fsb-icon {
    width: 68px;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px;
}

.fp-strength-bento .fsb-icon i {
    font-size: 27px !important;
    color: #285c37;
    line-height: 1;
}

/* Left green panel icon */

.fp-strength-bento .fsb-story-footer i {
    color: #f5d35a;
    font-size: 25px;
    line-height: 1;
}

@media (max-width: 600px) {
    .fp-strength-bento .fsb-icon {
        width: 55px;
        height: 55px;
    }

    .fp-strength-bento .fsb-icon i {
        font-size: 22px !important;
    }
}


/* =============================================
   THE FARM PROJECT – HOW TO ENQUIRE
   Single source of truth; all new styles are inline.
   Retains original top-border steps and pastel icons.
============================================= */
#how-it-works {
    background: #fff;
}
#how-it-works .section-head.centered {
    margin-bottom: 34px;
}
#how-it-works .how-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(230px, 285px);
    align-items: center;
    gap: clamp(22px, 3vw, 38px);
    width: 100%;
}
#how-it-works .how-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 19px;
    min-width: 0;
}
#how-it-works .how-card {
    min-width: 0;
    border-top: 2px solid var(--black, #181a14);
    padding-top: 18px;
}
#how-it-works .how-card > div[aria-hidden="true"] {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 94px;
    height: 94px;
    min-width: 94px;
    min-height: 94px;
    padding: 0;
    margin: 22px auto 20px;
    border-radius: 50%;
    line-height: 1;
    transform: none;
}
#how-it-works .how-card:nth-child(1) > div[aria-hidden="true"] { background: #e7efd8; }
#how-it-works .how-card:nth-child(2) > div[aria-hidden="true"] { background: #fff0a5; }
#how-it-works .how-card:nth-child(3) > div[aria-hidden="true"] { background: #ffded5; }
#how-it-works .how-card > div[aria-hidden="true"] i {
    display: inline-block;
    width: auto;
    height: auto;
    font-size: 33px;
    line-height: 1;
    color: #243c20;
    transform: none;
}
#how-it-works .how-card h3 {
    font-size: clamp(19px, 1.9vw, 24px);
    line-height: 1.2;
    letter-spacing: -.035em;
    margin: 0 0 10px;
}
#how-it-works .how-card p {
    font-size: 14px;
    line-height: 1.65;
    margin: 0;
}
#how-it-works .how-mascot {
    min-width: 0;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    align-self: center;
}
#how-it-works .how-mascot img {
    display: block;
    width: min(100%, 230px);
    max-width: 100%;
    height: auto;
    object-fit: contain;
}
#how-it-works .how-cta {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 16px 24px;
    margin-top: 28px;
    padding-top: 22px;
    border-top: 1px solid var(--line, #e7e7dc);
}
#how-it-works .how-cta p {
    margin: 0;
    font: 800 19px/1.3 var(--heading, Outfit, sans-serif);
    letter-spacing: -.03em;
}
#how-it-works .how-cta .pill-button {
    gap: 24px;
    padding: 14px 22px;
}
@media (max-width: 1050px) {
    #how-it-works .how-layout {
        grid-template-columns: minmax(0, 1fr) 225px;
        gap: 20px;
    }
    #how-it-works .how-grid { gap: 14px; }
    #how-it-works .how-card h3 { font-size: 20px; }
}
@media (max-width: 900px) {
    #how-it-works .how-layout {
        grid-template-columns: 1fr;
        gap: 26px;
    }
    #how-it-works .how-grid { gap: 22px; }
    #how-it-works .how-mascot img { width: min(245px, 60vw); }
}
@media (max-width: 700px) {
    #how-it-works .section-head.centered { margin-bottom: 28px; }
    #how-it-works .how-layout { gap: 14px; }
    #how-it-works .how-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    #how-it-works .how-card {
        display: grid;
        grid-template-columns: 90px minmax(0, 1fr);
        gap: 0 17px;
        align-items: center;
        padding-top: 14px;
    }
    #how-it-works .how-card > span { grid-column: 1 / -1; }
    #how-it-works .how-card > div[aria-hidden="true"] {
        grid-column: 1;
        grid-row: 2 / 4;
        width: 82px;
        height: 82px;
        min-width: 82px;
        min-height: 82px;
        margin: 12px auto;
    }
    #how-it-works .how-card > div[aria-hidden="true"] i { font-size: 29px; }
    #how-it-works .how-card h3 {
        grid-column: 2;
        grid-row: 2;
        align-self: end;
        font-size: 21px;
        margin-bottom: 7px;
    }
    #how-it-works .how-card p {
        grid-column: 2;
        grid-row: 3;
        align-self: start;
        font-size: 14px;
    }
    #how-it-works .how-mascot img { width: min(210px, 56vw); }
    #how-it-works .how-cta {
        margin-top: 16px;
        padding-top: 20px;
        gap: 14px;
        text-align: center;
    }
    #how-it-works .how-cta p {
        font-size: 18px;
        width: 100%;
    }
    #how-it-works .how-cta .pill-button { padding: 13px 23px; }
}
@media (max-width: 370px) {
    #how-it-works .how-card {
        grid-template-columns: 78px minmax(0, 1fr);
        gap: 0 12px;
    }
    #how-it-works .how-card > div[aria-hidden="true"] {
        width: 72px;
        height: 72px;
        min-width: 72px;
        min-height: 72px;
    }
    #how-it-works .how-card h3 { font-size: 19px; }
}

    </style>
</head>

<body class="retailer-page">
    <a class="skip-link" href="#main-content">Skip to content</a>
    <div class="announce-bar">✳ THREE PRODUCTS. PLENTY OF POSSIBILITIES. ✳ LET’S TALK BUSINESS ENQUIRIES.</div>

    <header class="site-header">
        <div class="container header-row">
            <!-- <a class="brand-logo" href="{{ url('/') }}" aria-label="The Farm Project, back to Kaushal Agro"><img src="{{ asset('assets/farm-project/images/black-logo.png') }}" alt="KRUNKO" /></a> -->
            <a class="brand-logo" href="{{ url('/') }}" aria-label="The Farm Project, back to Kaushal Agro">
                <img src="{{ asset('assets/farm-project/images/black-logo.png') }}" alt="The Farm Project" width="1254" height="1254" />
            </a>
            <nav class="retail-nav" id="retail-nav" aria-label="Retailer page navigation">
                <a href="#why-us">Why THE FARM PROJECT</a>
                <a href="#our-process">Our Process</a>
                <a href="#plain-makhana">Our Products</a>
                <a href="#how-it-works">How it works</a>
            </nav>
            <div class="header-controls">
                <a class="nav-cta" href="#enquiry">Send an enquiry ↗</a>
                <button class="mobile-nav-toggle" type="button" aria-controls="retail-nav" aria-expanded="false" aria-label="Open menu"><span></span><span></span><span></span></button>
            </div>
        </div>
    </header>

    <main id="main-content">
        <!-- HERO: existing markup and visual styles preserved -->
        <section class="retail-hero" aria-labelledby="retailer-hero-heading">
            <div class="container retail-hero-grid">
                <div class="hero-message">
                    <div class="mini-eyebrow"><span class="star-mark">✳</span> FOR RETAILERS, TRADERS &amp; BULK BUYERS
                    </div>
                    <h1 id="retailer-hero-heading"><span>MAKHANA</span><br /><em>PRODUCTS.</em><br />BIG POTENTIAL.</h1>
                    <p>Explore THE FARM PROJECT products for your business. Hover to see the front and back of each
                        pack, then open a card for details and enquire.</p>
                    <div class="hero-actions">
                        <a class="pill-button pill-black" href="#plain-makhana">Explore our products <span aria-hidden="true">↗</span></a>
                        <a class="quiet-link" href="#our-process">See our process <span aria-hidden="true">↘</span></a>
                    </div>
                    <div class="hero-short-proof"><span><b>03</b> products</span><span class="dot-sep">✳</span><span>Product-specific enquiries</span></div>
                </div>
                {{-- <div class="hero-showcase plain-showcase" data-photo-container="hero">
                    <div class="hero-image-shell">
                        <div class="kr-hero-photo-fallback" aria-hidden="true">THE FARM PROJECT<span>✳</span></div>
                        <img src="{{ asset('assets/farm-project/images/newimage.png') }}" class="real-photo real-photo--hero" data-real-photo="hero" alt="The Farm Project makhana product" width="900" height="900" fetchpriority="high" decoding="async" />
                    </div>
                </div> --}}
                <div class="hero-showcase plain-showcase fp-hero-video-showcase">
    <div class="hero-image-shell fp-hero-video-shell">
        <video class="fp-hero-mascot-video" autoplay muted loop playsinline
               preload="metadata"
               poster="{{ asset('assets/farm-project/videos/mascot-video-poster.webp') }}"
               aria-label="The Farm Project mascot showing a makhana packet">
            <source src="{{ asset('assets/farm-project/videos/home-video-2.mp4') }}" type="video/mp4">
            Your browser does not support video.
        </video>
        <span class="fp-hero-video-tag">MEET THE FARM PROJECT ✳</span>
    </div>
</div>

            </div>
            <div class="marquee-strip">
                <div class="marquee-track" aria-label="The Farm Project products for your business">MAKHANA PRODUCTS
                    <span>✳</span> BULK ENQUIRIES <span>✳</span> QUALITY CONVERSATIONS <span>✳</span> MAKHANA PRODUCTS
                    <span>✳</span> BULK ENQUIRIES <span>✳</span> QUALITY CONVERSATIONS <span>✳</span></div>
            </div>
        </section>

        <section class="benefit-section section-space" id="why-us">
            <div class="container">
                <div class="section-head flex-head">
                    <div>
                        <p class="section-kicker">WHY BUYERS ASK ABOUT THE FARM PROJECT</p>
                        <h2>Makhana products.<br /><span>A clear business conversation.</span></h2>
                    </div>
                    <p class="section-side-note">From your first enquiry to supply questions, we keep the focus on your
                        selected product and the details your business needs.</p>
                </div>
                <div class="benefit-grid">
                    <article class="benefit-item"><span class="benefit-number">01 /</span><span aria-hidden="true" class="benefit-symbol">✷</span>
                        <h3>Three products.<br />Clear focus.</h3>
                        <p>Explore each product and enquire for the one that suits your business.</p>
                    </article>
                    <article class="benefit-item"><span class="benefit-number">02 /</span><span aria-hidden="true" class="benefit-symbol">◉</span>
                        <h3>Know the details.</h3>
                        <p>Ask about the product, quantities, packaging and pricing before planning an order.</p>
                    </article>
                    <article class="benefit-item"><span class="benefit-number">03 /</span><span aria-hidden="true" class="benefit-symbol">↗</span>
                        <h3>Enquire with ease.</h3>
                        <p>Share your city, business type and quantity requirement for your chosen product.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- THE FARM PROJECT | OUR PROCESS | 10-step visual flow -->
        <section class="fp-flow section-space" id="our-process" aria-labelledby="fp-flow-title">
            <div class="container">
                {{-- <header class="fp-flow__header">
      <p class="fp-flow__eyebrow">OUR PROCESS</p>
      <h2 class="fp-flow__title" id="fp-flow-title">From Seed to Packed Makhana</h2>
      <p class="fp-flow__intro">A carefully managed processing flow, from raw makhana seeds to graded and packed makhana.</p>
    </header> --}}
                <div class="section-head kr-products-heading">
                    <div>
                        <p class="section-kicker">OUR PROCESS</p>
                        <h2 id="fp-flow-title">From Seed to <em>Packed Makhana</em></h2>
                        <p>A carefully managed processing flow, from raw makhana seeds to graded and packed makhana.</p>
                    </div>
                    <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
                </div>

                <ol class="fp-flow__grid" aria-label="Makhana processing steps in order">
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 1">01</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/1st.png') }}" alt="Illustrative visual of makhana seed washing" width="680" height="528" loading="lazy" decoding="async">
                        {{-- <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/01-washing.webp') }}" alt="Illustrative visual of makhana seed washing" width="680" height="528" loading="lazy" decoding="async"> --}}
                        <h3 class="fp-flow__step-title">Makhana Seed Washing</h3>
                        <p class="fp-flow__step-desc">Raw seeds are washed to remove dirt and unwanted material.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 2">02</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/2nd.png') }}" alt="Illustrative visual of drying" width="680" height="528" loading="lazy" decoding="async">
                        {{-- <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/02-drying.webp') }}" alt="Illustrative visual of drying" width="680" height="528" loading="lazy" decoding="async"> --}}
                        <h3 class="fp-flow__step-title">Drying</h3>
                        <p class="fp-flow__step-desc">Washed seeds are dried and prepared for further processing.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 3">03</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/3rd.png') }}" alt="Illustrative visual of seed grading" width="680" height="528" loading="lazy" decoding="async">
                        {{-- <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/03-seed-grading.webp') }}" alt="Illustrative visual of seed grading" width="680" height="528" loading="lazy" decoding="async"> --}}
                        <h3 class="fp-flow__step-title">Seed Grading</h3>
                        <p class="fp-flow__step-desc">Seeds are grouped by size for more consistent processing.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 4">04</span>
                        {{-- <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/04-roasting.webp') }}" alt="Illustrative visual of roasting" width="680" height="528" loading="lazy" decoding="async"> --}}
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/4th.png') }}" alt="Illustrative visual of roasting" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Roasting</h3>
                        <p class="fp-flow__step-desc">Graded seeds go through machine-based roasting.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 5">05</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/05-popping.webp') }}" alt="Illustrative visual of popping" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Popping</h3>
                        <p class="fp-flow__step-desc">Roasted seeds are popped into makhana.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 6">06</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/06-hulling.webp') }}" alt="Illustrative visual of hulling" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Hulling</h3>
                        <p class="fp-flow__step-desc">Remaining husk is separated and popped makhana is cleaned.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 7">07</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/07-makhana-grading.webp') }}" alt="Illustrative visual of makhana grading" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Makhana Grading</h3>
                        <p class="fp-flow__step-desc">Popped makhana is graded into defined size categories.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 8">08</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/08-chipta-grading.webp') }}" alt="Illustrative visual of chipta grading" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Chipta Grading</h3>
                        <p class="fp-flow__step-desc">Flat and unwanted pieces are separated from selected lots.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 9">09</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/09-colour-sorting.webp') }}" alt="Illustrative visual of colour sorting" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Colour Sorting</h3>
                        <p class="fp-flow__step-desc">Visibly discoloured pieces are removed for a cleaner look.</p>
                    </li>
                    <li class="fp-flow__card">
                        <span class="fp-flow__number" aria-label="Step 10">10</span>
                        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/10-packaging.webp') }}" alt="Illustrative visual of inspection &amp; packaging" width="680" height="528" loading="lazy" decoding="async">
                        <h3 class="fp-flow__step-title">Inspection &amp; Packaging</h3>
                        <p class="fp-flow__step-desc">Finished makhana is checked and prepared for packing.</p>
                    </li>
                </ol>
                {{-- <p class="fp-flow__note">Process visuals are illustrative. The processing steps follow the Farm Project
                    production brief.</p> --}}
            </div>
        </section>

        <!-- PRODUCT CARDS: Team.html-style in-place horizontal expansion -->
        <!-- Existing 3-product horizontal expandable cards preserved -->
        <section class="flavours-section kr-products-section section-space" id="plain-makhana" aria-labelledby="kr-products-heading">
            <div class="container">
                <div class="section-head kr-products-heading">
                    <div>
                        <p class="section-kicker">THREE RANGES. CLEAR GRADE OPTIONS.</p>
                        <h2 id="kr-products-heading">Meet our <em>Products.</em></h2>
                        <p>Explore Premium, Supreme and Standard makhana. Hover to see a pack's back view, then open a
                            card to choose your grade.</p>
                    </div>
                    <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
                </div>
                <div class="kr-product-grid" id="kr-product-grid">
                    <!-- PREMIUM / PURE GRADES: original flip + expand layout preserved -->
                    <article class="kr-product-card" data-product-name="Premium">
                        <div class="kr-product-preview">
                            <span class="kr-product-index">01 / PURE GRADES</span>
                            <button type="button" class="kr-product-preview-photo kr-product-flip" aria-label="Premium packaging reference: hover to see back; tap on touch screens to switch sides" aria-pressed="false" title="Hover to view back of the reference pack">
                                <img class="front" src="{{ asset('assets/farm-project/images/green-bg-removed.png') }}" alt="Packaging reference photo, front view; exact Premium pack not yet verified" width="560" height="480" loading="lazy" decoding="async" />
                                <img class="back" src="{{ asset('assets/farm-project/images/green-back-bg-removed.png') }}" alt="Packaging reference photo, back view; exact Premium pack not yet verified" width="560" height="480" loading="lazy" decoding="async" />
                                <span class="kr-flip-tip" aria-hidden="true">HOVER TO SEE BACK ↗</span>
                            </button>
                            <button type="button" class="kr-product-trigger" aria-expanded="false" aria-controls="kr-product-details-1" aria-label="View Premium Pure Grades details">
                                <span class="kr-product-heading-text">Premium</span>
                                <span class="kr-product-preview-subtitle">Pure Grades · View available grades</span>
                                <span class="kr-view-more">VIEW DETAILS <span aria-hidden="true">↗</span></span>
                            </button>
                        </div>
                        <div class="kr-product-expanded" inert id="kr-product-details-1" aria-hidden="true">
                            <div class="kr-product-expanded-inner">
                                <button class="kr-close-product" type="button" aria-label="Close Premium details">×</button>
                                <p class="section-kicker">PREMIUM / PURE GRADES</p>
                                <h3>Premium</h3>
                                <p class="kr-product-description">Our pure-grade makhana range is sorted by size, with
                                    options from 3 Pure to 6 Pure for different business needs.</p>
                                <fieldset class="fp-grade-picker" aria-label="Choose a Premium grade">
                                    <legend>SELECT A GRADE</legend>
                                    <div class="fp-grade-options">
                                        <button type="button" class="fp-grade-chip" data-product="Premium" data-grade=" 5 Plus" aria-pressed="false"> 5 Plus</button>
                                        <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="5 Plus handpicked" aria-pressed="false">5 Plus
                                            handpicked</button>
                                        <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="6 plus" aria-pressed="false">6 Plus</button>
                                        <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="6 Plus handpicked " aria-pressed="false">6 Plus handpicked
                                        </button>
                                    </div>
                                </fieldset>
                                <div class="kr-product-info-list" aria-label="Premium product information">
                                    <div><span>RANGE</span><strong>Pure Grades</strong></div>
                                    <div><span>PACKAGING</span><strong>Pack shown is a reference. Confirm your exact
                                            grade pack before ordering.</strong></div>
                                </div>
                                <a class="pill-button pill-black kr-enquire-product" href="#enquiry" data-product="Premium">Enquire Now for Premium <span aria-hidden="true">↗</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- SUPREME / HANDPICKED QUALITY: original flip + expand layout preserved -->
                    <article class="kr-product-card" data-product-name="Supreme">
                        <div class="kr-product-preview">
                            <span class="kr-product-index">02 / HANDPICKED QUALITY</span>
                            <button type="button" class="kr-product-preview-photo kr-product-flip" aria-label="Supreme packaging reference: hover to see back; tap on touch screens to switch sides" aria-pressed="false" title="Hover to view back of the reference pack">
                                <img class="front" src="{{ asset('assets/farm-project/images/pink-bg-removed.png') }}" alt="Packaging reference photo, front view; exact Supreme pack not yet verified" width="560" height="480" loading="lazy" decoding="async" />
                                <img class="back" src="{{ asset('assets/farm-project/images/pink-back-bg-removed.png') }}" alt="Packaging reference photo, back view; exact Supreme pack not yet verified" width="560" height="480" loading="lazy" decoding="async" />
                                <span class="kr-flip-tip" aria-hidden="true">HOVER TO SEE BACK ↗</span>
                            </button>
                            <button type="button" class="kr-product-trigger" aria-expanded="false" aria-controls="kr-product-details-2" aria-label="View Supreme Handpicked Quality details">
                                <span class="kr-product-heading-text">Supreme</span>
                                <span class="kr-product-preview-subtitle">Handpicked Quality · View available
                                    grades</span>
                                <span class="kr-view-more">VIEW DETAILS <span aria-hidden="true">↗</span></span>
                            </button>
                        </div>
                        <div class="kr-product-expanded" inert id="kr-product-details-2" aria-hidden="true">
                            <div class="kr-product-expanded-inner">
                                <button class="kr-close-product" type="button" aria-label="Close Supreme details">×</button>
                                <p class="section-kicker">SUPREME / HANDPICKED QUALITY</p>
                                <h3>Supreme</h3>
                                <p class="kr-product-description">Our handpicked-quality range receives extra grading
                                    and colour sorting for a cleaner, more uniform look.</p>
                                <fieldset class="fp-grade-picker" aria-label="Choose a Supreme grade">
                                    <legend>SELECT A GRADE</legend>
                                    <div class="fp-grade-options">
                                        <button type="button" class="fp-grade-chip" data-product="Supreme" data-grade="4 Plus" aria-pressed="false">4 Plus</button>
                                        <button type="button" class="fp-grade-chip" data-product="Supreme" data-grade="5 Plus handpicked" aria-pressed="false">5 Plus
                                            handpicked</button>
                                        <button type="button" class="fp-grade-chip" data-product="Supreme" data-grade="6 Plus handpicked" aria-pressed="false">6 Plus
                                            handpicked</button>
                                    </div>
                                </fieldset>
                                <div class="kr-product-info-list" aria-label="Supreme product information">
                                    <div><span>RANGE</span><strong>Handpicked Quality</strong></div>
                                    <div><span>PACKAGING</span><strong>Pack shown is a reference. Confirm your exact
                                            grade pack before ordering.</strong></div>
                                </div>
                                <a class="pill-button pill-black kr-enquire-product" href="#enquiry" data-product="Supreme">Enquire Now for Supreme <span aria-hidden="true">↗</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- STANDARD / MIXED SIZE (PLUS GRADES): original flip + expand layout preserved -->
                    <article class="kr-product-card" data-product-name="Standard">
                        <div class="kr-product-preview">
                            <span class="kr-product-index">03 / MIXED SIZE (PLUS GRADES)</span>
                            <button type="button" class="kr-product-preview-photo kr-product-flip" aria-label="Standard packaging reference: hover to see back; tap on touch screens to switch sides" aria-pressed="false" title="Hover to view back of the reference pack">
                                <img class="front" src="{{ asset('assets/farm-project/images/red-bg-removed.png') }}" alt="Packaging reference photo, front view; exact Standard pack not yet verified" width="560" height="480" loading="lazy" decoding="async" />
                                <img class="back" src="{{ asset('assets/farm-project/images/red-bk-bg-removed.png') }}" alt="Packaging reference photo, back view; exact Standard pack not yet verified" width="560" height="480" loading="lazy" decoding="async" />
                                <span class="kr-flip-tip" aria-hidden="true">HOVER TO SEE BACK ↗</span>
                            </button>
                            <button type="button" class="kr-product-trigger" aria-expanded="false" aria-controls="kr-product-details-3" aria-label="View Standard Mixed Size (Plus Grades) details">
                                <span class="kr-product-heading-text">Standard</span>
                                <span class="kr-product-preview-subtitle">Mixed Size (Plus Grades) · View available
                                    grades</span>
                                <span class="kr-view-more">VIEW DETAILS <span aria-hidden="true">↗</span></span>
                            </button>
                        </div>
                        <div class="kr-product-expanded" inert id="kr-product-details-3" aria-hidden="true">
                            <div class="kr-product-expanded-inner">
                                <button class="kr-close-product" type="button" aria-label="Close Standard details">×</button>
                                <p class="section-kicker">STANDARD / MIXED SIZE (PLUS GRADES)</p>
                                <h3>Standard</h3>
                                <p class="kr-product-description">Our mixed-size range offers selected Plus-grade
                                    blends built around 4, 5 and 6 size categories.</p>
                                <fieldset class="fp-grade-picker" aria-label="Choose a Standard grade">
                                    <legend>SELECT A GRADE</legend>
                                    <div class="fp-grade-options">
                                        <button type="button" class="fp-grade-chip" data-product="Standard" data-grade="3 Plus" aria-pressed="false">3 Plus</button>
                                        <button type="button" class="fp-grade-chip" data-product="Standard" data-grade="4 pure handpicked" aria-pressed="false">4 pure
                                            handpicked</button>
                                        <button type="button" class="fp-grade-chip" data-product="Standard" data-grade="4 pure" aria-pressed="false">4 pure</button>
                                    </div>
                                </fieldset>
                                <div class="kr-product-info-list" aria-label="Standard product information">
                                    <div><span>RANGE</span><strong>Mixed Size (Plus Grades)</strong></div>
                                    <div><span>PACKAGING</span><strong>Pack shown is a reference. Confirm your exact
                                            grade pack before ordering.</strong></div>
                                </div>
                                <a class="pill-button pill-black kr-enquire-product" href="#enquiry" data-product="Standard">Enquire Now for Standard <span aria-hidden="true">↗</span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="kr-products-bottom-note"><span>Choose your product and grade.</span> <span>Then click
                        <b>Enquire Now</b> to add them to your business enquiry.</span></div>
            </div>
        </section>


        <section class="green-banner">
            <div class="container green-banner-inner">
                <div aria-hidden="true" class="green-callout-symbol">✳</div>
                <div>
                    <p>THREE PRODUCTS. A SIMPLE WAY TO CONNECT.</p>
                    <h2>Let’s talk <em>products for your business.</em></h2>
                </div><a href="#enquiry" class="pill-button pill-yellow">Enquire now <span aria-hidden="true">↗</span></a>
            </div>
        </section>

        


<section class="how-section section-space" id="how-it-works">
    <div class="container">

        <div class="section-head centered">
            <p class="section-kicker">HOW TO ENQUIRE</p>
            <h2>
                Three simple steps.<br>
                <span>One enquiry for your selected products.</span>
            </h2>
        </div>

        <div class="how-layout">

            <div class="how-grid">

                <div class="how-card">
                    <span>01</span>
                    <div aria-hidden="true">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <h3>Share your business.</h3>
                    <p>
                        Give your shop or company name,
                        contact number and location.
                    </p>
                </div>

                <div class="how-card">
                    <span>02</span>
                    <div aria-hidden="true">
                        <i class="fa-solid fa-weight-hanging"></i>
                    </div>
                    <h3>Tell us the quantity.</h3>
                    <p>
                        Choose your product and share how much
                        you may need in kilograms.
                    </p>
                </div>

                <div class="how-card">
                    <span>03</span>
                    <div aria-hidden="true">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3>Discuss the details.</h3>
                    <p>
                        Ask about current availability,
                        quality, price and supply terms.
                    </p>
                </div>

            </div>

            <!-- Original Farm Project Mascot -->
            <div class="how-mascot">
                <img
                    src="{{ asset('assets/farm-project/images/how-to-enquire-mascot (2).png') }}"
                    alt="The Farm Project mascot"
                    width="307"
                    height="511"
                    loading="lazy"
                    decoding="async"
                >
            </div>

        </div>

        <!-- Enquiry CTA -->
        <div class="how-cta">
            <p>Ready to discuss your makhana requirement?</p>

            <a href="#enquiry" class="pill-button pill-yellow">
                Enquire now
                <span aria-hidden="true">↗</span>
            </a>
        </div>

    </div>
</section>


        <!-- OUR CLIENTS -->
        {{-- <section class="fp-clients-section section-space" id="our-clients">
    <div class="container">
        
  <div class="section-head kr-products-heading">
      <div>
        <p class="section-kicker">OUR CLIENTS</p>
        <h2 id="kr-products-heading">Our Trusted <em>Partners.</em></h2>
        <p>Building strong business relationships.</p>
      </div>
      <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
    </div>
        
        <div class="fp-clients-grid">
    @for ($i = 1; $i <= 6; $i++)
        <div class="fp-client-card">
            <img
                src="/assets/farm-project/images/clients/client-{{ $i }}.png"
        alt="Client {{ $i }} Logo"
        loading="lazy"
        >
        </div>
        @endfor
        </div>
        </div>

        </section> --}}

        <!-- OUR CLIENTS - SINGLE SET CAROUSEL -->

        <section class="fp-clients-section section-space" id="our-clients">
            <div class="container">

                <div class="section-head kr-products-heading">
                    <div>
                        <p class="section-kicker">OUR CLIENTS</p>
                        <h2>Our Trusted <em>Partners.</em></h2>
                        <p>Building strong business relationships.</p>
                    </div>
                    <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
                </div>

                <div class="fp-single-carousel">
                    <div class="fp-single-track">

                        {{-- ONLY ONE SET OF 6 LOGOS --}}
                        @for ($i = 1; $i <= 8; $i++) <div class="fp-single-card">
                            <img src="{{ asset('assets/farm-project/images/clients/client-' . $i . '.png') }}" alt="Client {{ $i }} Logo" loading="lazy">
                    </div>
                    @endfor

                </div>
            </div>

            </div>
        </section>


        <!-- OUR STRENGTHS -->
        {{-- @php
    // DEMO VALUES: Replace with actual company numbers.
    $strengths = [
        ['number' => '10+', 'label' => 'Years of Experience', 'icon' => '✳'],
        ['number' => '100+', 'label' => 'Team Members', 'icon' => '◎'],
        ['number' => '20+', 'label' => 'Business Partners', 'icon' => '↗'],
        ['number' => '500+', 'label' => 'Production Capacity (kg/day)', 'icon' => '◈'],
    ];
@endphp

<section class="fp-strengths-section section-space" id="our-strengths">
    <div class="container">
        
          <div class="section-head kr-products-heading">
      <div>
        <p class="section-kicker">WHY THE FARM PROJECT</p>
        <h2 id="kr-products-heading">Our <em>Strengths.</em></em></h2>
        <p>The numbers behind our business.</p>
      </div>
      <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
    </div>

        <div class="fp-strengths-grid">
            @foreach ($strengths as $item)
                <div class="fp-strength-card">
                    <span class="fp-strength-icon">
                        {{ $item['icon'] }}
        </span>

        <h3>{{ $item['number'] }}</h3>

        <p>{{ $item['label'] }}</p>
        </div>
        @endforeach
        </div>


        </div>
        </section> --}}

        {{-- THE FARM PROJECT | OUR STRENGTHS | NEW BENTO DESIGN --}}
        

        <section class="fp-strength-bento" id="our-strengths" aria-labelledby="fsb-title">
            <div class="fsb-container">
                {{-- <header class="fsb-head">
            <p class="fsb-eyebrow">Our Strengths</p>
            <h2 class="fsb-page-title" id="fsb-title">Built on <em>Trust.</em> Made for <em>Scale.</em></h2>
        </header> --}}
                <div class="section-head kr-products-heading">
                    <div>
                        <p class="section-kicker">Our Strengths</p>
                        <h2 id="fsb-title">Built on <em>Trust.</em></h2>
                        <p>Driven by experience, quality processing,
                            and strong business partnerships.</p>
                    </div>
                    <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
                </div>

                <div class="fsb-layout">
                    <div class="fsb-story">
                        <div>
                            <span class="fsb-topline"><span class="fsb-dot"></span> The Farm Project</span>
                            <h3>Strong roots.<br><span>Stronger reach.</span></h3>
                            <p>From careful processing to business supply, we focus on the details that matter to our
                                partners.</p>
                        </div>
                        <div class="fsb-story-footer">
                            {{-- <svg viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <path d="M16 27V13m0 5C8 18 5 12 5 5c9 0 11 6 11 13Zm0-3c1-7 5-10 12-10-1 9-4 12-12 13Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> --}}
                            <i class="fa-solid fa-seedling" aria-hidden="true"></i>
                            <span>Growing with quality &amp; care</span>
                        </div>
                    </div>

                    <div class="fsb-stats" aria-label="Farm Project strengths in numbers">
                        <article class="fsb-card">
                            {{-- <span class="fsb-icon" aria-hidden="true">
                                <svg viewBox="0 0 32 32">
                                    <rect x="4" y="7" width="24" height="21" rx="3" />
                                    <path d="M4 13h24M10 3v8M22 3v8" />
                                </svg>
                            </span> --}}
                            <span class="fsb-icon" aria-hidden="true">
    <i class="fa-regular fa-calendar-days"></i>
</span>
                            <div>
                                <h4>10+</h4>
                                <p>Years of Experience</p>
                            </div>
                        </article>

                        <article class="fsb-card fsb-card--gold">
                            {{-- <span class="fsb-icon" aria-hidden="true">
                                <svg viewBox="0 0 32 32">
                                    <path d="m16 3 13 7-13 7L3 10l13-7Zm-13 14 13 7 13-7M3 23l13 7 13-7" />
                                </svg>
                            </span> --}}
                            <span class="fsb-icon" aria-hidden="true">
    <i class="fa-solid fa-layer-group"></i>
</span>
                            <div>
                                <h4>100+</h4>
                                <p>Tons Processed Annually</p>
                            </div>
                        </article>

                        <article class="fsb-card fsb-card--lime">
                            {{-- <span class="fsb-icon" aria-hidden="true">
                                <svg viewBox="0 0 32 32">
                                    <circle cx="16" cy="10" r="5" />
                                    <path d="M7 29v-4a9 9 0 0 1 18 0v4H7ZM5 12a4 4 0 0 0 0 8m22-8a4 4 0 0 1 0 8" />
                                </svg>
                            </span> --}}
                            <span class="fsb-icon" aria-hidden="true">
    <i class="fa-solid fa-users"></i>
</span>
                            <div>
                                <h4>20+</h4>
                                <p>Business Partners</p>
                            </div>
                        </article>

                        <article class="fsb-card">
                            {{-- <span class="fsb-icon" aria-hidden="true">
                                <svg viewBox="0 0 32 32">
                                    <path d="M2 8h18v16H2m18-11h6l4 5v6H20M4 13h9M2 18h8" />
                                    <circle cx="9" cy="25" r="3" />
                                    <circle cx="24" cy="25" r="3" />
                                </svg>
                            </span> --}}
                            <span class="fsb-icon" aria-hidden="true">
    <i class="fa-solid fa-truck-fast"></i>
</span>
                            <div>
                                <h4>500+</h4>
                                <p>Distributors &amp; Supply Network</p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="fsb-footnote" aria-hidden="true">
                    <span>Product Focused</span><span class="fsb-spark">✳</span>
                    <span>Business Ready</span><span class="fsb-spark">✳</span>
                    <span>Built on Trust</span>
                </div>
            </div>
        </section>

        <section class="enquiry-section section-space" id="enquiry">
            <div class="container enquiry-layout">
                <aside class="enquiry-intro">
                    <div class="enquiry-sticky enquiry-sticky--approved">
                        <p class="section-kicker">LET’S TALK ABOUT YOUR PRODUCT</p>
                        <h2>Tell us what<br /><em>your business needs.</em></h2>
                        <p class="enquiry-lead">Interested in a MAKHANA product for your business? Select a product
                            range and grade, then share your requirements and discuss details with our team.</p>
                        {{-- <div class="enquiry-benefits" aria-label="Benefits of making an enquiry">
                            <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">✳</span>
                                <div><b>Product-specific enquiry</b><small>Select one or more products.</small></div>
                            </div>
                            <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">▣</span>
                                <div><b>Bulk Enquiries</b><small>For retailers, traders &amp; businesses.</small></div>
                            </div>
                            <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">◯</span>
                                <div><b>Team Follow-up</b><small>Discuss your requirement with our team.</small></div>
                            </div>
                            <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">⌖</span>
                                <div><b>Delivery Enquiries</b><small>Tell us your city and location.</small></div>
                            </div>
                        </div> --}}

<div class="enquiry-benefits"
     aria-label="Benefits of making an enquiry">

    <!-- 01: PRODUCT ENQUIRY -->
    <div class="enquiry-benefit">
        <span class="enquiry-benefit-icon" aria-hidden="true">
            <i class="fa-solid fa-box-open"></i>
        </span>

        <div>
            <b>Product-specific enquiry</b>
            <small>Select one or more products.</small>
        </div>
    </div>

    <!-- 02: BULK ENQUIRIES -->
    <div class="enquiry-benefit">
        <span class="enquiry-benefit-icon" aria-hidden="true">
            <i class="fa-solid fa-boxes-stacked"></i>
        </span>

        <div>
            <b>Bulk Enquiries</b>
            <small>For retailers, traders &amp; businesses.</small>
        </div>
    </div>

    <!-- 03: TEAM FOLLOW-UP -->
    <div class="enquiry-benefit">
        <span class="enquiry-benefit-icon" aria-hidden="true">
            <i class="fa-solid fa-headset"></i>
        </span>

        <div>
            <b>Team Follow-up</b>
            <small>Discuss your requirement with our team.</small>
        </div>
    </div>

    <!-- 04: DELIVERY ENQUIRIES -->
    <div class="enquiry-benefit">
        <span class="enquiry-benefit-icon" aria-hidden="true">
            <i class="fa-solid fa-truck-fast"></i>
        </span>

        <div>
            <b>Delivery Enquiries</b>
            <small>Tell us your city and location.</small>
        </div>
    </div>

</div>

                        <div class="enquiry-photo-wrap"><img src="{{ asset('assets/farm-project/images/footer.png') }}" alt="Plain makhana in a bowl" loading="lazy" decoding="async" width="1200" height="1000" /></div>
                        <div class="enquiry-contact"><span>Prefer to write to us directly?</span><a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in ↗</a></div>
                    </div>
                </aside>
                <div class="form-card">
                    <div class="form-card-head">
                        <div><span class="form-caption">PRODUCT ENQUIRY</span>
                            <h3>Tell us your requirement.</h3>
                            <p>Fields marked <b>*</b> are required.</p>
                        </div><span class="form-sticker" aria-hidden="true">THE FARM PROJECT ✳</span>
                    </div>
                    <form id="retailer-enquiry-form" method="POST" action="{{ route('farm.enquiry.store') }}" novalidate>
                        @csrf
                        <div class="form-section-caption">01. YOUR DETAILS</div>
                        <div class="form-grid">
                            <div class="field"><label for="fullName">Full name <b>*</b></label><input id="fullName" name="fullName" autocomplete="name" type="text" maxlength="80" placeholder="Your full name" required /></div>
                            <div class="field"><label for="phone">Mobile / WhatsApp number <b>*</b></label><input id="phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" maxlength="15" minlength="10" placeholder="10-digit mobile number" required /><small>We'll use this number to contact you.</small></div>
                            <div class="field"><label for="businessName">Shop / business name <b>*</b></label><input id="businessName" name="businessName" type="text" autocomplete="organization" maxlength="100" placeholder="E.g. Sharma Grocery Store" required /></div>
                            <div class="field"><label for="businessType">Business type <b>*</b></label><select id="businessType" name="businessType" required>
                                    <option value="">Choose your business type</option>
                                    <option>Retailer / Grocery Shop</option>
                                    <option>Wholesaler</option>
                                    <option>Distributor</option>
                                    <option>Trader</option>
                                    <option>Food Business / Manufacturer</option>
                                    <option>Other</option>
                                </select></div>
                            <div class="field"><label for="city">City <b>*</b></label><input id="city" name="city" autocomplete="address-level2" type="text" maxlength="80" placeholder="Your city" required /></div>
                            <div class="field"><label for="state">State <b>*</b></label><select id="state" name="state" autocomplete="address-level1" required>
                                    <option value="">Select state / UT</option>
                                    <option>Andaman and Nicobar Islands</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                    <option>Assam</option>
                                    <option>Bihar</option>
                                    <option>Chandigarh</option>
                                    <option>Chhattisgarh</option>
                                    <option>Dadra and Nagar Haveli and Daman and Diu</option>
                                    <option>Delhi</option>
                                    <option>Goa</option>
                                    <option>Gujarat</option>
                                    <option>Haryana</option>
                                    <option>Himachal Pradesh</option>
                                    <option>Jammu and Kashmir</option>
                                    <option>Jharkhand</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Ladakh</option>
                                    <option>Lakshadweep</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Maharashtra</option>
                                    <option>Manipur</option>
                                    <option>Meghalaya</option>
                                    <option>Mizoram</option>
                                    <option>Nagaland</option>
                                    <option>Odisha</option>
                                    <option>Puducherry</option>
                                    <option>Punjab</option>
                                    <option>Rajasthan</option>
                                    <option>Sikkim</option>
                                    <option>Tamil Nadu</option>
                                    <option>Telangana</option>
                                    <option>Tripura</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Uttarakhand</option>
                                    <option>West Bengal</option>
                                </select></div>
                            <div class="field"><label for="pincode">PIN code <b>*</b></label><input id="pincode" name="pincode" autocomplete="postal-code" type="text" inputmode="numeric" maxlength="6" pattern="[1-9][0-9]{5}" placeholder="6-digit PIN code" required />
                            </div>
                            <div class="field"><label for="gstin">GSTIN <span>(optional)</span></label><input id="gstin" name="gstin" type="text" maxlength="15" placeholder="Only if you have one" style="text-transform:uppercase" /></div>
                        </div>
                        <div class="field"><label for="shopAddress">Business address / delivery area
                                <span>(optional)</span></label><input id="shopAddress" name="shopAddress" autocomplete="street-address" type="text" maxlength="180" placeholder="E.g. Main Market, Model Town" /></div>
                        <div class="form-section-caption">02. SELECT PRODUCTS &amp; GRADES</div>
                        <fieldset class="kr-product-picker" id="kr-product-picker" aria-describedby="kr-product-help kr-product-error kr-selected-product-row">
                            <legend>Select Products <b>*</b></legend>
                            <p class="kr-picker-help" id="kr-product-help">Choose one or more ranges, then select a
                                grade for each. Or choose a grade from the product card above.</p>
                            <div class="kr-product-options">
                                <label class="kr-product-option"><input id="enquiry-product-1" type="checkbox" name="products" value="Premium" /><span>Premium</span></label>
                                <label class="kr-product-option"><input id="enquiry-product-2" type="checkbox" name="products" value="Supreme" /><span>Supreme</span></label>
                                <label class="kr-product-option"><input id="enquiry-product-3" type="checkbox" name="products" value="Standard" /><span>Standard</span></label>
                            </div>
                            <p class="kr-product-error" id="kr-product-error" role="alert" hidden>Please select at
                                least one product.</p>
                        </fieldset>
                        <div class="fp-enquiry-grades" id="fp-enquiry-grades">
                            <div class="field fp-enquiry-grade-field" data-grade-field="Premium" hidden>
                                <label for="grade-premium">Premium grade <b>*</b></label>
                                <select id="grade-premium" name="grade_premium" data-grade-select="Premium" disabled>
                                    <option value="">Choose your grade</option>
                                    <option value="5 Plus">5 Plus</option>
                                    <option value="5 Plus handpicked">5 Plus handpicked</option>
                                    <option value="6 Plus">6 Plus</option>
                                    <option value="6 Plus handpicked ">6 Plus handpicked </option>
                                </select>
                            </div>
                            <div class="field fp-enquiry-grade-field" data-grade-field="Supreme" hidden>
                                <label for="grade-supreme">Supreme grade <b>*</b></label>
                                <select id="grade-supreme" name="grade_supreme" data-grade-select="Supreme" disabled>
                                    <option value="">Choose your grade</option>
                                    <option value="4 Plus">4 Plus</option>
                                    <option value="4 Plus handpicked">4 Plus handpicked</option>
                                    <option value="5 Plus">5 Plus</option>
                                </select>
                            </div>
                            <div class="field fp-enquiry-grade-field" data-grade-field="Standard" hidden>
                                <label for="grade-standard">Standard grade <b>*</b></label>
                                <select id="grade-standard" name="grade_standard" data-grade-select="Standard" disabled>
                                    <option value="">Choose your grade</option>
                                    <option value="4+ PLUS">4+ PLUS</option>
                                    <option value="5+ PLUS">5+ PLUS</option>
                                    <option value="6+ PLUS">6+ PLUS</option>
                                </select>
                            </div>
                        </div>
                        <div class="kr-selected-product-row" id="kr-selected-product-row" aria-live="polite" aria-atomic="true">
                            <span class="kr-selected-label">Selected Products:</span><strong id="kr-selected-product-name">None selected</strong>
                            <span class="kr-selected-count" id="kr-selected-product-count">0 of 3 selected</span>
                        </div>
                        <div class="form-grid two-up">
                            <div class="field"><label for="monthlyVolume">Estimated total quantity (kg)
                                    <span>(optional)</span></label><select id="monthlyVolume" name="monthlyVolume">
                                    <option value="">Not sure yet</option>
                                    <option>Under 25 kg</option>
                                    <option>25–100 kg</option>
                                    <option>101–500 kg</option>
                                    <option>501–1,000 kg</option>
                                    <option>Above 1,000 kg</option>
                                    <option>Let’s discuss</option>
                                </select><small>Estimate for all selected products together. No minimum order is
                                    promised.</small></div>
                            <div class="field"><label for="buyingTimeline">When do you need it?
                                    <span>(optional)</span></label><select id="buyingTimeline" name="buyingTimeline">
                                    <option value="">Just checking options</option>
                                    <option>Within 1 week</option>
                                    <option>Within 2–4 weeks</option>
                                    <option>Next 1–3 months</option>
                                    <option>Regular supply enquiry</option>
                                </select></div>
                        </div>
                        <div class="field email-field"><label for="email">Business email
                                <span>(optional)</span></label><input id="email" name="email" autocomplete="email" type="email" maxlength="120" placeholder="you@yourstore.com" /></div>
                        <div class="field"><label for="message">Your questions <span>(optional)</span></label>
                            <textarea id="message" name="message" rows="4" maxlength="900" placeholder="Ask about packaging, price per kg, availability or delivery to your city..."></textarea>
                        </div>
                        <label class="consent-check"><input id="consent" name="consent" type="checkbox" required /><span>I agree that the FARM PROJECT team can contact me about my enquiry.
                                <b>*</b></span></label>
                        <div class="form-end"><button class="pill-button pill-black submit-button" type="submit">Prepare enquiry email <span aria-hidden="true">↗</span></button><span class="form-secure-note">Email draft preview only. Your enquiry is not sent
                                automatically.</span></div>
                        <div class="form-response" id="form-response" role="status" aria-live="polite" hidden>
                        </div>
                        <div class="form-ready-actions"><a id="open-email-draft" class="email-draft-link" href="#" hidden>Open email draft ↗</a><button id="copy-enquiry" type="button" class="copy-enquiry" hidden>Copy enquiry details</button></div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="retailer-footer">
        <div class="container footer-upper">
            <div><a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset('assets/farm-project/images/white-logo.png') }}" alt="THE FARM PROJECT" /></a>
                <p>THREE PRODUCTS. CLEAR BUSINESS ENQUIRIES.<br />A brand by Kaushal Agro Industries.</p>
            </div>
            <div class="footer-right">
                <div><strong>EXPLORE</strong><a href="#why-us">Why THE FARM PROJECT</a><a href="#plain-makhana">Our
                        Products</a><a href="#enquiry">Retailer enquiry</a></div>
                <div><strong>GET IN TOUCH</strong><a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in</a><a href="{{ url('/') }}">Back to Kaushal Agro ↗</a></div>
            </div>
        </div>
        <div class="container footer-lower"><span>© <span id="copyright-year">2026</span> THE FARM PROJECT · A brand
                by Kaushal Agro Industries</span><span>THREE PRODUCTS. ONE ENQUIRY. ✳</span></div>
    </footer>
</body>
</html>
