/* KRUNKO product details page: photo switching + quantity + open enquiry cart. */
(() => {
  'use strict';
  document.addEventListener('DOMContentLoaded', () => {
    const mainImage = document.querySelector('#krpd-main-image');
    const photoButtons = document.querySelectorAll('[data-krpd-photo]');
    const quantityInput = document.querySelector('#krpd-qty');
    const addButton = document.querySelector('.krpd-add.add-cart');
    const viewCartButton = document.querySelector('#krpd-view-cart');
    if (!quantityInput || !addButton) return;

    for (const button of photoButtons) {
      button.addEventListener('click', () => {
        if (!mainImage) return;
        mainImage.src = button.dataset.krpdPhoto;
        mainImage.alt = button.dataset.krpdAlt || 'KRUNKO product photo';
        for (const candidate of photoButtons) {
          const selected = candidate === button;
          candidate.classList.toggle('is-selected', selected);
          candidate.setAttribute('aria-pressed', String(selected));
        }
      });
    }

    const getQuantity = () => {
      const number = Number(quantityInput.value);
      return Number.isFinite(number) ? Math.min(99, Math.max(1, Math.floor(number))) : 1;
    };

    function syncQuantity() {
      const value = getQuantity();
      quantityInput.value = String(value);
      // Read by enquiry-cart.js when the user presses Add to Enquiry Cart.
      addButton.dataset.quantity = String(value);
      const minus = document.querySelector('[data-krpd-qty="minus"]');
      const plus = document.querySelector('[data-krpd-qty="plus"]');
      if (minus) minus.disabled = value <= 1;
      if (plus) plus.disabled = value >= 99;
    }

    document.querySelectorAll('[data-krpd-qty]').forEach(button => {
      button.addEventListener('click', () => {
        const direction = button.dataset.krpdQty === 'plus' ? 1 : -1;
        quantityInput.value = String(getQuantity() + direction);
        syncQuantity();
      });
    });
    quantityInput.addEventListener('input', () => {
      // Keep a partially typed number editable; the selected value is clamped.
      addButton.dataset.quantity = String(getQuantity());
    });
    quantityInput.addEventListener('change', syncQuantity);
    quantityInput.addEventListener('blur', syncQuantity);
    viewCartButton?.addEventListener('click', () => {
      document.querySelector('.cart-button')?.click();
    });
    syncQuantity();
  });
})();
