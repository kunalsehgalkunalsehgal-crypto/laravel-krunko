'use strict';
/* Only handles The Farm Project form submission. Leaves existing retailer.js
   menu, product cards, expand/collapse, grade choices and CSS untouched. */
(function () {
  const form = document.getElementById('retailer-enquiry-form');
  if (!form) return;

  const response = document.getElementById('form-response');
  const submit = form.querySelector('button[type="submit"]');
  const productNames = ['Premium', 'Supreme', 'Standard'];
  const gradeFields = {
    Premium: 'grade_premium',
    Supreme: 'grade_supreme',
    Standard: 'grade_standard'
  };
  let sending = false;

  function show(message, error) {
    if (!response) return;
    response.hidden = false;
    response.textContent = message;
    response.classList.toggle('error', Boolean(error));
  }

  // Capture phase runs before the old mailto: submit listener in retailer.js.
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    event.stopImmediatePropagation();
    if (sending) return;

    const selected = [...form.querySelectorAll('input[name="products"]:checked, input[name="products[]"]:checked')]
      .map(input => input.value)
      .filter(value => productNames.includes(value));

    if (!selected.length) {
      show('Please choose at least one product.', true);
      form.querySelector('input[name="products"]')?.focus();
      return;
    }

    for (const product of selected) {
      const field = form.elements[gradeFields[product]];
      if (!field || !field.value) {
        show('Please choose a grade for ' + product + '.', true);
        field?.focus();
        return;
      }
    }

    if (!form.checkValidity()) {
      form.reportValidity();
      show('Please complete the required details and agree to be contacted.', true);
      return;
    }

    const payload = new FormData(form);
    // Keep the existing HTML checkbox name="products" so the old product-picker
    // JavaScript still works. Send Laravel-compatible products[] values instead.
    payload.delete('products');
    payload.delete('products[]');
    selected.forEach(value => payload.append('products[]', value));

    sending = true;
    if (submit) {
      submit.disabled = true;
      submit.dataset.originalHtml = submit.innerHTML;
      submit.textContent = 'Sending enquiry...';
    }

    try {
      const result = await fetch(form.action, {
        method: 'POST',
        body: payload,
        credentials: 'same-origin',
        headers: {
          'Accept': 'application/json',
          'X-Requested-With': 'XMLHttpRequest'
        }
      });
      const data = await result.json().catch(() => ({}));
      if (!result.ok) {
        let message = data.message || 'Could not send enquiry. Please try again.';
        if (result.status === 422 && data.errors) {
          const first = Object.values(data.errors)[0];
          if (Array.isArray(first) && first.length) message = first[0];
        } else if (result.status === 419) {
          message = 'Page session expired. Please refresh the page and try again.';
        } else if (result.status === 429) {
          message = 'Too many attempts. Please try again in a minute.';
        }
        show(message, true);
        return;
      }

      show(data.message || 'Enquiry sent successfully! Our team will contact you.', false);
      const emailLink = document.getElementById('open-email-draft');
      const copyButton = document.getElementById('copy-enquiry');
      if (emailLink) emailLink.hidden = true;
      if (copyButton) copyButton.hidden = true;
    } catch (error) {
      show('Network issue. Please check your connection and try again.', true);
    } finally {
      sending = false;
      if (submit) {
        submit.disabled = false;
        submit.innerHTML = submit.dataset.originalHtml || 'Send enquiry';
      }
    }
  }, true);
})();
