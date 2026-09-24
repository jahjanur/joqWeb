<?php
/**
 * JOQ design-system header.
 *
 * Shared by index.php, templates/newSingle.php and templates/newCategory.php,
 * which each emit their own <head> and used to carry their own copy of this
 * markup. Renders the top bar, sticky nav, search overlay and mobile menu
 * using the joq-* classes from assets/css/joq-design-system.css.
 *
 * Behaviour (burger, dropdown, search, mobile menu) lives in
 * assets/js/joq-design-system.js — the CSS only styles the toggled states.
 */

$joq_theme_uri = '/wp-content/themes/joq';

/* The ticker used to live inline in index.php, so only the homepage had it.
   The design puts it inside the header, which means every page type. Built
   here so article, category, search, Live and the static pages get it too.

   $joq_excluded is a homepage-only variable; everywhere else there is nothing
   to exclude. */
$joq_tick_excluded = isset( $joq_excluded ) && is_array( $joq_excluded ) ? $joq_excluded : array();
$joq_tick_q = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 8,
    'post_status'         => 'publish',
    'category__not_in'    => $joq_tick_excluded,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
) );
$joq_tick_items = '';
$joq_tick_count = 0;
foreach ( $joq_tick_q->posts as $joq_tick_p ) {
    $joq_tick_count++;
    $joq_tick_items .= '<a class="joq-ticker__item" href="' . esc_url( get_permalink( $joq_tick_p->ID ) ) . '">'
        . '<strong>' . get_the_date( 'H:i', $joq_tick_p->ID ) . '</strong>&nbsp; '
        . esc_html( get_the_title( $joq_tick_p->ID ) ) . '</a>';
}
?>

<header class="joq-header">

<!-- Toolbar -->
<div class="joq-header__top">
    <div class="joq-header__top-inner">
        <div class="joq-header__date">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?php echo date_i18n( 'l, j F Y' ); ?>
        </div>
        <div class="joq-header__top-links">
            <a href="/faqe/rreth-nesh.html">Rreth Nesh</a>
            <a href="/faqe/reklamo.html">Marketing</a>
            <a href="/faqe/puno-me-ne.html">Puno me ne!</a>
            <a href="/faqe/kontakto.html">Kontakt</a>
            <a href="/english/index.html" class="joq-header__lang" title="English">EN</a>
        </div>
    </div>
</div>

<nav class="joq-header__nav">
    <div class="joq-header__nav-inner">

        <a href="/" class="joq-header__logo" title="JOQ Albania">
            <img src="<?php echo $joq_theme_uri; ?>/assets/images/WhiteLogoJoq.svg" width="95" height="38" alt="JOQ Albania" />
        </a>

        <nav class="joq-header__links">
            <a href="/kategori/lajme.html">News</a>
            <a href="/kosova/index.html">Kosova</a>
            <a href="/maqedoni/index.html">Maqedoni</a>
            <a href="/kategori/sport.html">Sport</a>
            <a href="/kategori/vec-e-jona.html">Ve&ccedil; e jona</a>
            <a href="/kategori/persekutimi-ndaj-joq.html">Persekutimi ndaj JOQ</a>

            <div class="joq-dropdown">
                <button type="button" class="joq-dropdown__trigger" aria-expanded="false" aria-haspopup="true">
                    M&euml; shum&euml;
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                </button>

                <div class="joq-dropdown__menu">
                    <div class="joq-dropdown__col">
                        <span class="joq-dropdown__label">Kategorit&euml;</span>
                        <a href="/kategori/lajme.html">Lajme</a>
                        <a href="/kategori/bota.html">Bota</a>
                        <a href="/kategori/teknologji.html">Teknologji</a>
                        <a href="/kategori/argetim.html">Arg&euml;tim</a>
                        <a href="/kategori/sondazhe.html">Sondazhe</a>
                        <a href="/kategori/hallet-e-popullit.html">Hallet e Popullit</a>
                    </div>

                    <div class="joq-dropdown__col">
                        <span class="joq-dropdown__label">M&euml; shum&euml;</span>
                        <a href="/kategori/kuriozitete.html">Kuriozitete</a>
                        <a href="/kategori/thashetheme.html">Thashetheme</a>
                        <a href="/kategori/udhetime.html">Udh&euml;time</a>
                        <a href="/kategori/shendeti.html">Sh&euml;ndeti</a>
                        <a href="/kategori/si-te.html">Si t&euml;...</a>
                        <a href="https://tehumbura.joq-albania.com/te-humbura/">T&euml; humbura</a>
                    </div>

                    <div class="joq-dropdown__promo">
                        <a href="/faqe/live.html" class="joq-dropdown__live-card">
                            <div class="joq-dropdown__live-screen">
                                <span class="joq-dropdown__live-orb"></span>
                                <span class="joq-dropdown__live-orb joq-dropdown__live-orb--2"></span>

                                <span class="joq-dropdown__live-badge">
                                    <span class="joq-dropdown__promo-dot"></span>LIVE
                                </span>

                                <span class="joq-dropdown__live-play">
                                    <span class="joq-dropdown__live-ripple"></span>
                                    <span class="joq-dropdown__live-ripple joq-dropdown__live-ripple--2"></span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                </span>

                                <img class="joq-dropdown__live-logo" src="<?php echo $joq_theme_uri; ?>/assets/images/TvaLogoWhite.svg" width="93" height="28" alt="TV A" />
                                <span class="joq-dropdown__live-sub">Transmetim direkt</span>
                            </div>

                            <div class="joq-dropdown__live-bottom">
                                <span class="joq-dropdown__live-cta">Shiko tani</span>
                                <svg class="joq-dropdown__live-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="joq-header__right">
            <a href="https://wa.me/+355699299998" target="_blank" rel="noopener" class="joq-header__cta">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                D&euml;rgo denoncim
            </a>
            <a href="/faqe/live.html" class="joq-header__live">
                <span class="joq-header__live-dot"></span>LIVE
            </a>

            <button type="button" class="joq-header__search-btn" aria-label="K&euml;rko">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>

            <button type="button" class="joq-header__burger" aria-label="Menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>

    <?php /* Reading progress. The JS that drives this has been in
             joq-design-system.js since the port (it sets the fill width on
             scroll) but the markup it looks for was never written, so the
             handler has been sitting idle behind a null-check. */ ?>
    <div class="joq-progress" role="progressbar" aria-label="Progresi i shfletimit"
         aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
        <span class="joq-progress__fill"></span>
    </div>
