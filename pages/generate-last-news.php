<?php
/* 
    Template Name: Generate Last News
*/



//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//start cache system

?>




<?php

				

	$generateLastNewsSys = 1;

	// $args = array(
	//     'post_type' => 'post',
	//     'post_status' => 'publish',
	//     'posts_per_page' => '-1',
	//     'date_query' => array(
	//         array(
	//             'after'     => $_GET['start'],
	// 			'before'    => $_GET['end'],
	//             'inclusive' => true,
	//         ),
	//     )
	// );
	// $lastPosts = new WP_query($args);
	

	$lastPosts = new WP_query('type=post&post_status=publish&posts_per_page=1000&order=DESC');

	while( $lastPosts->have_posts() ): $lastPosts->the_post();


	ob_start();

	
	get_template_part( 'templates/newSingle' );



endwhile; 
wp_reset_postdata();


// 	 get_template_part( './templates/theHeader' ); 

// 	 get_template_part( './templates/templatesingle' ); 

// 	 get_template_part( './templates/theFooter' ); 




 

// $content = ob_get_contents();
// ob_end_clean();


// // Get the content that is in the buffer and put it in your file 
// file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/artikull/'.get_the_ID().'.html',  $content);


// // JOQALBANIA // 
// $fbpage = '/'.preg_quote('167746426599800', '/').'/';
// $domain = '/'.preg_quote('https://joq.al/', '/').'/';
// $content2 = preg_replace($domain, 'https://joq-albania.com/', $content, 2);
// $content2 = preg_replace($fbpage, '1413297348940786', $content2);
// file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/artikull/'.get_the_ID().'.html',  $content2);



// // JETAOSHQEF-CO //
// $fbpage2 = '/'.preg_quote('167746426599800', '/').'/';
// $domain2 = '/'.preg_quote('https://joq.al/', '/').'/';
// $content3 = preg_replace($domain2, 'https://jetaoshqef.co/', $content, 2);
// $content3 = preg_replace($fbpage2, '223536081352906', $content3);
// file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/artikull/'.get_the_ID().'.html',  $content3);


// endwhile; 
// wp_reset_postdata();




?>
