'use strict';
/* THE FARM PROJECT RETAILER: original menu/form/photo logic plus 3-product same-card expansion. */
(function () {
  const menu = document.querySelector('.mobile-nav-toggle');
  const nav = document.getElementById('retail-nav');
  if (menu && nav) {
    const closeMenu = () => {
      menu.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-label', 'Open menu');
      nav.classList.remove('is-open');
    };
    menu.addEventListener('click', () => {
      const isOpen = menu.getAttribute('aria-expanded') !== 'true';
      menu.setAttribute('aria-expanded', String(isOpen));
      menu.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
      nav.classList.toggle('is-open', isOpen);
    });
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', event => { if (event.key === 'Escape') closeMenu(); });
  }

  const year = document.getElementById('copyright-year');
  if (year) year.textContent = new Date().getFullYear();

  const form = document.getElementById('retailer-enquiry-form');
  if (!form) return;
  const response = document.getElementById('form-response');
  const copyButton = document.getElementById('copy-enquiry');
  const emailLink = document.getElementById('open-email-draft');
  let enquiryText = '';
  const productCheckboxes = [...form.querySelectorAll('input[name="products"]')];
  const selectedText = document.getElementById('kr-selected-product-name');
  const selectedRow = document.getElementById('kr-selected-product-row');
  const selectedCount = document.getElementById('kr-selected-product-count');
  const productError = document.getElementById('kr-product-error');
  const gradeSelects = [...form.querySelectorAll('[data-grade-select]')];

  function getGradeSelect(product) {
    return gradeSelects.find(select => select.dataset.gradeSelect === product);
  }

  function updateGradeChips() {
    document.querySelectorAll('.fp-grade-chip').forEach(chip => {
      const select = getGradeSelect(chip.dataset.product);
      const chosen = Boolean(select && select.value === chip.dataset.grade && !select.disabled);
      chip.classList.toggle('is-selected', chosen);
      chip.setAttribute('aria-pressed', String(chosen));
    });
  }

  function updateGradeFields() {
    gradeSelects.forEach(select => {
      const checkbox = productCheckboxes.find(item => item.value === select.dataset.gradeSelect);
      const selected = Boolean(checkbox && checkbox.checked);
      const wrapper = select.closest('.fp-enquiry-grade-field');
      if (!selected) select.value = '';
      select.disabled = !selected;
      select.required = selected;
      wrapper.hidden = !selected;
    });
    updateGradeChips();
  }

  document.querySelectorAll('.fp-grade-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      const checkbox = productCheckboxes.find(item => item.value === chip.dataset.product);
      const select = getGradeSelect(chip.dataset.product);
      if (!checkbox || !select) return;
      checkbox.checked = true;
      updateGradeFields();
      select.value = chip.dataset.grade;
      invalidateEnquiry();
      updateProducts();
      select.removeAttribute('aria-invalid');
    });
  });

  function selectedProducts() {
    return productCheckboxes.filter(checkbox => checkbox.checked).map(checkbox => checkbox.value);
  }

  function invalidateEnquiry() {
    enquiryText = '';
    response.hidden = true;
    copyButton.hidden = true;
    emailLink.hidden = true;
    emailLink.removeAttribute('href');
  }

  function updateProducts() {
    const products = selectedProducts();
    updateGradeFields();
    selectedText.textContent = products.length
      ? products.map(product => {
          const select = getGradeSelect(product);
          return select && select.value ? `${product} (${select.value})` : `${product} (Choose grade)`;
        }).join(', ')
      : 'None selected';
    selectedCount.textContent = `${products.length} of ${productCheckboxes.length} selected`;
    selectedRow.classList.toggle('is-selected', products.length > 0);
    productCheckboxes.forEach(checkbox => checkbox.removeAttribute('aria-invalid'));
    // A visible selected product immediately clears the "choose a product" error.
    if (products.length) productError.hidden = true;
  }

  form.addEventListener('input', invalidateEnquiry);
  form.addEventListener('change', () => {
    invalidateEnquiry();
    updateProducts();
    // Show the error only after a submit, not while choosing checkboxes.
    if (!selectedProducts().length) productError.hidden = true;
  });
  form.addEventListener('reset', () => {
    invalidateEnquiry();
    productError.hidden = true;
    setTimeout(() => {
      updateProducts();
      updateGradeChips();
    }, 0);
  });
  updateProducts();

  document.querySelectorAll('.kr-enquire-product').forEach(link => {
    link.addEventListener('click', event => {
      const checkbox = productCheckboxes.find(item => item.value === link.dataset.product);
      if (!checkbox) return;
      event.preventDefault();
      checkbox.checked = true;
      invalidateEnquiry();
      updateProducts();
      document.getElementById('enquiry').scrollIntoView({ behavior: 'smooth', block: 'start' });
      const gradeSelect = getGradeSelect(link.dataset.product);
      if (gradeSelect && !gradeSelect.value) gradeSelect.focus({ preventScroll: true });
      else checkbox.focus({ preventScroll: true });
    });
  });

  function showResponse(message, isError = false) {
    response.hidden = false;
    response.textContent = message;
    response.classList.toggle('error', isError);
  }

  function validateForm() {
    form.querySelectorAll('[aria-invalid="true"]').forEach(field => field.removeAttribute('aria-invalid'));
    if (!selectedProducts().length) {
      productCheckboxes.forEach(checkbox => checkbox.setAttribute('aria-invalid', 'true'));
      productError.hidden = false;
      productCheckboxes[0].focus();
      showResponse('Please select at least one product.', true);
      return false;
    }
    productError.hidden = true;
    for (const product of selectedProducts()) {
      const grade = getGradeSelect(product);
      if (grade && !grade.value) {
        grade.setAttribute('aria-invalid', 'true');
        grade.focus();
        showResponse(`Please choose a grade for ${product}.`, true);
        return false;
      }
    }
    const required = [...form.querySelectorAll('[required]')];
    for (const field of required) {
      if (field.type === 'checkbox' ? !field.checked : !field.value.trim()) {
        field.setAttribute('aria-invalid', 'true');
        field.focus();
        showResponse('Please fill in the required fields and agree to be contacted.', true);
        return false;
      }
    }
    const phone = form.elements.phone.value.replace(/[\s+()-]/g, '');
    if (!/^(?:91)?[6-9]\d{9}$/.test(phone)) {
      form.elements.phone.setAttribute('aria-invalid', 'true');
      form.elements.phone.focus();
      showResponse('Please enter a valid 10-digit Indian mobile number.', true);
      return false;
    }
    if (!/^[1-9]\d{5}$/.test(form.elements.pincode.value.trim())) {
      form.elements.pincode.setAttribute('aria-invalid', 'true');
      form.elements.pincode.focus();
      showResponse('Please enter a valid 6-digit Indian PIN code.', true);
      return false;
    }
    const email = form.elements.email;
    if (email.value.trim() && !email.checkValidity()) {
      email.setAttribute('aria-invalid', 'true');
      email.focus();
      showResponse('Please check the email address.', true);
      return false;
    }
    const gstin = form.elements.gstin;
    if (gstin.value.trim() && !/^\d{2}[A-Z]{5}\d{4}[A-Z][A-Z\d]Z[A-Z\d]$/i.test(gstin.value.trim())) {
      gstin.setAttribute('aria-invalid', 'true');
      gstin.focus();
      showResponse('Please check your 15-character GSTIN, or leave it empty.', true);
      return false;
    }
    return true;
  }

  function makeEnquiry() {
    const data = new FormData(form);
    const lines = [
      'Hello The Farm Project team,',
      '',
      'I would like to enquire about buying the following products for my business.',
      '',
      'Selected Products:',
      ...selectedProducts().map((product, index) => {
        const grade = getGradeSelect(product);
        return `${index + 1}. ${product} / Grade: ${grade ? grade.value : 'Not selected'}`;
      }),
      '',
      'RETAILER DETAILS',
      `Full name: ${data.get('fullName') || ''}`,
      `Mobile / WhatsApp: ${data.get('phone') || ''}`,
      `Shop / business: ${data.get('businessName') || ''}`,
      `Business type: ${data.get('businessType') || ''}`,
      `City: ${data.get('city') || ''}`,
      `State: ${data.get('state') || ''}`,
      `PIN code: ${data.get('pincode') || ''}`,
      `Shop address / area: ${data.get('shopAddress') || 'Not provided'}`,
      `GSTIN: ${data.get('gstin') || 'Not provided'}`,
      `Business email: ${data.get('email') || 'Not provided'}`,
      '',
      'PRODUCT ENQUIRY',
      `Estimated total quantity (kg): ${data.get('monthlyVolume') || 'Just exploring'}`,
      `Buying timeline: ${data.get('buyingTimeline') || 'Not specified'}`,
      `Questions / message: ${data.get('message') || 'None'}`,
      '',
      'Consent to contact: Yes',
      'Source: The Farm Project retailer page'
    ];
    return lines.join('\n');
  }

  form.addEventListener('submit', event => {
    event.preventDefault();
    if (!validateForm()) return;
    enquiryText = makeEnquiry();
    const recipient = 'info@thefarmproject.co.in'; // Replace only after verifying the real business mailbox.
    const subject = 'The Farm Project Product Enquiry';
    const href = 'mailto:' + recipient + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(enquiryText);
    showResponse('Your enquiry details are ready! Review them, then click Open email draft to send from your email app. Nothing has been sent yet.');
    copyButton.hidden = false;
    emailLink.href = href;
    emailLink.hidden = false;
  });

  copyButton.addEventListener('click', async () => {
    if (!enquiryText) return;
    let copied = false;
    try {
      if (navigator.clipboard && navigator.clipboard.writeText) {
        await navigator.clipboard.writeText(enquiryText);
        copied = true;
      }
    } catch (_) { /* Try the classic copy method below. */ }

    // Useful for browsers where Clipboard API needs HTTPS or permission.
    if (!copied) {
      const textBox = document.createElement('textarea');
      textBox.value = enquiryText;
      textBox.style.position = 'fixed';
      textBox.style.opacity = '0';
      document.body.appendChild(textBox);
      textBox.select();
      try { copied = document.execCommand('copy'); } catch (_) { copied = false; }
      textBox.remove();
    }
    showResponse(
      copied
        ? 'Enquiry details copied. Paste them into an email and send them to info@thefarmproject.co.in.'
        : 'Your browser blocked copying. Please use the email draft instead.',
      !copied
    );
  });
})();

