<?php
/**
 * Live TV — /faqe/live.html
 *
 * TVA News over HLS. Safari plays .m3u8 natively; everywhere else hls.js does
 * it. If neither works (no MSE, script blocked, stream down, or the stream
 * serves no CORS headers to a non-native player) the page says so and offers a
 * retry rather than showing a dead black rectangle.
 */

$joq_theme_uri  = '/wp-content/themes/joq';
$joq_live_src   = 'https://live.tvanews.com/live/tvanews/play.m3u8';

/* Cached like the other static pages; never cache a logged-in preview. */
$joq_cache = function_exists( 'gliterin_optimizer_legacy_file_put_contents' ) && ! is_user_logged_in();
if ( $joq_cache ) {
    ob_start();
}
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="sq-AL">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Transmetim direkt &mdash; JOQ Albania</title>
    <meta name="description" content="Shiko TVA News direkt n&euml; JOQ Albania." />
    <link rel="canonical" href="https://joq-albania.com/faqe/live.html" />
    <?php echo joq_social_meta( array(
        'title'       => 'Transmetim direkt - JOQ Albania',
        'description' => 'Shiko TVA News direkt në JOQ Albania.',
        'url'         => 'https://joq-albania.com/faqe/live.html',
        'type'        => 'video.other',
    ) ); ?>

    <link rel="icon" href="<?php echo $joq_theme_uri; ?>/assets/images/icons/icon.png" />
    <link rel="preconnect" href="https://live.tvanews.com" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v=1.02" type="text/css" />
    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="<?php echo $joq_theme_uri; ?>/assets/css/joq-design-system.css?v=6.1" type="text/css" />
</head>

<body>

<?php get_template_part( 'templates/joqHeader' ); ?>

<main class="joq-live" id="joq-main">

    <div class="joq-live__player-wrapper">
        <div class="joq-live__player">
            <video id="joq-live-video" playsinline muted controls preload="none"
                   poster="<?php echo $joq_theme_uri; ?>/assets/images/joq-fallback.svg"></video>
        </div>
        <div class="joq-live__error" id="joq-live-error" hidden>
            <p class="joq-live__error-title">Transmetimi nuk &euml;sht&euml; i disponuesh&euml;m</p>
            <p class="joq-live__error-text">Provo p&euml;rs&euml;ri pas pak, ose shiko lajmet m&euml; t&euml; fundit.</p>
            <button type="button" class="joq-live__retry" id="joq-live-retry">Provo p&euml;rs&euml;ri</button>
        </div>
    </div>

    <div class="joq-live__info">
        <div>
            <span class="joq-live__badge"><span class="joq-live__badge-dot"></span>LIVE</span>
            <h1 class="joq-live__title">TVA News</h1>
            <p class="joq-live__desc">
                Transmetim direkt 24/7. Lajmet kryesore, emisionet dhe analiza &mdash;
                drejtp&euml;rdrejt n&euml; JOQ Albania.
            </p>
        </div>
        <?php /* .joq-live__social is a 40px icon button; these carry the same marks as the footer. */ ?>
        <div class="joq-live__socials">
            <a class="joq-live__social" href="https://www.facebook.com/joqalbania/" target="_blank" rel="noopener" aria-label="Facebook" title="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07"/></svg></a>
            <a class="joq-live__social" href="https://www.instagram.com/joqalbania/" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg></a>
            <a class="joq-live__social" href="https://www.youtube.com/channel/UCVsMVFcGZgxXTl5A-usiIBQ/?sub_confirmation=1" target="_blank" rel="noopener" aria-label="YouTube" title="YouTube"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8M9.6 15.6V8.4l6.2 3.6z"/></svg></a>
        </div>
    </div>

</main>

<?php get_template_part( 'templates/joqFooter' ); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/1.5.13/hls.min.js" defer
        onerror="window.joqHlsFailed = true;"></script>
<script>
(function () {
    'use strict';

    var SRC   = <?php echo wp_json_encode( $joq_live_src ); ?>;
    var video = document.getElementById('joq-live-video');
    var error = document.getElementById('joq-live-error');
    var retry = document.getElementById('joq-live-retry');
    var hls   = null;

    function showError() {
        if (error) { error.hidden = false; }
        if (video) { video.style.visibility = 'hidden'; }
    }

    function hideError() {
        if (error) { error.hidden = true; }
        if (video) { video.style.visibility = ''; }
    }

    function play() {
        hideError();

        /* Safari and iOS play HLS straight from a src, and do not need the
           stream to send CORS headers. Prefer it wherever it exists. */
        if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = SRC;
            video.load();
            video.play().catch(function () { /* autoplay refused; controls are there */ });
            return;
        }

        if (window.joqHlsFailed || !window.Hls || !window.Hls.isSupported()) {
            showError();
            return;
        }

        if (hls) { hls.destroy(); }
        hls = new window.Hls({ lowLatencyMode: true });
        hls.loadSource(SRC);
        hls.attachMedia(video);
        hls.on(window.Hls.Events.MANIFEST_PARSED, function () {
            video.play().catch(function () {});
        });
        hls.on(window.Hls.Events.ERROR, function (_e, data) {
            if (data && data.fatal) {
                hls.destroy();
                hls = null;
                showError();
            }
        });
    }

    video.addEventListener('error', showError);
    if (retry) { retry.addEventListener('click', play); }

    /* defer means hls.js has not run yet at parse time. */
    if (document.readyState === 'complete') { play(); }
    else { window.addEventListener('load', play); }
})();
</script>

<script src="<?php echo $joq_theme_uri; ?>/assets/js/joq-design-system.js?v=3.8"></script>

</body>
</html>
<?php
if ( $joq_cache ) {
    $content = ob_get_contents();
    ob_end_clean();
    gliterin_optimizer_legacy_file_put_contents( '/var/www/html/joq.al/wordpress/cachedWeb/faqe/live.html', $content );
    gliterin_optimizer_legacy_file_put_contents( '/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/faqe/live.html', $content );
}
