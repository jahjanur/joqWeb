<?php
/**
 * 404.
 *
 * Without this file WordPress falls back to index.php for anything it cannot
 * resolve — and index.php is the homepage. A mistyped or stale category URL
 * then answered with the whole front page, every category on it, under a 404
 * status: the visitor has no idea they are lost and search engines index the
 * homepage under the broken address.
 *
 * Deliberately not wrapped in the ob_start()/gliterin_optimizer... cache
 * writer the other templates use: a 404 must not be written to disk and served
 * as a real page afterwards.
 */

$joq_theme_uri = '/wp-content/themes/joq';

/* Something to click rather than a dead end. */
$joq_404_latest = new WP_Query( array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
) );

$joq_404_cats = array(
    array( 'Kosova',               'kosova' ),
    array( 'Maqedoni',             'maqedoni' ),
    array( 'Sport',                'sport' ),
    array( 'Ve&ccedil; e jona',    'vec-e-jona' ),
    array( 'Arg&euml;tim',         'argetim' ),
    array( 'Teknologji',           'teknologji' ),
);
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="sq-AL">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, follow" />
    <title>Faqja nuk u gjet &mdash; JOQ Albania</title>

    <link rel="icon" href="<?php echo $joq_theme_uri; ?>/assets/images/icons/icon.png" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v=1.02" type="text/css" />
    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="<?php echo $joq_theme_uri; ?>/assets/css/joq-design-system.css?v=6.0" type="text/css" />
</head>

<body>

<?php get_template_part( 'templates/joqHeader' ); ?>

<main class="joq-main" id="joq-main">

    <section class="joq-404">
        <div class="joq-404__code">404</div>
        <h1 class="joq-404__title">Kjo faqe nuk u gjet</h1>
        <p class="joq-404__text">
            Lidhja q&euml; ndoq&euml;t mund t&euml; jet&euml; e vjet&euml;r, e shkruar gabim,
            ose artikulli mund t&euml; jet&euml; hequr.
        </p>
        <div class="joq-404__actions">
            <a class="joq-404__btn" href="/">Kthehu n&euml; faqen kryesore</a>
        </div>

        <div class="joq-404__cats">
            <?php foreach ( $joq_404_cats as $joq_c ) :
              $joq_c_icon = joq_cat_icon_img( $joq_c[1], 'joq-404__cat-icon' );
              $joq_c_href = ( in_array( $joq_c[1], array( 'kosova', 'maqedoni', 'english' ), true ) )
                  ? '/' . $joq_c[1] . '/index.html'
                  : '/kategori/' . $joq_c[1] . '.html';
            ?>
            <a class="joq-404__cat" href="<?php echo $joq_c_href; ?>"><?php echo $joq_c_icon; ?><?php echo $joq_c[0]; ?></a>
            <?php endforeach; ?>
        </div>
    </section>

    <?php if ( $joq_404_latest->have_posts() ) : ?>
    <section class="joq-section">
        <div class="joq-section__header">
            <h2 class="joq-section__title">Lajmet e fundit</h2>
            <a class="joq-section__more" href="/kategori/lajme.html">Shiko t&euml; gjitha &rarr;</a>
        </div>
        <div class="joq-stories">
            <?php foreach ( $joq_404_latest->posts as $joq_p ) :
              $joq_p_cat = get_the_category( $joq_p->ID );
              $joq_p_img = fix_post_thumbnail( get_the_post_thumbnail_url( $joq_p->ID, 'img2' ) );
            ?>
            <article class="joq-story">
                <a href="<?php echo get_permalink( $joq_p->ID ); ?>">
                    <div class="joq-story__body">
                        <?php if ( ! empty( $joq_p_cat ) ) : ?>
                        <span class="joq-story__kicker">
                            <?php echo joq_cat_icon_img( $joq_p_cat[0]->slug, 'joq-story__kicker-icon' ); ?><?php echo $joq_p_cat[0]->cat_name; ?>
                        </span>
                        <?php endif; ?>
                        <h3 class="joq-story__title"><?php echo get_the_title( $joq_p->ID ); ?></h3>
                        <p class="joq-story__excerpt"><?php echo wp_trim_words( wp_strip_all_tags( $joq_p->post_content ), 26, '...' ); ?></p>
                        <div class="joq-story__meta">
                            <time datetime="<?php echo get_the_date( 'c', $joq_p->ID ); ?>"><?php echo joq_time_ago( $joq_p ); ?></time>
                            &middot; <?php echo joq_read_time( $joq_p ); ?> min lexim
                        </div>
                    </div>
                    <div class="joq-story__media">
                        <?php if ( $joq_p_img ) : ?>
                        <img src="<?php echo $joq_p_img; ?>" alt="" width="527" height="375" loading="lazy" decoding="async" />
                        <?php endif; ?>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php get_template_part( 'templates/joqFooter' ); ?>

<script src="<?php echo $joq_theme_uri; ?>/assets/js/joq-design-system.js?v=3.8"></script>

</body>
</html>
