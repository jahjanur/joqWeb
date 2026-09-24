<?php
/**
 * Google Tag Manager — the <noscript> half.
 *
 * Included once, at the top of templates/joqHeader.php. Every page type calls
 * the header within a few lines of its own <body> tag, so one include covers
 * home, article, category, the static pages, Live, search and the 404 without
 * any page risking two copies.
 *
 * This half never existed in the theme before — not even on the three pages
 * that carried the <head> script. It is what measures readers with JavaScript
 * disabled or blocked.
 */
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo rawurlencode( JOQ_GTM_ID ); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