</nav>

<?php if ( $joq_tick_items ) : ?>
<div class="joq-ticker" role="region" aria-label="Lajmet e fundit">
    <div class="joq-ticker__inner">
        <span class="joq-ticker__badge">E fundit</span>
        <div class="joq-ticker__scroll">
            <?php /* track is duplicated so the -50% translate loops seamlessly;
                     --n scales the animation duration to the number of items */ ?>
            <div class="joq-ticker__track" style="--n: <?php echo (int) $joq_tick_count; ?>"><?php echo $joq_tick_items . $joq_tick_items; ?></div>
        </div>
        <button type="button" class="joq-ticker__toggle" aria-pressed="false" aria-label="Ndalo l&euml;vizjen">
            <svg class="joq-ticker__ico-pause" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><rect x="6" y="4" width="4" height="16" rx="1"/><rect x="14" y="4" width="4" height="16" rx="1"/></svg>
            <svg class="joq-ticker__ico-play" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="7 4 20 12 7 20 7 4"/></svg>
        </button>
    </div>
</div>
<?php endif; ?>

</header>
<!-- End Toolbar -->

<!-- Search -->
<div class="joq-search">
    <button type="button" class="joq-search__close" aria-label="Mbyll">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="joq-search__inner">
        <label class="joq-search__label" for="joq-search-input">K&euml;rko n&euml; JOQ Albania</label>
        <form class="joq-search__form" action="/kerko.html" method="GET">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.3)" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <input type="text" id="joq-search-input" name="s" spellcheck="false" placeholder="K&euml;rko dhe shtyp enter" required />
        </form>
    </div>
</div>
<!-- End Search -->

<!-- Mobile Menu -->
<div class="joq-mobile-menu__backdrop"></div>

