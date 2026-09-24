/**
 * JOQ design system — behaviour.
 *
 * assets/css/joq-design-system.css styles seven states that only exist under a
 * class the CSS cannot set itself. This file sets them:
 *
 *   .joq-header__burger.active      burger -> X
 *   .joq-mobile-menu.open           slide-in panel
 *   .joq-mobile-menu__backdrop.open dimmed backdrop
 *   .joq-search.open                full-screen search overlay
 *   .joq-dropdown.open              "Më shumë" mega menu
 *   .joq-qr.open                    QR modal (markup lives on the pages that use it)
 *   .joq-scroll-top.visible         back-to-top button
 *   .joq-ticker--paused             marquee stopped by its pause button
 *
 * plus [data-animate] -> .visible scroll reveals and .joq-progress__fill.
 *
 * Vanilla JS on purpose: the theme's jQuery is loaded from a third-party CDN
 * and this must not depend on it having arrived.
 */
(function () {
    'use strict';

    var doc = document;

    /* Set before paint, not in DOMContentLoaded: the CSS hides every
       [data-animate] section behind .joq-js. If this file runs at all the
       reveals work; if it never loads, the content renders plainly instead of
       staying invisible. */
    doc.documentElement.classList.add('joq-js');

    function qs(sel) { return doc.querySelector(sel); }
    function qsa(sel) { return Array.prototype.slice.call(doc.querySelectorAll(sel)); }

    /* Images that fail to load get .is-broken so the fallback mark paints in
       their place. Capture phase: 'error' does not bubble, and this is bound
       before DOMContentLoaded so it also catches images that fail early.
       Delegated, so it covers markup added later by load-more too. */
    doc.addEventListener('error', function (e) {
        var el = e.target;
        if (el && el.tagName === 'IMG' && !el.classList.contains('is-broken')) {
            el.classList.add('is-broken');
        }
    }, true);

    doc.addEventListener('DOMContentLoaded', function () {

        /* ---------------------------------------------------------------
           Mobile menu
           --------------------------------------------------------------- */
        var burger   = qs('.joq-header__burger');
        var menu     = qs('.joq-mobile-menu');
        var backdrop = qs('.joq-mobile-menu__backdrop');
        var menuClose = qs('.joq-mobile-menu__close');

        function openMenu() {
            if (!menu) { return; }
            menu.classList.add('open');
            if (backdrop) { backdrop.classList.add('open'); }
            if (burger) {
                burger.classList.add('active');
                burger.setAttribute('aria-expanded', 'true');
            }
            doc.body.classList.add('menu-open');
        }

        function closeMenu() {
            if (!menu) { return; }
            menu.classList.remove('open');
            if (backdrop) { backdrop.classList.remove('open'); }
            if (burger) {
                burger.classList.remove('active');
                burger.setAttribute('aria-expanded', 'false');
            }
            doc.body.classList.remove('menu-open');
        }

        if (burger) {
            burger.addEventListener('click', function () {
                if (menu && menu.classList.contains('open')) { closeMenu(); } else { openMenu(); }
            });
        }
        if (menuClose) { menuClose.addEventListener('click', closeMenu); }
        if (backdrop)  { backdrop.addEventListener('click', closeMenu); }

        /* Close the panel when a link inside it is followed, so returning via
           the back/forward cache does not land on an open menu. */
        qsa('.joq-mobile-menu__link, .joq-mobile-menu__live-card').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });

        /* ---------------------------------------------------------------
           Search overlay
           --------------------------------------------------------------- */
        var search      = qs('.joq-search');
        var searchBtn   = qs('.joq-header__search-btn');
        var searchClose = qs('.joq-search__close');
        var searchInput = qs('.joq-search__form input');

        function openSearch() {
            if (!search) { return; }
            closeMenu();
            search.classList.add('open');
            doc.body.classList.add('menu-open');
            /* Wait for the .35s opacity/visibility transition before focusing:
               focusing a visibility:hidden input is a no-op in some browsers. */
            window.setTimeout(function () {
                if (searchInput) { searchInput.focus(); }
            }, 120);
        }

        function closeSearch() {
            if (!search) { return; }
            search.classList.remove('open');
            doc.body.classList.remove('menu-open');
        }

        if (searchBtn)   { searchBtn.addEventListener('click', openSearch); }
        if (searchClose) { searchClose.addEventListener('click', closeSearch); }
        if (search) {
            search.addEventListener('click', function (e) {
                if (e.target === search) { closeSearch(); }
            });
        }

        /* ---------------------------------------------------------------
           Dropdown ("Më shumë")
           --------------------------------------------------------------- */
        var dropdowns = qsa('.joq-dropdown');

        /* Hover opens the menu on a mouse. Not on touch: there mouseenter fires
           immediately before click, so the two would cancel each other out and
           the menu would flash open and shut on a tap. Click works everywhere,
           which is also what the keyboard uses (Enter on the trigger). */
        var canHover = !window.matchMedia ||
            window.matchMedia('(hover: hover) and (pointer: fine)').matches;

        function setDropdown(dd, open) {
            dd.classList.toggle('open', open);
            var t = dd.querySelector('.joq-dropdown__trigger');
            if (t) { t.setAttribute('aria-expanded', open ? 'true' : 'false'); }
        }

        function closeDropdowns(except) {
            dropdowns.forEach(function (dd) {
                if (dd !== except) { setDropdown(dd, false); }
            });
        }

        dropdowns.forEach(function (dd) {
            var trigger = dd.querySelector('.joq-dropdown__trigger');
            if (!trigger) { return; }

            var closeTimer = null;
            function cancelClose() {
                if (closeTimer) { window.clearTimeout(closeTimer); closeTimer = null; }
            }

            trigger.addEventListener('click', function (e) {
                e.stopPropagation();
                cancelClose();
                /* detail is 0 when a button is activated from the keyboard.
                   Those toggle. A real mouse click on a hover-capable device only
                   ever opens: hover already owns closing, and toggling there would
                   shut a menu the pointer is still inside, which then could not
                   reopen until the pointer left and came back. */
                var isOpen = dd.classList.contains('open');
                var toggles = e.detail === 0 || !canHover;
                closeDropdowns(dd);
                setDropdown(dd, toggles ? !isOpen : true);
            });

            if (canHover) {
                dd.addEventListener('mouseenter', function () {
                    cancelClose();
                    closeDropdowns(dd);
                    setDropdown(dd, true);
                });
            }

            /* The menu hangs 12px below the trigger, so the pointer crosses a gap
               that belongs to neither on its way down. Close on a short delay so
               it can get there; entering the menu cancels the timer. */
            dd.addEventListener('mouseleave', function () {
                cancelClose();
                closeTimer = window.setTimeout(function () {
                    setDropdown(dd, false);
                }, 180);
            });
        });

        doc.addEventListener('click', function (e) {
            dropdowns.forEach(function (dd) {
                if (!dd.contains(e.target)) { setDropdown(dd, false); }
            });
        });

        /* ---------------------------------------------------------------
           QR modal — opened by anything with [data-joq-qr]
           --------------------------------------------------------------- */
        var qr = qs('.joq-qr');
        if (qr) {
            qsa('[data-joq-qr]').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    qr.classList.add('open');
                    doc.body.classList.add('menu-open');
                });
            });
            var qrClose = qr.querySelector('.joq-qr__close');
            if (qrClose) {
                qrClose.addEventListener('click', function () {
                    qr.classList.remove('open');
                    doc.body.classList.remove('menu-open');
                });
            }
            qr.addEventListener('click', function (e) {
                if (e.target === qr) {
                    qr.classList.remove('open');
                    doc.body.classList.remove('menu-open');
                }
            });
        }

        /* ---------------------------------------------------------------
           Escape closes whatever is open
           --------------------------------------------------------------- */
        doc.addEventListener('keydown', function (e) {
            if (e.key !== 'Escape' && e.keyCode !== 27) { return; }
            closeMenu();
            closeSearch();
            if (qr) { qr.classList.remove('open'); }
            closeDropdowns(null);
            doc.body.classList.remove('menu-open');
        });

        /* ---------------------------------------------------------------
           Ticker pause/play (WCAG 2.2.2: moving content needs a stop control)
           --------------------------------------------------------------- */
        var ticker    = qs('.joq-ticker');
        var tickerBtn = qs('.joq-ticker__toggle');

        if (ticker && tickerBtn) {
            tickerBtn.addEventListener('click', function () {
                var paused = ticker.classList.toggle('joq-ticker--paused');
                tickerBtn.setAttribute('aria-pressed', paused ? 'true' : 'false');
                tickerBtn.setAttribute('aria-label', paused ? 'Vazhdo l\u00ebvizjen' : 'Ndalo l\u00ebvizjen');
            });
        }

        /* ---------------------------------------------------------------
           Scroll-to-top + reading progress
           --------------------------------------------------------------- */
        var scrollTop = qs('.joq-scroll-top');
        var progress  = qs('.joq-progress__fill');

        if (scrollTop) {
            scrollTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        var ticking = false;
        function onScroll() {
            if (ticking) { return; }
            ticking = true;
            window.requestAnimationFrame(function () {
                var y = window.pageYOffset || doc.documentElement.scrollTop;

                if (scrollTop) {
                    scrollTop.classList.toggle('visible', y > 600);
                }

                if (progress) {
                    var h = doc.documentElement.scrollHeight - window.innerHeight;
                    progress.style.width = (h > 0 ? (y / h) * 100 : 0) + '%';
                }

                ticking = false;
            });
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        /* ---------------------------------------------------------------
           Progressive feed — "Më shumë" reveals the next cycle below
           --------------------------------------------------------------- */
        var cycles   = qsa('.joq-cycle');
        var moreWrap = qs('.joq-feed__more');
        var moreBtn  = qs('.joq-feed__more-btn');
        var feedTail = qs('.joq-feed__tail');

        if (cycles.length && moreBtn) {
            var shown = 1;   /* the first cycle is rendered open */

            /* Out of pre-rendered cycles: swap in the load-more that pulls
               further stories from the server, so one button carries through. */
            function handOver() {
                if (moreWrap) { moreWrap.hidden = true; }
                if (feedTail) { feedTail.classList.add('is-active'); }
            }

            moreBtn.addEventListener('click', function () {
                if (shown < cycles.length) {
                    cycles[shown].classList.add('is-active');
                    shown++;
                }
                if (shown >= cycles.length) { handOver(); }
            });

            if (cycles.length <= 1) { handOver(); }
        } else if (feedTail) {
            feedTail.classList.add('is-active');
        }

        /* ---------------------------------------------------------------
           Category archive — "Më shumë" reveals the next rows
           --------------------------------------------------------------- */
        var catMoreBtn = qs('#load-more-art');

        if (catMoreBtn) {
            var catHidden = qsa('.joq-category__article.is-hidden');
            var catStep   = parseInt(catMoreBtn.getAttribute('data-step'), 10) || 10;
            var catAt     = 0;

            catMoreBtn.addEventListener('click', function () {
                var upto = Math.min(catAt + catStep, catHidden.length);
                for (; catAt < upto; catAt++) {
                    catHidden[catAt].classList.remove('is-hidden');
                }
                if (catAt >= catHidden.length) {
                    catMoreBtn.parentNode.hidden = true;
                }
            });

            if (!catHidden.length) { catMoreBtn.parentNode.hidden = true; }
        }

        /* ---------------------------------------------------------------
           [data-animate] scroll reveals
           --------------------------------------------------------------- */
        var animated = qsa('[data-animate]');

        if (!animated.length) { return; }

        /* No IntersectionObserver (or reduced motion): show everything rather
           than leave it stuck at opacity 0. */
        var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (reduced || !('IntersectionObserver' in window)) {
            animated.forEach(function (el) { el.classList.add('visible'); });
            return;
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -10% 0px', threshold: 0.05 });

        animated.forEach(function (el) { observer.observe(el); });
    });
})();