// Show real photos only if they have loaded successfully; otherwise keep the illustration/fallback.
(function initRetailerPhotos() {
  document.querySelectorAll('img[data-real-photo]').forEach(img => {
    const container = img.closest('[data-photo-container]');
    if (!container) return;
    const showRealPhoto = () => {
      if (!img.naturalWidth) return;
      container.classList.add('has-real-photo');
      img.removeAttribute('aria-hidden');
      const fallback = container.querySelector('.plain-bowl-art, .process-illustration');
      if (fallback) fallback.setAttribute('aria-hidden', 'true');
    };
    const keepIllustration = () => {
      container.classList.remove('has-real-photo');
      img.setAttribute('aria-hidden', 'true');
    };
    img.addEventListener('load', showRealPhoto);
    img.addEventListener('error', keepIllustration);
    if (img.complete) {
      if (img.naturalWidth > 0) showRealPhoto();
      else keepIllustration();
    }
  });
})();

/* Product cards: front/back image switches on hover BEFORE expansion.
   On opening a card, only information + Enquire Now appear inside that card. */
(function initRetailerProductCards() {
  const grid = document.getElementById('kr-product-grid');
  const form = document.getElementById('retailer-enquiry-form');
  if (!grid || !form) return;
  const cards = Array.from(grid.querySelectorAll('.kr-product-card'));
  let activeCard = null;

  function setOpen(nextCard) {
    cards.forEach(card => {
      const active = card === nextCard;
      const details = card.querySelector('.kr-product-expanded');
      const trigger = card.querySelector('.kr-product-trigger');
      card.classList.toggle('is-active', active);
      trigger.setAttribute('aria-expanded', String(active));
      details.setAttribute('aria-hidden', String(!active));
      details.inert = !active;
    });
    grid.classList.toggle('active-mode', Boolean(nextCard));
    activeCard = nextCard;
  }

  cards.forEach(card => {
    const trigger = card.querySelector('.kr-product-trigger');
    const photoButton = card.querySelector('.kr-product-flip');
    const preview = card.querySelector('.kr-product-preview');
    const close = card.querySelector('.kr-close-product');
    const flipHint = photoButton.querySelector('.kr-flip-tip');
    const desktopHoverSupported = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    if (!desktopHoverSupported && flipHint) flipHint.textContent = 'TAP TO SEE BACK ↗';

    // "View Details" (or the preview area outside the photo) opens the SAME card.
    trigger.addEventListener('click', () => setOpen(activeCard === card ? null : card));
    preview.addEventListener('click', event => {
      if (event.target.closest('button')) return;
      setOpen(activeCard === card ? null : card);
    });

    // Desktop: pure CSS hover performs the image switch without opening the card.
    // Touch: a tap on the IMAGE flips the pack; tap "View Details" to expand.
    photoButton.addEventListener('click', () => {
      if (desktopHoverSupported) return;
      const flipped = photoButton.classList.toggle('is-flipped');
      photoButton.setAttribute('aria-pressed', String(flipped));
      if (flipHint) flipHint.textContent = flipped ? 'TAP TO SEE FRONT ↗' : 'TAP TO SEE BACK ↗';
    });
    close.addEventListener('click', event => {
      event.stopPropagation();
      setOpen(null);
      trigger.focus({ preventScroll: true });
    });
  });

  document.addEventListener('keydown', event => {
    if (event.key !== 'Escape' || !activeCard) return;
    const trigger = activeCard.querySelector('.kr-product-trigger');
    setOpen(null);
    trigger.focus({ preventScroll: true });
  });

})();



