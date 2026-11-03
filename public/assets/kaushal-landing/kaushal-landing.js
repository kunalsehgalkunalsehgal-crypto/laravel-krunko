/* Kaushal Agro landing: tiny vanilla JS, no library required. */
(() => {
  'use strict';
  const root = document.documentElement;
  root.classList.add('ka-js');
  const header = document.querySelector('#site-header');
  const toggle = document.querySelector('#menu-toggle');
  const nav = document.querySelector('#primary-nav');
  if (header) {
    const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
  if (toggle && nav) {
    const setOpen = (open) => {
      toggle.setAttribute('aria-expanded', String(open));
      toggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
      nav.classList.toggle('is-open', open);
    };
    toggle.addEventListener('click', () => setOpen(toggle.getAttribute('aria-expanded') !== 'true'));
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => setOpen(false)));
    document.addEventListener('keydown', event => { if (event.key === 'Escape') setOpen(false); });
    document.addEventListener('click', event => {
      if (!header.contains(event.target)) setOpen(false);
    });
  }
  const reveals = document.querySelectorAll('.ka-reveal');
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!('IntersectionObserver' in window) || reduced) {
    reveals.forEach(el => el.classList.add('ka-visible'));
  } else {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('ka-visible');
        observer.unobserve(entry.target);
      });
    }, { rootMargin: '0px 0px 45px 0px', threshold: 0.07 });
    reveals.forEach(el => observer.observe(el));
  }
})();
