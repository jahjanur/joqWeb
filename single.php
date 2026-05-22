

<?php 

global $post;

$ID = $post->ID;

while( have_posts() ): the_post(); 
	echo get_template_part( 'templates/newSingle' );
endwhile;

// if ($ID == '937568') {

// 	while( have_posts() ): the_post(); 
// 		echo get_template_part( 'templates/newSingle' );
// 	endwhile;


// } else {


//    get_header();


// 	while( have_posts() ): the_post(); 
// 		echo get_template_part( 'templates/templatesingle' ); 
// 	endwhile;

// 	get_footer();


// }

?>