/* SINGLE SET - OUR CLIENTS CAROUSEL */

document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".fp-single-carousel");
    const track = document.querySelector(".fp-single-track");

    if (!carousel || !track || track.children.length < 2) return;

    let moving = false;
    let timer = null;

    function moveNext() {
        if (moving) return;

        const first = track.firstElementChild;
        if (!first) return;

        moving = true;

        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        const distance = first.getBoundingClientRect().width + gap;

        track.style.transition = "transform 700ms ease";
        track.style.transform = `translateX(-${distance}px)`;
    }

    track.addEventListener("transitionend", function (event) {
        if (
            event.target !== track ||
            event.propertyName !== "transform"
        ) return;

        track.style.transition = "none";

        // Move first logo to the end.
        // No new logo is created.
        track.appendChild(track.firstElementChild);

        track.style.transform = "translateX(0)";
        moving = false;
    });

    function start() {
        if (timer || window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }

        timer = setInterval(moveNext, 2500);
    }

    function stop() {
        clearInterval(timer);
        timer = null;
    }

    carousel.addEventListener("mouseenter", stop);
    carousel.addEventListener("mouseleave", start);

    start();
});

/* ==========================================
   OUR STRENGTHS - SCROLL NUMBER COUNTER
========================================== */

(function () {

    function initStrengthCounter() {

        const section = document.querySelector(
            "#our-strengths.fp-strength-bento"
        );

        if (!section) return;

        const counters = section.querySelectorAll(
            ".fsb-card h4"
        );

        if (!counters.length) return;

        let started = false;

        function animateCounter(element) {

            const originalText = element.textContent.trim();

            // Example: "500+" becomes 500 and "+"
            const match = originalText.match(/^([\d,]+)(.*)$/);

            if (!match) return;

            const target = Number(
                match[1].replace(/,/g, "")
            );

            const suffix = match[2];

            if (!Number.isFinite(target)) return;

            const duration = 2000;
            let startTime = null;

            element.textContent = "0" + suffix;
            element.setAttribute("aria-label", originalText);

            function update(currentTime) {

                if (startTime === null) {
                    startTime = currentTime;
                }

                const elapsed = currentTime - startTime;

                const progress = Math.min(
                    elapsed / duration,
                    1
                );

                // Smooth counting animation
                const easedProgress =
                    1 - Math.pow(1 - progress, 3);

                const currentValue = Math.floor(
                    target * easedProgress
                );

                element.textContent =
                    currentValue.toLocaleString("en-IN") + suffix;

                if (progress < 1) {

                    requestAnimationFrame(update);

                } else {

                    element.textContent = originalText;

                }
            }

            requestAnimationFrame(update);
        }

        function startCounters() {

            if (started) return;

            started = true;

            // Respect reduced motion setting
            if (window.matchMedia(
                "(prefers-reduced-motion: reduce)"
            ).matches) {
                return;
            }

            counters.forEach(function (counter) {

                animateCounter(counter);

            });
        }

        // Start counting when section appears
        if ("IntersectionObserver" in window) {

            const observer = new IntersectionObserver(
                function (entries) {

                    if (entries[0].isIntersecting) {

                        startCounters();

                        observer.disconnect();
                    }

                },
                {
                    threshold: 0.2
                }
            );

            observer.observe(section);

        } else {

            startCounters();

        }
    }

    if (document.readyState === "loading") {

        document.addEventListener(
            "DOMContentLoaded",
            initStrengthCounter
        );

    } else {

        initStrengthCounter();

    }

})();
