<?php
/**
 * Google Tag Manager — the <head> half.
 *
 * Include from inside <head>, as early as possible, on every page type:
 *
 *     <?php get_template_part( 'templates/parts/gtm-head' ); ?>
 *
 * This snippet used to be pasted by hand into index.php, newCategory.php and
 * newSingle.php and nowhere else, so the eight /faqe/* pages, the Live page,
 * search results and the 404 were invisible in analytics. Traffic that was
 * never measured cannot be recovered later, which is why it lives in one file
 * now instead of being pasted a seventh time.
 *
 * The matching <noscript> half is templates/parts/gtm-body.php. It is included
 * once, at the top of templates/joqHeader.php, because every page calls the
 * header within a few lines of its own <body> tag.
 */
?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '<?php echo esc_js( JOQ_GTM_ID ); ?>');

    </script>
    <!-- End Google Tag Manager -->
