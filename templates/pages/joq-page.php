<?php
/**
 * Static page shell for /faqe/{slug}.html.
 *
 * Body copy comes from a WordPress Page with the same slug when one exists, so
 * an editor can take a page over without a code change; otherwise from the
 * shipped file in templates/pages/content/. An unknown slug is a 404, not a
 * blank page.
 */

$joq_slug = sanitize_title( get_query_var( 'joq_page' ) );

$joq_pages = array(
    'rreth-nesh'             => array( 'Rreth nesh',              'Kush jemi dhe pse e b&euml;jm&euml; k&euml;t&euml; pun&euml;.' ),
    'kontakto'               => array( 'Kontakto',                'Na shkruaj &mdash; p&euml;rgjigjemi sa m&euml; shpejt.' ),
    'puno-me-ne'             => array( 'Puno me ne',              'Vende t&euml; lira dhe bashk&euml;punime.' ),
    'reklamo'                => array( 'Reklamo',                 'Promovo biznesin t&euml;nd te audienca m&euml; e madhe n&euml; Shqip&euml;ri.' ),
    'kushtet-e-perdorimit'   => array( 'Kushtet e p&euml;rdorimit', 'Rregullat p&euml;r p&euml;rdorimin e JOQ Albania.' ),
    'politika-e-privatesise' => array( 'Politika e privat&euml;sis&euml;', 'Si i trajtojm&euml; t&euml; dh&euml;nat e tua.' ),
    'te-dhenat'              => array( 'T&euml; dh&euml;nat', 'Si i mbledhim dhe i ruajm&euml; t&euml; dh&euml;nat.' ),
);

$joq_wp_page   = get_page_by_path( $joq_slug );
$joq_body_file = get_template_directory() . '/templates/pages/content/' . $joq_slug . '.php';
$joq_has_file  = $joq_slug && file_exists( $joq_body_file );

if ( ! $joq_has_file && ! $joq_wp_page ) {
    status_header( 404 );
    include get_template_directory() . '/404.php';
    return;
}

$joq_title = isset( $joq_pages[ $joq_slug ] ) ? $joq_pages[ $joq_slug ][0] : ( $joq_wp_page ? get_the_title( $joq_wp_page ) : '' );
$joq_sub   = isset( $joq_pages[ $joq_slug ] ) ? $joq_pages[ $joq_slug ][1] : '';

/* Buffered for the disk cache, the way every other template on this site is.
   Skipped for logged-in editors so a preview is never written out as the
   published page. */
$joq_cache = function_exists( 'gliterin_optimizer_legacy_file_put_contents' ) && ! is_user_logged_in();
if ( $joq_cache ) {
    ob_start();
}

$joq_theme_uri = '/wp-content/themes/joq';
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="sq-AL">
<head>
    <?php get_template_part( 'templates/parts/gtm-head' ); ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo wp_strip_all_tags( $joq_title ); ?> &mdash; JOQ Albania</title>
    <meta name="description" content="<?php echo esc_attr( wp_strip_all_tags( $joq_sub ) ); ?>" />
    <link rel="canonical" href="https://joq-albania.com/faqe/<?php echo $joq_slug; ?>.html" />
    <?php echo joq_social_meta( array(
        'title'       => wp_strip_all_tags( $joq_title ) . ' - JOQ Albania',
        'description' => wp_strip_all_tags( $joq_sub ),
        'url'         => 'https://joq-albania.com/faqe/' . $joq_slug . '.html',
    ) ); ?>

    <link rel="icon" href="<?php echo $joq_theme_uri; ?>/assets/images/icons/icon.png" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v=1.02" type="text/css" />
    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="<?php echo $joq_theme_uri; ?>/assets/css/joq-design-system.css?v=6.1" type="text/css" />
</head>

<body>

<?php get_template_part( 'templates/joqHeader' ); ?>

<main class="joq-main" id="joq-main">
    <article class="joq-static">
        <h1 class="joq-static__title"><?php echo $joq_title; ?></h1>
        <?php if ( $joq_sub ) : ?>
        <p class="joq-static__subtitle"><?php echo $joq_sub; ?></p>
        <?php endif; ?>

        <div class="joq-static__content">
            <?php
            if ( $joq_wp_page && trim( $joq_wp_page->post_content ) !== '' ) {
                echo apply_filters( 'the_content', $joq_wp_page->post_content );
            } else {
                include $joq_body_file;
            }
            ?>
        </div>
    </article>
</main>

<?php get_template_part( 'templates/joqFooter' ); ?>

<script src="<?php echo $joq_theme_uri; ?>/assets/js/joq-design-system.js?v=3.8"></script>

</body>
</html>
<?php
if ( $joq_cache ) {
    $content = ob_get_contents();
    ob_end_clean();
    gliterin_optimizer_legacy_file_put_contents( '/var/www/html/joq.al/wordpress/cachedWeb/faqe/' . $joq_slug . '.html', $content );
    gliterin_optimizer_legacy_file_put_contents( '/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/faqe/' . $joq_slug . '.html', $content );
}
