{{-- SECTION 01: utility bar + primary navigation; contains no page-specific content. --}}
<a class="ka-skip-link" href="#main-content">Skip to content</a>

<div class="ka-topbar">
    <div class="ka-container ka-topbar__inner">
        <p class="ka-topbar__left">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s7-7.1 7-12A7 7 0 1 0 5 10c0 4.9 7 12 7 12Z"/><circle cx="12" cy="10" r="2.4"/></svg>
            <span>Purnia, Bihar</span>
            <span class="ka-topbar__divider" aria-hidden="true"></span>
            <span>Premium Makhana Processing</span>
        </p>
        <p class="ka-topbar__right">Bihar's Makhana <span aria-hidden="true">✦</span> Crafted with Care</p>
    </div>
</div>

<header class="ka-header" data-ka-header>
    <div class="ka-container ka-header__inner">
        <a class="ka-brand" href="#top" aria-label="Kaushal Agro Industries home">
            {{-- Approved-style lotus icon. Text stays separate for sharp rendering. --}}
            <img class="ka-brand__logo"
                 src="{{ asset('assets/kaushal-landing/images/logo.png') }}"
                 alt="" width="48" height="48">
            <span class="ka-brand__words">
                <strong>KAUSHAL AGRO</strong>
                <small>INDUSTRIES PRIVATE LIMITED</small>
            </span>
        </a>

        <nav class="ka-nav" id="ka-primary-nav" aria-label="Main navigation" data-ka-nav>
            <a class="ka-nav__link ka-nav__link--current" href="#top">Home</a>
            <a class="ka-nav__link" href="#company">Our Company</a>
            <a class="ka-nav__link" href="#products">Products</a>
            <a class="ka-nav__link" href="#location">Contact</a>
            <a class="ka-nav__cta" href="#products">Explore Makhana <span aria-hidden="true">↗</span></a>
        </nav>

        {{-- Font Awesome hamburger / X icons. Font Awesome CSS loads once in landing.blade.php --}}
        <button class="ka-menu-toggle" type="button"
                aria-label="Open menu" aria-expanded="false"
                aria-controls="ka-primary-nav" data-ka-menu-toggle>
            <i class="fa-solid fa-bars ka-menu-icon ka-menu-icon--bars" aria-hidden="true"></i>
            <i class="fa-solid fa-xmark ka-menu-icon ka-menu-icon--close" aria-hidden="true"></i>
        </button>
    </div>
</header>