@php
    $krunkoCustomerUrl = route('krunko.customer');
@endphp

<div class="announcement">A little crunch. A lot of happiness. <span>Free shipping on orders above ₹499</span></div>

<header class="header">
    <div class="container nav-row">
        <a href="{{ $krunkoCustomerUrl }}#home" class="logo" aria-label="KRUNKO home">
            <img src="{{ asset('krunko/assets/logo.png') }}" alt="KRUNKO">
        </a>

        <nav class="navigation" id="navigation" aria-label="Main navigation">
            <a href="{{ $krunkoCustomerUrl }}#home">Home</a>
            <a href="{{ $krunkoCustomerUrl }}#shop">Shop</a>
            <a href="{{ $krunkoCustomerUrl }}#packs">Makhana</a>
            <button type="button" data-info="combos">Combos</button>
            <a href="{{ route('krunko.our-story') }}">About Us</a>
            <a href="{{ $krunkoCustomerUrl }}#contact">Contact</a>
        </nav>

        <div class="header-actions">
            <form class="search" role="search" action="{{ $krunkoCustomerUrl }}" method="get">
                <label class="sr-only" for="search">Search products</label>
                <input id="search" name="search" type="search" placeholder="Find your crunch">
                <button type="submit" aria-label="Search">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="10.5" cy="10.5" r="6.5" />
                        <path d="m16 16 4 4" />
                    </svg>
                </button>
            </form>

            <button type="button" class="icon-button" data-info="account" aria-label="Account">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="8" r="4" />
                    <path d="M4 21v-2a8 8 0 0 1 16 0v2" />
                </svg>
            </button>

            <button type="button" class="icon-button cart-button" aria-label="Open cart">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 7h14l2 14H3L5 7Z" />
                    <path d="M8 8V6a4 4 0 0 1 8 0v2" />
                </svg>
                <span id="cart-count">0</span>
            </button>

            <button type="button" class="icon-button menu-button" aria-label="Open menu" aria-expanded="false"
                aria-controls="navigation">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 6h18M3 12h18M3 18h18" />
                </svg>
            </button>
        </div>
    </div>
</header>
