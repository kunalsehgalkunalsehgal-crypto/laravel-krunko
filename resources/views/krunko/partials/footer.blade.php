@php
    $krunkoCustomerUrl = route('krunko.customer');
@endphp

<footer class="footer" id="contact">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="{{ $krunkoCustomerUrl }}#home">
                <img src="{{ asset('krunko/assets/logo.png') }}" alt="KRUNKO">
            </a>
            <p>Crunch big. Snack smart.<br>A brand by Kaushal Agro Industries.</p>
            <div class="social-links">
               <a href="https://www.instagram.com/thefarmprojectindia/" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/people/The-Farm-Project/61574778994986/" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCYBr3BjkRZp0Ae31PaVCYkg" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/krunko/" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>

        {{-- <div>
            <h3>Shop</h3>
            <a href="{{ route('krunko.shop') }}#shop">All Products</a>
            <a href="{{ route('krunko.shop') }}#packs">Makhana</a>
            <button type="button" data-info="combos">Combos</button>
            <button type="button" data-info="arrivals">New Arrivals</button>
            <button type="button" data-info="offers">Offers</button>
        </div>

        <div>
            <h3>About</h3>
            <a href="{{ route('krunko.our-story') }}">Our Story</a>
            <button type="button" data-info="farmers">Farmers</button>
            <a href="{{ $krunkoCustomerUrl }}#quality" data-info="quality">Quality</a>
            <a href="{{ $krunkoCustomerUrl }}#feed">Blogs & Stories</a>
            <a href="{{ route('krunko.contact') }}">Contact Us</a>
        </div> --}}
        <div>
    <h3>Shop</h3>

    <a href="{{ route('krunko.shop') }}">
        All Products
    </a>

    <a href="{{ route('krunko.customer') }}#shop">
        Explore Flavours
    </a>
</div>

{{-- EXPLORE COLUMN --}}
<div>
    <h3>Explore</h3>

    <a href="{{ route('krunko.about-us') }}">
        About Us
    </a>

    <a href="{{ route('krunko.our-story') }}">
        Our Story
    </a>

    <a href="{{ route('krunko.contact') }}">
        Contact Us
    </a>
</div>

        <div>
            <h3>Let’s Talk Crunch</h3>
            <a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in</a>
<p>
                        Kaushal Agro Industries Pvt Ltd<br>
                        Plug n Play Shed B1, Gate No. 3,<br>
                        Industrial Growth Centre Maranga,<br>
                        Purnia, Bihar - 854303
                    </p>        </div>
    </div>

    <div class="container footer-bottom">
        <p>© <span id="year"></span> KRUNKO · Kaushal Agro Industries</p>
        <div>
            <button type="button" data-info="privacy">Privacy Policy</button>
            <button type="button" data-info="terms">Terms & Conditions</button>
            <button type="button" data-info="shipping">Shipping Policy</button>
        </div>
    </div>
</footer>

<div class="toast" role="status" aria-live="polite"></div>

<dialog id="info-dialog">
    <button type="button" class="dialog-close" aria-label="Close dialog">×</button>
    <h2 id="dialog-title"></h2>
    <div id="dialog-content"></div>
</dialog>
<style>
    i{
        font-size: 15px;
    }
</style>