<?php
/**
 * Single article.
 *
 * templates/newSingle.php emits its own <head>/<body> and writes the page to
 * the disk cache, so there is no get_header()/get_footer() pair here.
 */

while ( have_posts() ) :
	the_post();
	get_template_part( 'templates/newSingle' );
endwhile;
