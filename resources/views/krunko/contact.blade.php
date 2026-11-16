<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Get in touch with KRUNKO for makhana product enquiries, bulk requests and brand questions.">
    <title>Contact Us | KRUNKO — Crunch Big. Snack Smart.</title>

    {{-- Same KRUNKO base styles, without changing your existing website. --}}
    <link rel="stylesheet" href="{{ asset('krunko/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/css/enquiry-cart.css') }}">
    <link rel="stylesheet" href="{{ asset('krunko/css/contact.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    {{-- The enquiry cart is shared with KRUNKO Home and Shop. --}}
    <script defer src="{{ asset('krunko/js/enquiry-cart.js') }}"></script>
    <script defer src="{{ asset('krunko/js/contact.js') }}"></script>
</head>
<body>
    @include('krunko.partials.header')

    <main id="main-content" class="kc-contact">
        {{-- HERO --}}
        <section class="kc-hero" aria-labelledby="kc-title">
            <div class="container kc-hero__inner">
                <div class="kc-hero__copy">
                    <p class="kc-eyebrow"><span class="kc-eyebrow__dot"></span> HELLO FROM KRUNKO</p>
                    <h1 id="kc-title">Let's talk <em>crunch!</em></h1>
                    <p class="kc-hero__desc">Got a question, a product enquiry, or a big snack idea? We'd love to hear from you.</p>
                    <div class="kc-hero__actions">
                        <a class="kc-btn kc-btn--dark" href="#contact-form">Send a Message <span aria-hidden="true">↗</span></a>
                        <a class="kc-hero__textlink" href="{{ url('/krunko/shop') }}">Explore Flavours <span aria-hidden="true">↗</span></a>
                    </div>
                    <div class="kc-hero__note"><span aria-hidden="true">✳</span> SMALL BITES. BIG HAPPY ENERGY.</div>
                </div>
                <div class="kc-hero__art">
                    <span class="kc-hero__sun" aria-hidden="true"></span>
                    <img src="{{ asset('krunko/assets/demo 4.webp') }}" alt="KRUNKO's cheerful makhana mascot" width="600" height="600" fetchpriority="high">
                    <span class="kc-hero__sticker">SAY<br>HELLO!</span>
                    <span class="kc-spark kc-spark--one" aria-hidden="true">✳</span>
                    <span class="kc-spark kc-spark--two" aria-hidden="true">✦</span>
                </div>
            </div>
        </section>

        {{-- CONTACT OPTIONS --}}
        <section class="kc-ways" aria-label="Ways to reach KRUNKO">
            <div class="container kc-ways__grid">
                <article class="kc-way">
                    <div class="kc-way__icon" aria-hidden="true">✉</div>
                    <div>
                        <p class="kc-way__kicker">DROP US A MAIL</p>
                        <h2>Email Our Team</h2>
                        <a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in <span aria-hidden="true">↗</span></a>
                    </div>
                </article>
                <article class="kc-way">
                    <div class="kc-way__icon" aria-hidden="true">✳</div>
                    <div>
                        <p class="kc-way__kicker">FOR PRODUCT QUESTIONS</p>
                        <h2>Send an Enquiry</h2>
                        <a href="#contact-form">Tell us what you need <span aria-hidden="true">↗</span></a>
                    </div>
                </article>
                <article class="kc-way">
                    <div class="kc-way__icon" aria-hidden="true">⌖</div>
                    <div>
                        <p class="kc-way__kicker">OUR ROOTS</p>
                        <h2>Based in Bihar</h2>
                        <p>Patna, Bihar, India</p>
                    </div>
                </article>
            </div>
        </section>

        {{-- CONTACT FORM --}}
        <section class="kc-main" id="contact-form" aria-labelledby="kc-form-title">
            <div class="container kc-main__grid">
                <div class="kc-main__info">
                    <span class="kc-section-label">01 / LET'S CONNECT</span>
                    <h2 id="kc-form-title">Something on<br>your <em>mind?</em></h2>
                    <p>Fill in the form and send it our way. We're all ears, whether it's about our makhana, bulk packs, or just a question.</p>
                    <div class="kc-main__photo">
                        <img src="{{ asset('krunko/assets/jar-cheese.webp') }}" alt="KRUNKO Cheese makhana jar" loading="lazy" decoding="async">
                        <div class="kc-main__photo-note">GOOD QUESTIONS.<br>GREAT CRUNCH.</div>
                    </div>
                    <div class="kc-main__smallnote">✦ &nbsp; This is a message form. No purchase or payment is made here.</div>
                </div>

                <div class="kc-form-card">
                    <div class="kc-form-card__top">
                        <div>
                            <span class="kc-section-label">SEND US A NOTE</span>
                            <h3>How can we help?</h3>
                        </div>
                        <span class="kc-form-card__stamp" aria-hidden="true">✳</span>
                    </div>

                    <p id="kc-form-status" class="kc-form-status" role="status" aria-live="polite" hidden></p>

                    <form id="kc-contact-form" action="{{ route('krunko.contact.send') }}" method="post">
                        @csrf
                        <div class="kc-fields">
                            <label for="kc-name">Your name <span>*</span>
                                <input id="kc-name" name="name" type="text" maxlength="100" autocomplete="name" placeholder="Your full name" required>
                            </label>
                            <label for="kc-phone">Phone number
                                <input id="kc-phone" name="phone" type="tel" maxlength="20" autocomplete="tel" placeholder="Your mobile number">
                            </label>
                            <label class="kc-fields__full" for="kc-email">Email address <span>*</span>
                                <input id="kc-email" name="email" type="email" maxlength="150" autocomplete="email" placeholder="you@example.com" required>
                            </label>
                            <label class="kc-fields__full" for="kc-topic">What is this about? <span>*</span>
                                <select id="kc-topic" name="topic" required>
                                    <option value="" disabled selected>Select a topic</option>
                                    <option value="Product Enquiry">Product Enquiry</option>
                                    <option value="Bulk / Wholesale">Bulk / Wholesale</option>
                                    <option value="Brand Collaboration">Brand Collaboration</option>
                                    <option value="General Question">General Question</option>
                                </select>
                            </label>
                            <label class="kc-fields__full" for="kc-message">Your message <span>*</span>
                                <textarea id="kc-message" name="message" rows="5" maxlength="2000" placeholder="Tell us a little about your question..." required></textarea>
                            </label>
                        </div>

                        {{-- Honeypot: legitimate visitors never fill this in. --}}
                        <div class="kc-hidden-field" aria-hidden="true">
                            <label for="kc-website">Website</label>
                            <input id="kc-website" name="website" tabindex="-1" type="text" autocomplete="off">
                        </div>

                        <label class="kc-consent">
                            <input type="checkbox" name="consent" value="1" required>
                            <span>I agree to be contacted by KRUNKO about my message.</span>
                        </label>
                        <button class="kc-btn kc-btn--submit" id="kc-submit" type="submit">Send My Message <span aria-hidden="true">↗</span></button>
                        <p class="kc-form-card__footnote">* Required fields. Your message goes straight to our team by email.</p>
                    </form>
                </div>
            </div>
        </section>

        {{-- FRIENDLY END CTA --}}
        <section class="kc-outro" aria-labelledby="kc-outro-title">
            <div class="container kc-outro__inner">
                <div>
                    <p class="kc-section-label">PREFER TO EXPLORE?</p>
                    <h2 id="kc-outro-title">Find your <em>happy crunch.</em></h2>
                    <p>Explore the flavours you love and send us an enquiry from your cart.</p>
                    <a href="{{ url('/krunko/shop') }}" class="kc-btn kc-btn--yellow">Explore Our Shop <span aria-hidden="true">↗</span></a>
                </div>
                <img src="{{ asset('krunko/assets/demo 2.webp') }}" alt="Friendly KRUNKO mascot with makhana" loading="lazy" decoding="async">
            </div>
        </section>
    </main>

    @include('krunko.partials.footer')
</body>
</html>
