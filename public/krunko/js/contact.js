/* KRUNKO Contact Page: separate from legacy storefront script, so other sections are untouched. */
(() => {
    'use strict';
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('kc-contact-form');
        const status = document.getElementById('kc-form-status');
        const submit = document.getElementById('kc-submit');
        const menu = document.querySelector('.menu-button');
        const nav = document.querySelector('.navigation');
        const oldDialog = document.getElementById('info-dialog');
        const year = document.getElementById('year');
        if (year) year.textContent = String(new Date().getFullYear());

        if (menu && nav) {
            menu.addEventListener('click', () => {
                const opened = nav.classList.toggle('open');
                menu.setAttribute('aria-expanded', String(opened));
                menu.setAttribute('aria-label', opened ? 'Close menu' : 'Open menu');
            });
            nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
                nav.classList.remove('open');
                menu.setAttribute('aria-expanded','false');
            }));
        }
        document.addEventListener('keydown', event => {
            if (event.key === 'Escape' && menu && nav) {
                nav.classList.remove('open');
                menu.setAttribute('aria-expanded','false');
            }
        });

        // Existing shared header/footer buttons still have a simple informational popup.
        const infoMessages = {
            account: ['Your Account', 'This website accepts product enquiries. Account login is not enabled.'],
            combos: ['Mix Up Your Crunch', 'Explore our flavours and select the products you would like to enquire about.'],
            arrivals: ['New Arrivals', 'Explore the latest KRUNKO flavours on our Shop page.'],
            offers: ['Offers', 'Contact the KRUNKO team to ask about current availability and offers.'],
            farmers: ['Our Roots', 'KRUNKO is a brand by Kaushal Agro Industries.'],
            quality: ['Quality', 'Please check the product packaging for ingredients and nutritional details.'],
            contact: ['Contact KRUNKO', 'Use the contact form on this page to reach our team.'],
            social: ['KRUNKO Social', 'Official social profile URLs have not yet been configured.'],
            privacy: ['Privacy', 'The contact form sends your details to the KRUNKO team by email.'],
            terms: ['Terms', 'This site accepts enquiries only, not purchases or payment.'],
            shipping: ['Shipping', 'Please contact our team for delivery and availability details.']
        };
        if (oldDialog) {
            document.querySelectorAll('[data-info]').forEach(btn => btn.addEventListener('click', () => {
                const [title, body] = infoMessages[btn.dataset.info] || ['KRUNKO', 'Please contact us for details.'];
                const heading = oldDialog.querySelector('#dialog-title');
                const content = oldDialog.querySelector('#dialog-content');
                if (heading) heading.textContent = title;
                if (content) content.textContent = body;
                if (typeof oldDialog.showModal === 'function' && !oldDialog.open) oldDialog.showModal();
            }));
            oldDialog.querySelector('.dialog-close')?.addEventListener('click', () => oldDialog.close());
            oldDialog.addEventListener('click', event => { if (event.target === oldDialog) oldDialog.close(); });
        }
        if (!form || !status || !submit) return;

        function notice(text, isError = false) {
            status.hidden = !text;
            status.textContent = text;
            status.classList.toggle('is-error', isError);
            if (text) status.scrollIntoView({block:'nearest',behavior:'smooth'});
        }
        form.addEventListener('submit', async event => {
            event.preventDefault();
            if (!form.reportValidity() || submit.disabled) return;
            notice('');
            const token = document.querySelector('meta[name="csrf-token"]')?.content;
            if (!token) return notice('Security token missing. Please reload the page.', true);
            submit.disabled = true;
            const label = submit.innerHTML;
            submit.textContent = 'Sending your message...';
            try {
                const response = await fetch(form.action, {
                    method:'POST',
                    credentials:'same-origin',
                    headers:{'X-CSRF-TOKEN':token,'Accept':'application/json'},
                    body:new FormData(form),
                });
                const data = await response.json().catch(()=>({}));
                if (!response.ok) {
                    const first = data.errors ? Object.values(data.errors).flat()[0] : null;
                    throw new Error(first || data.message || `Could not send message (${response.status}).`);
                }
                form.reset();
                notice(data.message || 'Thank you! Your message was sent.');
            } catch (error) {
                notice(error.message || 'Could not send your message. Please try again.', true);
            } finally {
                submit.disabled = false;
                submit.innerHTML = label;
            }
        });
    });
})();
