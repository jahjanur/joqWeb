<?php

/*
    Template Name: Load More Category
*/


/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

//start cache system

return;
  // header('Access-Control-Allow-Origin: *');
?>




<?php

/*

if ( ((!$_GET['category'] || !ctype_alpha($_GET['category'])) &&  $_GET['category'] !== 'si-te' &&  $_GET['category'] !== 'hallet-e-popullit' &&  $_GET['category'] !== 'vec-e-jona') || (!$_GET['limit'] || !ctype_digit($_GET['limit'])) || (!$_GET['offset'] || !ctype_digit($_GET['offset'])) )  {
	return;
}

 $resultArr = array();


$lastPosts = new WP_query('type=post&posts_per_page='.$_GET['limit'].'&category_name='.$_GET['category'].'&offset='.(int)$_GET['offset']);
while( $lastPosts->have_posts() ): $lastPosts->the_post();

  	$myObj = new stdClass;
  	$myObj->title = $post->post_title;
  	$myObj->post_date = get_the_date( 'd.m.Y, H:i' );//$post->post_date;
  	$myObj->image = fix_photogallery_image(get_the_post_thumbnail_url( $post->ID, 'img2' ));
  	$myObj->link = get_permalink();
  	$myObj->author_name = get_the_author_meta('first_name');
  	$myObj->author_lastname = get_the_author_meta('last_name');

  	array_push($resultArr, $myObj);

endwhile; wp_reset_postdata();




$myJSON = json_encode($resultArr);

echo $myJSON;		
*/


?>
