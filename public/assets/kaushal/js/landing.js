/* Kaushal Agro mobile navigation: use this ONCE on landing.blade.php.
   Font Awesome icons switch through the button's aria-expanded attribute. */
(() => {
  'use strict';
  const header = document.querySelector('[data-ka-header]');
  const toggle = document.querySelector('[data-ka-menu-toggle]');
  const nav = document.querySelector('[data-ka-nav]');
  if (!header || !toggle || !nav) return;

  const setOpen = (open) => {
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    nav.classList.toggle('is-open', open);
  };

  toggle.addEventListener('click', () => {
    setOpen(toggle.getAttribute('aria-expanded') !== 'true');
  });

  nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => setOpen(false));
  });

  document.addEventListener('click', event => {
    if (!header.contains(event.target)) setOpen(false);
  });

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
      setOpen(false);
      toggle.focus();
    }
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 900) setOpen(false);
  });
})();