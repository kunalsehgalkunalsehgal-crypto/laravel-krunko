<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#ffdf00" />
  <meta name="description" content="Explore THE FARM PROJECT products, view their front and back packaging, and send an enquiry for the product you need." />
  <title>THE FARM PROJECT Products for Businesses | Retailer Enquiry</title>
  <!-- Existing Farm Project design CSS -->
  {{-- <link rel="stylesheet" href="{{ asset('assets/farm-project/css/retailer.css') }}" />
  <!-- New expandable product styles; no manual CSS merging needed. -->
  <link rel="stylesheet" href="{{ asset('assets/farm-project/css/retailer-products.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/farm-project/css/process-flow.css') }}" /> --}}
  <link rel="stylesheet" href="/assets/farm-project/css/retailer.css">

<link rel="stylesheet" href="/assets/farm-project/css/retailer-products.css">

<link rel="stylesheet" href="/assets/farm-project/css/process-flow.css">
  {{-- <script defer src="{{ asset('assets/farm-project/js/retailer.js') }}"></script> --}}
  <script defer src="/assets/farm-project/js/retailer.js"></script>
</head>
<body class="retailer-page">
  <a class="skip-link" href="#main-content">Skip to content</a>
  <div class="announce-bar">✳ THREE PRODUCTS. PLENTY OF POSSIBILITIES. ✳ LET’S TALK BUSINESS ENQUIRIES.</div>

  <header class="site-header">
    <div class="container header-row">
      <!-- <a class="brand-logo" href="{{ url('/') }}" aria-label="The Farm Project, back to Kaushal Agro"><img src="{{ asset('assets/farm-project/images/black-logo.png') }}" alt="KRUNKO" /></a> -->
       <a class="brand-logo" href="{{ url('/') }}" aria-label="The Farm Project, back to Kaushal Agro">
  <img
    src="{{ asset('assets/farm-project/images/black-logo.png') }}"
    alt="The Farm Project"
    width="1254"
    height="1254"
  />
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
          <div class="mini-eyebrow"><span class="star-mark">✳</span> FOR RETAILERS, TRADERS &amp; BULK BUYERS</div>
          <h1 id="retailer-hero-heading"><span>MAKHANA</span><br /><em>PRODUCTS.</em><br />BIG POTENTIAL.</h1>
          <p>Explore THE FARM PROJECT products for your business. Hover to see the front and back of each pack, then open a card for details and enquire.</p>
          <div class="hero-actions">
            <a class="pill-button pill-black" href="#plain-makhana">Explore our products <span aria-hidden="true">↗</span></a>
            <a class="quiet-link" href="#our-process">See our process <span aria-hidden="true">↘</span></a>
          </div>
          <div class="hero-short-proof"><span><b>03</b> products</span><span class="dot-sep">✳</span><span>Product-specific enquiries</span></div>
        </div>
        <div class="hero-showcase plain-showcase" data-photo-container="hero">
          <div class="hero-image-shell">
            <div class="kr-hero-photo-fallback" aria-hidden="true">THE FARM PROJECT<span>✳</span></div>
            <img src="{{ asset('assets/farm-project/images/newimage.png') }}" class="real-photo real-photo--hero" data-real-photo="hero" alt="The Farm Project makhana product" width="900" height="900" fetchpriority="high" decoding="async" />
          </div>
        </div>
      </div>
      <div class="marquee-strip"><div class="marquee-track" aria-label="The Farm Project products for your business">MAKHANA PRODUCTS <span>✳</span> BULK ENQUIRIES <span>✳</span> QUALITY CONVERSATIONS <span>✳</span> MAKHANA PRODUCTS <span>✳</span> BULK ENQUIRIES <span>✳</span> QUALITY CONVERSATIONS <span>✳</span></div></div>
    </section>

    <section class="benefit-section section-space" id="why-us">
      <div class="container">
        <div class="section-head flex-head">
          <div><p class="section-kicker">WHY BUYERS ASK ABOUT THE FARM PROJECT</p><h2>Makhana products.<br /><span>A clear business conversation.</span></h2></div>
          <p class="section-side-note">From your first enquiry to supply questions, we keep the focus on your selected product and the details your business needs.</p>
        </div>
        <div class="benefit-grid">
          <article class="benefit-item"><span class="benefit-number">01 /</span><span aria-hidden="true" class="benefit-symbol">✷</span><h3>Three products.<br />Clear focus.</h3><p>Explore each product and enquire for the one that suits your business.</p></article>
          <article class="benefit-item"><span class="benefit-number">02 /</span><span aria-hidden="true" class="benefit-symbol">◉</span><h3>Know the details.</h3><p>Ask about the product, quantities, packaging and pricing before planning an order.</p></article>
          <article class="benefit-item"><span class="benefit-number">03 /</span><span aria-hidden="true" class="benefit-symbol">↗</span><h3>Enquire with ease.</h3><p>Share your city, business type and quantity requirement for your chosen product.</p></article>
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
        <h2 id="kr-products-heading">From Seed to <em>Packed Makhana</em></h2>
        <p>A carefully managed processing flow, from raw makhana seeds to graded and packed makhana.</p>
      </div>
      <span aria-hidden="true" class="hand-drawn-arrow">↙</span>
    </div>

    <ol class="fp-flow__grid" aria-label="Makhana processing steps in order">
      <li class="fp-flow__card">
        <span class="fp-flow__number" aria-label="Step 1">01</span>
        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/01-washing.webp') }}" alt="Illustrative visual of makhana seed washing" width="680" height="528" loading="lazy" decoding="async">
        <h3 class="fp-flow__step-title">Makhana Seed Washing</h3>
        <p class="fp-flow__step-desc">Raw seeds are washed to remove dirt and unwanted material.</p>
      </li>
      <li class="fp-flow__card">
        <span class="fp-flow__number" aria-label="Step 2">02</span>
        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/02-drying.webp') }}" alt="Illustrative visual of drying" width="680" height="528" loading="lazy" decoding="async">
        <h3 class="fp-flow__step-title">Drying</h3>
        <p class="fp-flow__step-desc">Washed seeds are dried and prepared for further processing.</p>
      </li>
      <li class="fp-flow__card">
        <span class="fp-flow__number" aria-label="Step 3">03</span>
        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/03-seed-grading.webp') }}" alt="Illustrative visual of seed grading" width="680" height="528" loading="lazy" decoding="async">
        <h3 class="fp-flow__step-title">Seed Grading</h3>
        <p class="fp-flow__step-desc">Seeds are grouped by size for more consistent processing.</p>
      </li>
      <li class="fp-flow__card">
        <span class="fp-flow__number" aria-label="Step 4">04</span>
        <img class="fp-flow__photo" src="{{ asset('assets/farm-project/images/process/04-roasting.webp') }}" alt="Illustrative visual of roasting" width="680" height="528" loading="lazy" decoding="async">
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
    <p class="fp-flow__note">Process visuals are illustrative. The processing steps follow the Farm Project production brief.</p>
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
        <p>Explore Premium, Supreme and Standard makhana. Hover to see a pack's back view, then open a card to choose your grade.</p>
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
            <p class="kr-product-description">Our pure-grade makhana range is sorted by size, with options from 3 Pure to 6 Pure for different business needs.</p>
            <fieldset class="fp-grade-picker" aria-label="Choose a Premium grade">
              <legend>SELECT A GRADE</legend>
              <div class="fp-grade-options">
                <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="3 PURE" aria-pressed="false">3 PURE</button>
                <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="4 PURE" aria-pressed="false">4 PURE</button>
                <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="5 PURE" aria-pressed="false">5 PURE</button>
                <button type="button" class="fp-grade-chip" data-product="Premium" data-grade="6 PURE" aria-pressed="false">6 PURE</button>
              </div>
            </fieldset>
            <div class="kr-product-info-list" aria-label="Premium product information">
              <div><span>RANGE</span><strong>Pure Grades</strong></div>
              <div><span>PACKAGING</span><strong>Pack shown is a reference. Confirm your exact grade pack before ordering.</strong></div>
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
            <span class="kr-product-preview-subtitle">Handpicked Quality · View available grades</span>
            <span class="kr-view-more">VIEW DETAILS <span aria-hidden="true">↗</span></span>
          </button>
        </div>
        <div class="kr-product-expanded" inert id="kr-product-details-2" aria-hidden="true">
          <div class="kr-product-expanded-inner">
            <button class="kr-close-product" type="button" aria-label="Close Supreme details">×</button>
            <p class="section-kicker">SUPREME / HANDPICKED QUALITY</p>
            <h3>Supreme</h3>
            <p class="kr-product-description">Our handpicked-quality range receives extra grading and colour sorting for a cleaner, more uniform look.</p>
            <fieldset class="fp-grade-picker" aria-label="Choose a Supreme grade">
              <legend>SELECT A GRADE</legend>
              <div class="fp-grade-options">
                <button type="button" class="fp-grade-chip" data-product="Supreme" data-grade="4 PURE HANDPICKED" aria-pressed="false">4 PURE HANDPICKED</button>
                <button type="button" class="fp-grade-chip" data-product="Supreme" data-grade="5 PURE HANDPICKED" aria-pressed="false">5 PURE HANDPICKED</button>
                <button type="button" class="fp-grade-chip" data-product="Supreme" data-grade="6 PURE HANDPICKED" aria-pressed="false">6 PURE HANDPICKED</button>
              </div>
            </fieldset>
            <div class="kr-product-info-list" aria-label="Supreme product information">
              <div><span>RANGE</span><strong>Handpicked Quality</strong></div>
              <div><span>PACKAGING</span><strong>Pack shown is a reference. Confirm your exact grade pack before ordering.</strong></div>
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
            <span class="kr-product-preview-subtitle">Mixed Size (Plus Grades) · View available grades</span>
            <span class="kr-view-more">VIEW DETAILS <span aria-hidden="true">↗</span></span>
          </button>
        </div>
        <div class="kr-product-expanded" inert id="kr-product-details-3" aria-hidden="true">
          <div class="kr-product-expanded-inner">
            <button class="kr-close-product" type="button" aria-label="Close Standard details">×</button>
            <p class="section-kicker">STANDARD / MIXED SIZE (PLUS GRADES)</p>
            <h3>Standard</h3>
            <p class="kr-product-description">Our mixed-size range offers selected Plus-grade blends built around 4, 5 and 6 size categories.</p>
            <fieldset class="fp-grade-picker" aria-label="Choose a Standard grade">
              <legend>SELECT A GRADE</legend>
              <div class="fp-grade-options">
                <button type="button" class="fp-grade-chip" data-product="Standard" data-grade="4+ PLUS" aria-pressed="false">4+ PLUS</button>
                <button type="button" class="fp-grade-chip" data-product="Standard" data-grade="5+ PLUS" aria-pressed="false">5+ PLUS</button>
                <button type="button" class="fp-grade-chip" data-product="Standard" data-grade="6+ PLUS" aria-pressed="false">6+ PLUS</button>
              </div>
            </fieldset>
            <div class="kr-product-info-list" aria-label="Standard product information">
              <div><span>RANGE</span><strong>Mixed Size (Plus Grades)</strong></div>
              <div><span>PACKAGING</span><strong>Pack shown is a reference. Confirm your exact grade pack before ordering.</strong></div>
            </div>
            <a class="pill-button pill-black kr-enquire-product" href="#enquiry" data-product="Standard">Enquire Now for Standard <span aria-hidden="true">↗</span></a>
          </div>
        </div>
      </article>
    </div>
    <div class="kr-products-bottom-note"><span>Choose your product and grade.</span> <span>Then click <b>Enquire Now</b> to add them to your business enquiry.</span></div>
  </div>
