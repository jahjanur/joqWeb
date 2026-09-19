<?php
/**
 * Search results — /kerko.html?s=...
 *
 * The theme had no search template, so is_search() fell through to index.php
 * and answered every search with the homepage. pages/search.php is a separate
 * JSON endpoint used by the app and the external search proxy; it is untouched.
 *
 * Deliberately not written to the disk cache: the output depends on the query.
 */

$joq_theme_uri = '/wp-content/themes/joq';
$joq_term      = get_search_query();
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="sq-AL">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, follow" />
    <title><?php echo $joq_term ? 'K&euml;rkim: ' . esc_html( $joq_term ) : 'K&euml;rko'; ?> &mdash; JOQ Albania</title>

    <link rel="icon" href="<?php echo $joq_theme_uri; ?>/assets/images/icons/icon.png" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v=1.02" type="text/css" />
    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="<?php echo $joq_theme_uri; ?>/assets/css/joq-design-system.css?v=6.1" type="text/css" />
</head>

<body>

<?php get_template_part( 'templates/joqHeader' ); ?>

<main class="joq-main" id="joq-main">
    <div class="joq-search-page">

        <div class="joq-search-page__header">
            <h1 class="joq-search-page__title">
                <?php if ( $joq_term ) : ?>
                    Rezultate p&euml;r <strong><?php echo esc_html( $joq_term ); ?></strong>
                <?php else : ?>
                    K&euml;rko lajme
                <?php endif; ?>
            </h1>

            <form class="joq-search-page__form" action="/kerko.html" method="GET" role="search">
                <label class="sr-only" for="joq-search-page-input">K&euml;rko lajme</label>
                <input class="joq-search-page__input" type="search" id="joq-search-page-input"
                       name="s" value="<?php echo esc_attr( $joq_term ); ?>"
                       placeholder="K&euml;rko dhe shtyp enter" required />
                <button class="joq-search-page__submit" type="submit">K&euml;rko</button>
            </form>
        </div>

        <?php /* An empty s= matches everything, which would answer a blank search
                 with 20 arbitrary posts. No term, no results list. */ ?>
        <?php if ( $joq_term && have_posts() ) : ?>

            <div class="joq-stories">
                <?php while ( have_posts() ) : the_post();
                    $joqCat = get_the_category();
                ?>
                <article class="joq-story">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="joq-story__body">
                            <?php if ( ! empty( $joqCat ) ) : ?>
                            <span class="joq-story__kicker">
                                <?php echo joq_cat_icon_img( $joqCat[0]->slug, 'joq-story__kicker-icon' ); ?><?php echo $joqCat[0]->cat_name; ?>
                            </span>
                            <?php endif; ?>
                            <h2 class="joq-story__title"><?php echo get_the_title(); ?></h2>
                            <p class="joq-story__excerpt"><?php echo wp_trim_words( wp_strip_all_tags( get_the_content() ), 26, '...' ); ?></p>
                            <div class="joq-story__meta">
                                <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo joq_time_ago(); ?></time>
                                &middot; <?php echo joq_read_time(); ?> min lexim
                            </div>
                        </div>
                        <div class="joq-story__media"><?php echo joq_thumb_img( get_the_ID() ); ?></div>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>

            <?php
            $joq_pagination = paginate_links( array(
                'mid_size'  => 1,
                'prev_text' => '&larr;',
                'next_text' => '&rarr;',
                'type'      => 'array',
            ) );
            ?>
            <?php if ( $joq_pagination ) : ?>
            <nav class="joq-pagination" aria-label="Faqet e rezultateve">
                <?php foreach ( $joq_pagination as $joq_link ) : ?>
                    <?php echo str_replace( array( 'page-numbers', 'joq-pagination__link current' ), array( 'joq-pagination__link', 'joq-pagination__link is-current' ), $joq_link ); ?>
                <?php endforeach; ?>
            </nav>
            <?php endif; ?>

        <?php elseif ( $joq_term ) : ?>

            <div class="joq-search-page__no-results">
                Nuk u gjet asnj&euml; rezultat p&euml;r <strong><?php echo esc_html( $joq_term ); ?></strong>.<br />
                Provo me fjal&euml; t&euml; tjera ose shiko
                <a href="/kategori/lajme.html">lajmet m&euml; t&euml; fundit</a>.
            </div>

        <?php else : ?>

            <div class="joq-search-page__no-results">
                Shkruaj nj&euml; fjal&euml; k&euml;rkimi m&euml; sip&euml;r p&euml;r t&euml; gjetur lajme.
            </div>

        <?php endif; ?>

    </div>
</main>

<?php get_template_part( 'templates/joqFooter' ); ?>

<script src="<?php echo $joq_theme_uri; ?>/assets/js/joq-design-system.js?v=3.8"></script>

</body>
</html>
