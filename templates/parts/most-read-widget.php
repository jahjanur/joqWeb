<?php
/**
 * "Me te Lexuarat" sidebar widget.
 *
 * The design places this between the two 300x250 slots in the article and
 * category sidebars. Its CSS (.joq-post__widget) shipped with the port but no
 * template ever emitted the markup, so the component has never appeared.
 *
 * Server-rendered rather than fetched, like everything else here: each page is
 * written to disk once and served as a static file, so anything identical for
 * every visitor belongs in the HTML. The design repo loads it over AJAX from
 * /myAjax/top-news-post2.html; that would mean a request per reader for a list
 * that changes a few times an hour.
 *
 * Optional globals set by the caller before get_template_part():
 *   $joq_widget_cat     term id -- rank within this category instead of sitewide
 *   $joq_widget_exclude post ids to leave out (the article being read)
 */

$joq_w_cat     = isset( $GLOBALS['joq_widget_cat'] ) ? (int) $GLOBALS['joq_widget_cat'] : 0;
$joq_w_exclude = isset( $GLOBALS['joq_widget_exclude'] ) && is_array( $GLOBALS['joq_widget_exclude'] )
    ? $GLOBALS['joq_widget_exclude'] : array();

$joq_w_posts = $joq_w_cat ? joq_popular_posts_in_category( $joq_w_cat, 6 ) : array();

/* Sitewide ranking when there is no category, or when the category is too thin
   to fill the widget. */
if ( count( $joq_w_posts ) < 5 ) {
    $joq_w_ids = joq_popular_post_ids();
    if ( $joq_w_ids ) {
        $joq_w_q = new WP_Query( array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'post__in'            => $joq_w_ids,
            'orderby'             => 'post__in',
            'posts_per_page'      => 8,
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
        ) );
        $joq_w_posts = array_merge( $joq_w_posts, $joq_w_q->posts );
    }
}

/* The readership API is the source of ranking, and it can be slow or down.
   Rather than render an empty box, fall back to the most recent posts -- the
   widget is still useful, it is just ordered by time instead of reads. */
if ( count( $joq_w_posts ) < 5 ) {
    $joq_w_recent = new WP_Query( array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 8,
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    ) );
    $joq_w_posts = array_merge( $joq_w_posts, $joq_w_recent->posts );
}

/* De-duplicate (the three sources overlap), drop the excluded ids, cap at 5. */
$joq_w_seen  = array();
$joq_w_final = array();
foreach ( $joq_w_posts as $joq_w_p ) {
    if ( in_array( $joq_w_p->ID, $joq_w_exclude, true ) || isset( $joq_w_seen[ $joq_w_p->ID ] ) ) {
        continue;
    }
    $joq_w_seen[ $joq_w_p->ID ] = true;
    $joq_w_final[] = $joq_w_p;
    if ( count( $joq_w_final ) >= 5 ) {
        break;
    }
}

if ( $joq_w_final ) : ?>
<div class="joq-post__widget">
    <div class="joq-post__widget-title">M&euml; t&euml; Lexuarat</div>
    <?php foreach ( $joq_w_final as $joq_w_item ) : ?>
    <a class="joq-post__sidebar-article" href="<?php echo esc_url( get_permalink( $joq_w_item->ID ) ); ?>">
        <div class="joq-post__sidebar-img">
            <?php echo joq_thumb_img( $joq_w_item->ID, 'img2' ); ?>
        </div>
        <div class="joq-post__sidebar-body">
            <div class="joq-post__sidebar-title"><?php echo esc_html( get_the_title( $joq_w_item->ID ) ); ?></div>
            <div class="joq-post__sidebar-time">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-1px;margin-right:4px" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><?php echo joq_time_ago( $joq_w_item ); ?>
            </div>
        </div>
    </a>
    <?php endforeach; ?>
</div>
<?php endif;

unset( $GLOBALS['joq_widget_cat'], $GLOBALS['joq_widget_exclude'] );
