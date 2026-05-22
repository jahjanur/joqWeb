<?php
/* 
    Template Name: Generate News By Year
*/



// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

//start cache system

/*if(!$_GET['g_year']) {
	return;
}*/

if(!$_GET['start']) {
	return;
}

if(!$_GET['end']) {
	return;
}


$args = array(
    'date_query' => array(
        array(
            'after'     => sanitize_text_field($_GET['start']),
            'before'    => sanitize_text_field($_GET['end']),
            'inclusive' => true,
        ),
    ),
    'type' => 'post',
    'posts_per_page' => '-1',
    'order' => 'DESC',
    'post_status' => 'publish'
);
$lastPosts = new WP_Query( $args );

//$lastPosts = new WP_query('type=post&post_status=publish&YEAR(post_date)='.$_GET['g_year'].'&limit=10&order=DESC');
while( $lastPosts->have_posts() ): $lastPosts->the_post();


    ob_start();

    
    get_template_part( 'templates/newSingle' );




endwhile; 
wp_reset_postdata();




?>