<div class="joq-mobile-menu">
    <div class="joq-mobile-menu__inner">

        <div class="joq-mobile-menu__header">
            <img class="joq-mobile-menu__logo" src="<?php echo $joq_theme_uri; ?>/assets/images/WhiteLogoJoq.svg" width="60" height="24" alt="JOQ Albania" />
            <button type="button" class="joq-mobile-menu__close" aria-label="Mbyll">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        <a href="/faqe/live.html" class="joq-mobile-menu__live-card">
            <span class="joq-mobile-menu__live-orb"></span>
            <span class="joq-mobile-menu__live-left">
                <span class="joq-mobile-menu__live-badge">
                    <span class="joq-mobile-menu__live-dot"></span>LIVE
                </span>
                <span class="joq-mobile-menu__live-info">
                    <span class="joq-mobile-menu__live-text">Transmetim direkt</span>
                    <span class="joq-mobile-menu__live-sub">Shiko tani</span>
                </span>
            </span>
            <span class="joq-mobile-menu__live-play">
                <span class="joq-mobile-menu__live-ripple"></span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
            </span>
        </a>

        <span class="joq-mobile-menu__label">Kategorit&euml;</span>
        <nav class="joq-mobile-menu__nav">
            <?php
            $joq_mobile_links = array(
                array( 'Ve&ccedil; e jona',        '/kategori/vec-e-jona.html',            'red' ),
                array( 'News',                     '/kategori/lajme.html',                 'blue' ),
                array( 'Kosova',                   '/kosova/index.html',                   'green' ),
                array( 'Maqedoni',                 '/maqedoni/index.html',                 'purple' ),
                array( 'Sport',                    '/kategori/sport.html',                 'emerald' ),
                array( 'Bota',                     '/kategori/bota.html',                  'cyan' ),
                array( 'Sondazhe',                 '/kategori/sondazhe.html',              'orange' ),
                array( 'Persekutimi ndaj JOQ',     '/kategori/persekutimi-ndaj-joq.html',  'red' ),
                array( 'T&euml; humbura',          'https://tehumbura.joq-albania.com/te-humbura/', 'yellow' ),
                array( 'Teknologji',               '/kategori/teknologji.html',            'indigo' ),
                array( 'Kuriozitete',              '/kategori/kuriozitete.html',           'pink' ),
                array( 'Thashetheme',              '/kategori/thashetheme.html',           'purple' ),
                array( 'Udh&euml;time',            '/kategori/udhetime.html',              'cyan' ),
                array( 'Sh&euml;ndeti',            '/kategori/shendeti.html',              'emerald' ),
                array( 'Si t&euml;...',            '/kategori/si-te.html',                 'orange' ),
                array( 'Hallet e Popullit',        '/kategori/hallet-e-popullit.html',     'blue' ),
            );
            $joq_i = 0;
            foreach ( $joq_mobile_links as $joq_link ) :
                ?>
                <a href="<?php echo $joq_link[1]; ?>" class="joq-mobile-menu__link" style="--i: <?php echo $joq_i; ?>">
                    <span class="joq-mobile-menu__icon joq-mobile-menu__icon--<?php echo $joq_link[2]; ?>">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0V6h4"/><path d="M18 14h-8M15 18h-5M10 6h8v4h-8V6Z"/></svg>
                    </span>
                    <span><?php echo $joq_link[0]; ?></span>
                    <svg class="joq-mobile-menu__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <?php
                $joq_i++;
            endforeach;
            ?>
        </nav>

        <span class="joq-mobile-menu__label">Rreth nesh</span>
        <nav class="joq-mobile-menu__nav joq-mobile-menu__nav--secondary">
            <a href="/faqe/rreth-nesh.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>Rreth Nesh</span></a>
            <a href="/faqe/puno-me-ne.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>Puno me ne!</span></a>
            <a href="/faqe/reklamo.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>Marketing</span></a>
            <a href="/faqe/kontakto.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>Kontakt</span></a>
            <a href="/faqe/politika-e-privatesise.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>Politika e privat&euml;sis&euml;</span></a>
            <a href="/faqe/kushtet-e-perdorimit.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>Kushtet e p&euml;rdorimit</span></a>
            <a href="/english/index.html" class="joq-mobile-menu__link joq-mobile-menu__link--sm"><span>English</span></a>
        </nav>

        <div class="joq-mobile-menu__footer">
            <a href="https://wa.me/+355699299998" target="_blank" rel="noopener" class="joq-mobile-menu__btn joq-mobile-menu__btn--wa">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884a9.82 9.82 0 0 1 6.988 2.896 9.82 9.82 0 0 1 2.893 6.994c-.003 5.45-4.437 9.886-9.885 9.886m8.413-18.297A11.8 11.8 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.9 11.9 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.82 11.82 0 0 0-3.48-8.413"/></svg>
                D&euml;rgo material
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.joqAlbania.al" target="_blank" rel="noopener" class="joq-mobile-menu__btn joq-mobile-menu__btn--app">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
                Aplikacioni
            </a>
        </div>

        <div class="joq-mobile-menu__socials">
            <a href="https://www.facebook.com/joqalbania/" target="_blank" rel="noopener" title="Facebook"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07"/></svg></a>
            <a href="https://www.instagram.com/joqalbania/" target="_blank" rel="noopener" title="Instagram"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg></a>
            <a href="https://www.youtube.com/channel/UCVsMVFcGZgxXTl5A-usiIBQ/?sub_confirmation=1" target="_blank" rel="noopener" title="YouTube"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8M9.6 15.6V8.4l6.2 3.6z"/></svg></a>
            <a href="https://twitter.com/JoqAlbania" target="_blank" rel="noopener" title="X"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 1.2h3.7l-8.1 9.2L24 22.8h-7.4l-5.9-7.6-6.7 7.6H.3l8.6-9.9L0 1.2h7.6l5.3 7zm-1.3 19.4h2L6.5 3.3H4.3z"/></svg></a>
        </div>

    </div>
</div>
<!-- End Mobile Menu -->
