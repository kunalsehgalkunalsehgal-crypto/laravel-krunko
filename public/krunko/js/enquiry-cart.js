/* KRUNKO enquiry-only cart. No checkout or payments. */
(() => {
  'use strict';

  document.addEventListener('DOMContentLoaded', () => {
    const cartButton = document.querySelector('.cart-button');
    const countBadge = document.querySelector('#cart-count');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    if (!cartButton || !countBadge) return;

    let cart = { items: [], count: 0 };
    let busy = false;
    let toastTimer;

    const dialog = document.createElement('dialog');
    dialog.className = 'kr-enquiry-dialog';
    dialog.setAttribute('aria-label', 'KRUNKO Enquiry Cart');
    dialog.innerHTML = `
      <button type="button" class="kr-enquiry-close" aria-label="Close cart">&times;</button>
      <p class="kr-enquiry-eyebrow">KRUNKO · ENQUIRY ONLY</p>
      <h2>Your <span>Enquiry Cart.</span></h2>
      <p class="kr-enquiry-subtitle">Choose your flavours and send us an enquiry. No online payment.</p>
      <p id="kr-enquiry-message" role="status" aria-live="polite" hidden></p>
      <div id="kr-enquiry-items"></div>
      <p id="kr-enquiry-empty" class="kr-enquiry-empty" hidden>Your cart is empty. Add a flavour to get started.</p>
      <div id="kr-enquiry-total" class="kr-enquiry-total" hidden></div>
      <form id="kr-enquiry-form">
        <h3>Your Contact Details</h3>
        <div class="kr-enquiry-form-grid">
          <label>Full Name *
            <input name="name" type="text" autocomplete="name" maxlength="100" required>
          </label>
          <label>Mobile Number *
            <input name="phone" type="tel" autocomplete="tel" maxlength="20" required>
          </label>
          <label>Email (optional)
            <input name="email" type="email" autocomplete="email" maxlength="150">
          </label>
          <label>City *
            <input name="city" type="text" autocomplete="address-level2" maxlength="100" required>
          </label>
        </div>
        <label class="kr-enquiry-full">Address (optional)
          <input name="address" type="text" autocomplete="street-address" maxlength="250">
        </label>
        <label class="kr-enquiry-full">Message (optional)
          <textarea name="message" rows="3" maxlength="1000" placeholder="Tell us what you need..."></textarea>
        </label>
        <label class="kr-enquiry-consent">
          <input name="consent" type="checkbox" value="1" required>
          <span>I agree to be contacted about my product enquiry.</span>
        </label>
        <label class="kr-enquiry-bot" aria-hidden="true">Website
          <input name="website" type="text" autocomplete="off" tabindex="-1">
        </label>
        <button type="submit" class="kr-enquiry-submit">Send Enquiry</button>
        <p class="kr-enquiry-footnote">This is an enquiry, not a confirmed order.</p>
      </form>
      <button type="button" class="kr-enquiry-continue">Continue Shopping</button>
    `;
    document.body.appendChild(dialog);

    const itemsBox = dialog.querySelector('#kr-enquiry-items');
    const emptyBox = dialog.querySelector('#kr-enquiry-empty');
    const totalBox = dialog.querySelector('#kr-enquiry-total');
    const messageBox = dialog.querySelector('#kr-enquiry-message');
    const form = dialog.querySelector('#kr-enquiry-form');

    function message(text, isError = false) {
      messageBox.hidden = !text;
      messageBox.textContent = text || '';
      messageBox.classList.toggle('is-error', isError);
    }

    function toast(text) {
      const el = document.querySelector('.toast');
      if (!el) return;
      el.textContent = text;
      el.classList.add('show');
      clearTimeout(toastTimer);
      toastTimer = setTimeout(() => el.classList.remove('show'), 2600);
    }

    async function api(method, path, data) {
      const headers = { Accept: 'application/json' };
      if (method !== 'GET') {
        if (!csrfToken) throw new Error('Security token missing. Refresh the page.');
        headers['Content-Type'] = 'application/json';
        headers['X-CSRF-TOKEN'] = csrfToken;
      }
      let response;
      try {
        response = await fetch(path, {
          method,
          credentials: 'same-origin',
          headers,
          ...(data ? { body: JSON.stringify(data) } : {})
        });
      } catch {
        throw new Error('Cannot connect to the server. Please try again.');
      }
      const result = await response.json().catch(() => ({}));
      if (!response.ok) {
        const fieldErrors = result.errors ? Object.values(result.errors).flat() : [];
        throw new Error(fieldErrors[0] || result.message || `Request failed (${response.status}).`);
      }
      return result;
    }

    function lock(value) {
      busy = value;
      dialog.querySelectorAll('.kr-qty-button, .kr-remove-button, .kr-enquiry-submit')
        .forEach(button => { button.disabled = value; });
    }

    function updateUI(data) {
      cart = data;
      countBadge.textContent = String(cart.count || 0);
      cartButton.setAttribute('aria-label', `Open enquiry cart, ${cart.count || 0} items`);
      itemsBox.replaceChildren();

      const products = Array.isArray(cart.items) ? cart.items : [];
      const empty = products.length === 0;
      emptyBox.hidden = !empty;
      totalBox.hidden = empty;
      form.hidden = empty;

      if (!empty) {
        totalBox.textContent = `Total Quantity: ${cart.count} item(s)`;
      }

      products.forEach(item => {
        const row = document.createElement('div');
        row.className = 'kr-enquiry-row';
        row.innerHTML = `
          <div class="kr-enquiry-product-name"></div>
          <div class="kr-enquiry-row-bottom">
            <div class="kr-enquiry-qty">
              <button type="button" class="kr-qty-button kr-minus" aria-label="Decrease quantity">−</button>
              <strong></strong>
              <button type="button" class="kr-qty-button kr-plus" aria-label="Increase quantity">+</button>
            </div>
            <button type="button" class="kr-remove-button">Remove</button>
          </div>`;
        row.querySelector('.kr-enquiry-product-name').textContent = item.name;
        row.querySelector('strong').textContent = String(item.quantity);
        row.querySelector('.kr-minus').disabled = item.quantity <= 1;
        row.querySelector('.kr-plus').disabled = item.quantity >= 99;
        row.querySelector('.kr-minus').addEventListener('click', () => {
          changeCart('PATCH', '/krunko/enquiry-cart/update', {
            product: item.product, quantity: item.quantity - 1
          });
        });
        row.querySelector('.kr-plus').addEventListener('click', () => {
          changeCart('PATCH', '/krunko/enquiry-cart/update', {
            product: item.product, quantity: item.quantity + 1
          });
        });
        row.querySelector('.kr-remove-button').addEventListener('click', () => {
          changeCart('DELETE', '/krunko/enquiry-cart/remove', { product: item.product });
        });
        itemsBox.appendChild(row);
      });
    }

    async function changeCart(method, path, payload, successText = '') {
      if (busy) return;
      lock(true);
      message('');
      try {
        const result = await api(method, path, payload);
        updateUI(result);
        if (successText) toast(successText);
      } catch (error) {
        message(error.message, true);
        if (!dialog.open) toast(error.message);
      } finally {
        lock(false);
      }
    }

    async function openCart() {
      if (!dialog.open) dialog.showModal();
      message('');
      try {
        updateUI(await api('GET', '/krunko/enquiry-cart'));
      } catch (error) {
        message(error.message, true);
      }
    }

    // Capture phase prevents the old preview cart script from also opening its popup.
    document.addEventListener('click', event => {
      if (!(event.target instanceof Element)) return;
      const addButton = event.target.closest('.add-cart');
      const openButton = event.target.closest('.cart-button');
      if (!addButton && !openButton) return;
      event.preventDefault();
      event.stopImmediatePropagation();

      if (openButton) {
        openCart();
      } 
    //   else if (addButton.dataset.product) {
    //     changeCart('POST', '/krunko/enquiry-cart/add',
    //       { product: addButton.dataset.product }, 'Added to enquiry cart');
    //   }
    else if (addButton.dataset.product) {

    const quantity = Number(
        addButton.dataset.quantity || 1
    );

    changeCart(
        'POST',
        '/krunko/enquiry-cart/add',
        {
            product: addButton.dataset.product,
            quantity: quantity
        },
        'Added to enquiry cart'
    );}
    }, true);

    dialog.querySelector('.kr-enquiry-close').addEventListener('click', () => dialog.close());
    dialog.querySelector('.kr-enquiry-continue').addEventListener('click', () => {
      dialog.close();
      document.querySelector('#shop')?.scrollIntoView({ behavior: 'smooth' });
    });
    dialog.addEventListener('click', event => {
      if (event.target === dialog) dialog.close();
    });

    form.addEventListener('submit', async event => {
      event.preventDefault();
      if (busy || !form.reportValidity()) return;
      lock(true);
      message('');
      const submitButton = form.querySelector('.kr-enquiry-submit');
      submitButton.textContent = 'Sending Enquiry...';
      try {
        const payload = Object.fromEntries(new FormData(form).entries());
        const result = await api('POST', '/krunko/send-enquiry', payload);
        form.reset();
        updateUI({ items: [], count: 0 });
        message(result.message || 'Your enquiry was sent successfully.');
      } catch (error) {
        message(error.message, true);
        messageBox.scrollIntoView({ block: 'nearest' });
      } finally {
        submitButton.textContent = 'Send Enquiry';
        lock(false);
      }
    });

    // Restore the correct count after a page refresh.
    api('GET', '/krunko/enquiry-cart').then(updateUI).catch(() => {});
  });
})();