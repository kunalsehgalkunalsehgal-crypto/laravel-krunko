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
                <button type="button" data-info="social">Instagram</button>
                <button type="button" data-info="social">Facebook</button>
                <button type="button" data-info="social">YouTube</button>
                <button type="button" data-info="social">LinkedIn</button>
            </div>
        </div>

        <div>
            <h3>Shop</h3>
            <a href="{{ $krunkoCustomerUrl }}#shop">All Products</a>
            <a href="{{ $krunkoCustomerUrl }}#packs">Makhana</a>
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
            <button type="button" data-info="contact">Contact Us</button>
        </div>

        <div>
            <h3>Let’s Talk Crunch</h3>
            <a href="mailto:info@thefarmproject.co.in">info@thefarmproject.co.in</a>
            <p>C-41, P.C. Colony, Kankarbagh,<br>Patna, Bihar 800020, India</p>
        </div>
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
