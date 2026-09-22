/* ============================================
   ASSOCIAÇÃO DOS ATLETAS DO FUTURO
   JavaScript — Behavior & Interactions
   ============================================ */

(function () {
  'use strict';

  /* ---------- DOM Ready ---------- */
  document.addEventListener('DOMContentLoaded', function () {
    initHeaderScroll();
    initScrollToTop();
    initScrollAnimations();
    initCountUp();
    initMobileMenu();
  });

  /* ---------- Mobile Menu ---------- */
  function initMobileMenu() {
    var navbarCollapse = document.querySelector('#main-nav');
    var menuToggler = document.querySelector('.navbar-toggler');
    var menuClose = document.querySelector('.mobile-menu-close');
    var navLinks = navbarCollapse ? navbarCollapse.querySelectorAll('.nav-link, .btn-cta') : [];

    if (!navbarCollapse || !menuClose) return;

    function closeMenu() {
      if (typeof bootstrap !== 'undefined' && bootstrap.Collapse) {
        bootstrap.Collapse.getOrCreateInstance(navbarCollapse).hide();
      } else {
        navbarCollapse.classList.remove('show');
        navbarCollapse.setAttribute('aria-expanded', 'false');
        if (menuToggler) menuToggler.setAttribute('aria-expanded', 'false');
      }
    }

    menuClose.addEventListener('click', closeMenu);

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && navbarCollapse.classList.contains('show')) {
        closeMenu();
        if (menuToggler) menuToggler.focus();
      }
    });

    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.innerWidth <= 991 && navbarCollapse.classList.contains('show')) {
          closeMenu();
        }
      });
    });

    navbarCollapse.addEventListener('shown.bs.collapse', function () {
      document.body.style.overflow = 'hidden';
      menuClose.setAttribute('aria-expanded', 'true');
      if (menuToggler) menuToggler.setAttribute('aria-expanded', 'true');
      menuClose.focus();
    });

    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
      document.body.style.overflow = '';
      menuClose.setAttribute('aria-expanded', 'false');
      if (menuToggler) menuToggler.setAttribute('aria-expanded', 'false');
    });
  }

  /* ---------- Header Scroll Shadow ---------- */
  function initHeaderScroll() {
    var header = document.querySelector('.site-header');
    if (!header) return;

    var threshold = 80;

    function updateHeader() {
      if (window.scrollY > threshold) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();
  }

  /* ---------- Scroll to Top Button ---------- */
  function initScrollToTop() {
    var btn = document.getElementById('scrollToTop');
    if (!btn) return;

    var scrollThreshold = 600;

    function updateButton() {
      if (window.scrollY > scrollThreshold) {
        btn.classList.add('visible');
      } else {
        btn.classList.remove('visible');
      }
    }

    window.addEventListener('scroll', updateButton, { passive: true });
    updateButton();

    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---------- Scroll Animations (Intersection Observer) ---------- */
  function initScrollAnimations() {
    var animatedElements = document.querySelectorAll('[data-animate]');
    if (!animatedElements.length) return;

    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReducedMotion) {
      animatedElements.forEach(function (el) {
        el.classList.add('animated');
      });
      return;
    }

    var observerOptions = {
      root: null,
      rootMargin: '0px 0px -60px 0px',
      threshold: 0.15
    };

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    animatedElements.forEach(function (el) {
      observer.observe(el);
    });
  }

  /* ---------- Count Up Animation ---------- */
  function initCountUp() {
    var statElements = document.querySelectorAll('.statistic[data-animate="count-up"]');
    if (!statElements.length) return;

    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var observerOptions = {
      root: null,
      rootMargin: '0px 0px -40px 0px',
      threshold: 0.3
    };

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var stat = entry.target;
          var valueEl = stat.querySelector('.count-value');
          if (!valueEl) return;

          var target = parseInt(stat.getAttribute('data-target'), 10) || 0;
          var suffix = stat.getAttribute('data-suffix') || '';

          if (prefersReducedMotion) {
            valueEl.textContent = target.toLocaleString('pt-BR') + suffix;
          } else {
            animateCount(valueEl, target, suffix);
          }

          observer.unobserve(stat);
        }
      });
    }, observerOptions);

    statElements.forEach(function (el) {
      observer.observe(el);
    });
  }

  function animateCount(element, target, suffix) {
    var duration = 1500;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);

      var eased = easeOutQuart(progress);
      var current = Math.floor(eased * target);

      element.textContent = current.toLocaleString('pt-BR') + suffix;

      if (progress < 1) {
        requestAnimationFrame(step);
      }
    }

    requestAnimationFrame(step);
  }

  function easeOutQuart(t) {
    return 1 - Math.pow(1 - t, 4);
  }

  })();
