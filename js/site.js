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
    initGalleryLightbox();
    initDemoContactForm();
    initTransparencyAccordion();
    initTransparencyYearSwitcher();
  });

  /* ---------- Gallery Lightbox ---------- */
  function initGalleryLightbox() {
    var modal = document.getElementById('galleryLightbox');
    if (!modal) return;

    var image = modal.querySelector('.gallery-lightbox-image');
    var caption = modal.querySelector('.gallery-lightbox-caption');
    var status = modal.querySelector('.gallery-lightbox-status');
    var indexLabel = modal.querySelector('.gallery-lightbox-index');
    var photos = Array.prototype.slice.call(document.querySelectorAll('.photo-tile[data-gallery-image]'));
    var previous = modal.querySelector('[data-gallery-prev]');
    var next = modal.querySelector('[data-gallery-next]');
    var currentIndex = 0;
    if (!image || !photos.length) return;

    function showPhoto(index) {
      currentIndex = (index + photos.length) % photos.length;
      var trigger = photos[currentIndex];

      image.classList.add('d-none');
      if (status) {
        status.hidden = false;
        status.textContent = 'Carregando foto...';
      }

      image.onload = function () {
        image.classList.remove('d-none');
        if (status) status.hidden = true;
      };
      image.onerror = function () {
        image.classList.add('d-none');
        if (status) status.textContent = 'Não foi possível carregar esta foto.';
      };

      image.alt = trigger.getAttribute('data-gallery-alt') || '';
      image.src = trigger.getAttribute('data-gallery-image');
      if (caption) caption.textContent = image.alt;
      if (indexLabel) indexLabel.textContent = 'Foto ' + (currentIndex + 1) + ' de ' + photos.length;
    }

    modal.addEventListener('show.bs.modal', function (event) {
      var trigger = event.relatedTarget;
      if (!trigger) return;
      var index = photos.indexOf(trigger);
      showPhoto(index >= 0 ? index : 0);
    });

    modal.addEventListener('hidden.bs.modal', function () {
      image.removeAttribute('src');
      image.classList.add('d-none');
    });

    if (previous) previous.addEventListener('click', function () { showPhoto(currentIndex - 1); });
    if (next) next.addEventListener('click', function () { showPhoto(currentIndex + 1); });

    modal.addEventListener('keydown', function (event) {
      if (event.key === 'ArrowLeft') {
        event.preventDefault();
        showPhoto(currentIndex - 1);
      } else if (event.key === 'ArrowRight') {
        event.preventDefault();
        showPhoto(currentIndex + 1);
      }
    });

    if (previous) previous.disabled = photos.length < 2;
    if (next) next.disabled = photos.length < 2;
  }

  /* ---------- Frontend-only Contact Form ---------- */
  function initDemoContactForm() {
    var form = document.querySelector('[data-demo-form]');
    if (!form) return;

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      var status = document.getElementById('form-status');
      if (status) {
        status.textContent = 'Este formulário é demonstrativo e ainda não envia mensagens. Entre em contato pelo e-mail ou telefone informado nesta página.';
      }
    });

    var submit = form.querySelector('[type="submit"]');
    if (submit) submit.disabled = false;
  }

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

    menuClose.addEventListener('click', function () {
      closeMenu();
      if (menuToggler) menuToggler.focus();
    });

    document.addEventListener('keydown', function (event) {
      if (!navbarCollapse.classList.contains('show')) return;

      if (event.key === 'Escape') {
        closeMenu();
        if (menuToggler) menuToggler.focus();
      } else if (event.key === 'Tab') {
        var focusable = navbarCollapse.querySelectorAll('a[href], button:not([disabled])');
        var first = focusable[0];
        var last = focusable[focusable.length - 1];
        if (event.shiftKey && document.activeElement === first) {
          event.preventDefault();
          last.focus();
        } else if (!event.shiftKey && document.activeElement === last) {
          event.preventDefault();
          first.focus();
        }
      }
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth >= 992 && navbarCollapse.classList.contains('show')) {
        closeMenu();
        document.body.style.overflow = '';
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

   /* ---------- Transparency Accordion (custom, fade + slide) ----------
      Abandons Bootstrap Collapse for these cards on purpose: Bootstrap
      animates inline `height` and toggles `.show`/`.collapsing`, so margins
      and paddings that only render at the end of the transition cause the
      visible "jump" at the end of opening. The custom panel reserves zero
      space when closed and animates grid rows + opacity + translate, so the
      animation ends EXACTLY at the content size. Also auto-collapses
      siblings and keeps full keyboard + reduced-motion support. */
  function initTransparencyAccordion() {
    var groups = document.querySelectorAll('[data-transparency-accordion]');
    var scopedGroups = groups.length ? groups : [document];
    var togglesBound = 0;

    scopedGroups.forEach(function (scope) {
      var cards = scope.querySelectorAll('.document-card[data-accordion-toggle]');
      if (!cards.length) return;

      cards.forEach(function (card) {
        if (card.dataset.accordionBound === 'true') return;
        card.dataset.accordionBound = 'true';
        togglesBound += 1;

        var panelId = card.getAttribute('aria-controls');
        var panel = panelId ? scope.querySelector('#' + CSS.escape(panelId)) : card.querySelector('[data-accordion-panel]');
        if (!panel) return;

        var animating = false;

        function isOpen() {
          return card.classList.contains('is-open') && !panel.hidden;
        }

        function afterTransition(targetPanel, callback) {
          var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
          if (reduceMotion) {
            callback();
            return;
          }
          var done = false;
          function finish(event) {
            if (event && event.target !== targetPanel) return;
            if (done) return;
            done = true;
            targetPanel.removeEventListener('transitionend', finish);
            callback();
          }
          targetPanel.addEventListener('transitionend', finish);
          window.setTimeout(finish, 480);
        }

        function open(instant) {
          card.classList.add('is-open');
          card.setAttribute('aria-expanded', 'true');
          panel.hidden = false;
          void panel.offsetHeight;
          requestAnimationFrame(function () {
            requestAnimationFrame(function () {
              card.classList.add('is-open');
              if (instant) {
                animating = false;
              } else {
                afterTransition(panel, function () { animating = false; });
              }
            });
          });
        }

        function close(instant) {
          card.classList.remove('is-open');
          card.setAttribute('aria-expanded', 'false');
          if (instant) {
            panel.hidden = true;
            animating = false;
            return;
          }
          afterTransition(panel, function () {
            if (!card.classList.contains('is-open')) panel.hidden = true;
            animating = false;
          });
        }

        function toggle() {
          if (animating) return;
          animating = true;
          var shouldOpen = !isOpen();

          if (shouldOpen) {
            var siblings = scope.querySelectorAll('.document-card[data-accordion-toggle].is-open');
            siblings.forEach(function (sibling) {
              if (sibling === card) return;
              sibling.classList.remove('is-open');
              sibling.setAttribute('aria-expanded', 'false');
              var siblingId = sibling.getAttribute('aria-controls');
              var siblingPanel = siblingId ? scope.querySelector('#' + CSS.escape(siblingId)) : null;
              if (siblingPanel) {
                (function (sib, sibPanel) {
                  afterTransition(sibPanel, function () {
                    if (!sib.classList.contains('is-open')) sibPanel.hidden = true;
                  });
                })(sibling, siblingPanel);
              }
            });
            open(false);
          } else {
            close(false);
          }
        }

        card.addEventListener('click', function (event) {
          if (event.target.closest('a, button')) return;
          toggle();
        });

        card.addEventListener('keydown', function (event) {
          if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault();
            toggle();
          }
        });
      });
    });

    if (togglesBound) return;

    /* Fallback: keep legacy Bootstrap-driven cards working if present. */
    if (typeof bootstrap === 'undefined') return;
    var collapseElements = document.querySelectorAll('.document-card .collapse');
    if (!collapseElements.length) return;
    collapseElements.forEach(function (collapseEl) {
      collapseEl.addEventListener('show.bs.collapse', function () {
        var currentCard = this.closest('.document-card');
        var parent = currentCard.closest('.content-panel, .transparency-list');
        if (!parent) return;
        var others = parent.querySelectorAll('.document-card .collapse');
        others.forEach(function (otherCollapse) {
          var otherCard = otherCollapse.closest('.document-card');
          if (otherCard !== currentCard) {
            var bsCollapse = bootstrap.Collapse.getInstance(otherCollapse);
            if (bsCollapse) bsCollapse.hide();
          }
        });
      });
    });
  }

  /* ---------- Transparency Year Switcher ----------
     Alterna as listas de documentos por ano (data-year-panel).
     Ao trocar, o painel do ano anterior é ocultado com todas as
     sanfonas fechadas, e o novo entra com fade curto. */
  function initTransparencyYearSwitcher() {
    var select = document.querySelector('[data-year-select]');
    if (!select) return;

    var panels = Array.prototype.slice.call(document.querySelectorAll('[data-year-panel]'));
    if (!panels.length) return;

    function closeCard(card) {
      card.classList.remove('is-open');
      card.setAttribute('aria-expanded', 'false');
      var panelId = card.getAttribute('aria-controls');
      var body = panelId ? document.getElementById(panelId) : card.querySelector('[data-accordion-panel]');
      if (body) body.hidden = true;
    }

    function showYear(year, animate) {
      panels.forEach(function (panel) {
        var isTarget = panel.getAttribute('data-year-panel') === year;
        if (isTarget) {
          panel.hidden = false;
          if (animate) {
            panel.classList.add('is-entering');
            panel.addEventListener('animationend', function () {
              panel.classList.remove('is-entering');
            }, { once: true });
          }
        } else {
          panel.hidden = true;
          panel.querySelectorAll('.document-card.is-open').forEach(closeCard);
        }
      });
    }

    select.addEventListener('change', function () {
      showYear(this.value, true);
    });

    showYear(select.value, false);
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