</section>


    <section class="green-banner">
      <div class="container green-banner-inner"><div aria-hidden="true" class="green-callout-symbol">✳</div><div><p>THREE PRODUCTS. A SIMPLE WAY TO CONNECT.</p><h2>Let’s talk <em>products for your business.</em></h2></div><a href="#enquiry" class="pill-button pill-yellow">Enquire now <span aria-hidden="true">↗</span></a></div>
    </section>

    <section class="how-section section-space" id="how-it-works">
      <div class="container">
        <div class="section-head centered"><p class="section-kicker">HOW TO ENQUIRE</p><h2>Three simple steps.<br /><span>One enquiry for your selected products.</span></h2></div>
        <div class="how-grid">
          <div class="how-card"><span>01</span><div aria-hidden="true">✎</div><h3>Share your business.</h3><p>Give your shop or company name, contact number and location.</p></div>
          <div class="how-card"><span>02</span><div aria-hidden="true">✳</div><h3>Tell us the quantity.</h3><p>Choose your product and share how much you may need in kilograms.</p></div>
          <div class="how-card"><span>03</span><div aria-hidden="true">↗</div><h3>Discuss the details.</h3><p>Ask about current availability, quality, price and supply terms.</p></div>
        </div>
      </div>
    </section>

    <section class="enquiry-section section-space" id="enquiry">
      <div class="container enquiry-layout">
        <aside class="enquiry-intro">
          <div class="enquiry-sticky enquiry-sticky--approved">
            <p class="section-kicker">LET’S TALK ABOUT YOUR PRODUCT</p>
            <h2>Tell us what<br /><em>your business needs.</em></h2>
            <p class="enquiry-lead">Interested in a MAKHANA product for your business? Select a product range and grade, then share your requirements and discuss details with our team.</p>
            <div class="enquiry-benefits" aria-label="Benefits of making an enquiry">
              <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">✳</span><div><b>Product-specific enquiry</b><small>Select one or more products.</small></div></div>
              <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">▣</span><div><b>Bulk Enquiries</b><small>For retailers, traders &amp; businesses.</small></div></div>
              <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">◯</span><div><b>Team Follow-up</b><small>Discuss your requirement with our team.</small></div></div>
              <div class="enquiry-benefit"><span class="enquiry-benefit-icon" aria-hidden="true">⌖</span><div><b>Delivery Enquiries</b><small>Tell us your city and location.</small></div></div>
            </div>
            <div class="enquiry-photo-wrap"><img src="{{ asset('assets/farm-project/images/best.png') }}" alt="Plain makhana in a bowl" loading="lazy" decoding="async" width="1200" height="1000" /></div>
            <div class="enquiry-contact"><span>Prefer to write to us directly?</span><a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in ↗</a></div>
          </div>
        </aside>
        <div class="form-card">
          <div class="form-card-head"><div><span class="form-caption">PRODUCT ENQUIRY</span><h3>Tell us your requirement.</h3><p>Fields marked <b>*</b> are required.</p></div><span class="form-sticker" aria-hidden="true">THE FARM PROJECT ✳</span></div>
          <form id="retailer-enquiry-form" novalidate>
            <div class="form-section-caption">01. YOUR DETAILS</div>
            <div class="form-grid">
              <div class="field"><label for="fullName">Full name <b>*</b></label><input id="fullName" name="fullName" autocomplete="name" type="text" maxlength="80" placeholder="Your full name" required /></div>
              <div class="field"><label for="phone">Mobile / WhatsApp number <b>*</b></label><input id="phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" maxlength="15" minlength="10" placeholder="10-digit mobile number" required /><small>We'll use this number to contact you.</small></div>
              <div class="field"><label for="businessName">Shop / business name <b>*</b></label><input id="businessName" name="businessName" type="text" autocomplete="organization" maxlength="100" placeholder="E.g. Sharma Grocery Store" required /></div>
              <div class="field"><label for="businessType">Business type <b>*</b></label><select id="businessType" name="businessType" required><option value="">Choose your business type</option><option>Retailer / Grocery Shop</option><option>Wholesaler</option><option>Distributor</option><option>Trader</option><option>Food Business / Manufacturer</option><option>Other</option></select></div>
              <div class="field"><label for="city">City <b>*</b></label><input id="city" name="city" autocomplete="address-level2" type="text" maxlength="80" placeholder="Your city" required /></div>
              <div class="field"><label for="state">State <b>*</b></label><select id="state" name="state" autocomplete="address-level1" required>
                <option value="">Select state / UT</option>
                <option>Andaman and Nicobar Islands</option><option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chandigarh</option><option>Chhattisgarh</option><option>Dadra and Nagar Haveli and Daman and Diu</option><option>Delhi</option><option>Goa</option><option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option><option>Jammu and Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option>Kerala</option><option>Ladakh</option><option>Lakshadweep</option><option>Madhya Pradesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Puducherry</option><option>Punjab</option><option>Rajasthan</option><option>Sikkim</option><option>Tamil Nadu</option><option>Telangana</option><option>Tripura</option><option>Uttar Pradesh</option><option>Uttarakhand</option><option>West Bengal</option>
              </select></div>
              <div class="field"><label for="pincode">PIN code <b>*</b></label><input id="pincode" name="pincode" autocomplete="postal-code" type="text" inputmode="numeric" maxlength="6" pattern="[1-9][0-9]{5}" placeholder="6-digit PIN code" required /></div>
              <div class="field"><label for="gstin">GSTIN <span>(optional)</span></label><input id="gstin" name="gstin" type="text" maxlength="15" placeholder="Only if you have one" style="text-transform:uppercase" /></div>
            </div>
            <div class="field"><label for="shopAddress">Business address / delivery area <span>(optional)</span></label><input id="shopAddress" name="shopAddress" autocomplete="street-address" type="text" maxlength="180" placeholder="E.g. Main Market, Model Town" /></div>
            <div class="form-section-caption">02. SELECT PRODUCTS &amp; GRADES</div>
            <fieldset class="kr-product-picker" id="kr-product-picker" aria-describedby="kr-product-help kr-product-error kr-selected-product-row">
              <legend>Select Products <b>*</b></legend>
              <p class="kr-picker-help" id="kr-product-help">Choose one or more ranges, then select a grade for each. Or choose a grade from the product card above.</p>
              <div class="kr-product-options">
                <label class="kr-product-option"><input id="enquiry-product-1" type="checkbox" name="products" value="Premium" /><span>Premium</span></label>
                <label class="kr-product-option"><input id="enquiry-product-2" type="checkbox" name="products" value="Supreme" /><span>Supreme</span></label>
                <label class="kr-product-option"><input id="enquiry-product-3" type="checkbox" name="products" value="Standard" /><span>Standard</span></label>
              </div>
              <p class="kr-product-error" id="kr-product-error" role="alert" hidden>Please select at least one product.</p>
            </fieldset>
            <div class="fp-enquiry-grades" id="fp-enquiry-grades">
              <div class="field fp-enquiry-grade-field" data-grade-field="Premium" hidden>
                <label for="grade-premium">Premium grade <b>*</b></label>
                <select id="grade-premium" name="grade_premium" data-grade-select="Premium" disabled>
                  <option value="">Choose your grade</option>
                  <option value="3 PURE">3 PURE</option>
                  <option value="4 PURE">4 PURE</option>
                  <option value="5 PURE">5 PURE</option>
                  <option value="6 PURE">6 PURE</option>
                </select>
              </div>
              <div class="field fp-enquiry-grade-field" data-grade-field="Supreme" hidden>
                <label for="grade-supreme">Supreme grade <b>*</b></label>
                <select id="grade-supreme" name="grade_supreme" data-grade-select="Supreme" disabled>
                  <option value="">Choose your grade</option>
                  <option value="4 PURE HANDPICKED">4 PURE HANDPICKED</option>
                  <option value="5 PURE HANDPICKED">5 PURE HANDPICKED</option>
                  <option value="6 PURE HANDPICKED">6 PURE HANDPICKED</option>
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
              <div class="field"><label for="monthlyVolume">Estimated total quantity (kg) <span>(optional)</span></label><select id="monthlyVolume" name="monthlyVolume"><option value="">Not sure yet</option><option>Under 25 kg</option><option>25–100 kg</option><option>101–500 kg</option><option>501–1,000 kg</option><option>Above 1,000 kg</option><option>Let’s discuss</option></select><small>Estimate for all selected products together. No minimum order is promised.</small></div>
              <div class="field"><label for="buyingTimeline">When do you need it? <span>(optional)</span></label><select id="buyingTimeline" name="buyingTimeline"><option value="">Just checking options</option><option>Within 1 week</option><option>Within 2–4 weeks</option><option>Next 1–3 months</option><option>Regular supply enquiry</option></select></div>
            </div>
            <div class="field email-field"><label for="email">Business email <span>(optional)</span></label><input id="email" name="email" autocomplete="email" type="email" maxlength="120" placeholder="you@yourstore.com" /></div>
            <div class="field"><label for="message">Your questions <span>(optional)</span></label><textarea id="message" name="message" rows="4" maxlength="900" placeholder="Ask about packaging, price per kg, availability or delivery to your city..."></textarea></div>
            <label class="consent-check"><input id="consent" name="consent" type="checkbox" required /><span>I agree that the FARM PROJECT team can contact me about my enquiry. <b>*</b></span></label>
            <div class="form-end"><button class="pill-button pill-black submit-button" type="submit">Prepare enquiry email <span aria-hidden="true">↗</span></button><span class="form-secure-note">Email draft preview only. Your enquiry is not sent automatically.</span></div>
            <div class="form-response" id="form-response" role="status" aria-live="polite" hidden></div>
            <div class="form-ready-actions"><a id="open-email-draft" class="email-draft-link" href="#" hidden>Open email draft ↗</a><button id="copy-enquiry" type="button" class="copy-enquiry" hidden>Copy enquiry details</button></div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="retailer-footer">
    <div class="container footer-upper">
      <div><a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset('assets/farm-project/images/white-logo.png') }}" alt="THE FARM PROJECT" /></a><p>THREE PRODUCTS. CLEAR BUSINESS ENQUIRIES.<br />A brand by Kaushal Agro Industries.</p></div>
      <div class="footer-right">
        <div><strong>EXPLORE</strong><a href="#why-us">Why THE FARM PROJECT</a><a href="#plain-makhana">Our Products</a><a href="#enquiry">Retailer enquiry</a></div>
        <div><strong>GET IN TOUCH</strong><a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in</a><a href="{{ url('/') }}">Back to Kaushal Agro ↗</a></div>
      </div>
    </div>
    <div class="container footer-lower"><span>© <span id="copyright-year">2026</span> THE FARM PROJECT · A brand by Kaushal Agro Industries</span><span>THREE PRODUCTS. ONE ENQUIRY. ✳</span></div>
  </footer>
</body>
</html>