<?php

/*
    Template Name: Search
*/


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//start cache system

// return;

   header('Access-Control-Allow-Origin: *');
?>




<?php

//echo 1;
//echo $_GET['term'];


if (!$_GET['term']) {
	return;
}




 /*pass your search string here example like this ( 's'=>'test' ) */


 $args = array('s'=> $_GET['term'], 'order'=> 'DESC', 'posts_per_page'=>get_option('posts_per_page'));


  $resultArr = array();

  $query = new WP_Query($args);

  if( $query->have_posts()): 

  while( $query->have_posts()): $query->the_post();


  	//echo '<pre>';
  	//print_r($post);

    $theImage = fix_photogallery_image(get_the_post_thumbnail_url( $post->ID, 'img2' ));

    $unwanted_array = array( 
      'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
      'https://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
      'https://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
      'http://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
      'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
      'https://joq.al/' => 'https://static.joq-albania.com/'
    );
    $theImage = strtr( $theImage, $unwanted_array );

  	$myObj = new stdClass;
  	$myObj->title = $post->post_title;
  	$myObj->post_date = get_the_date( 'd.m.Y, H:i' );//$post->post_date;
  	$myObj->image = $theImage;
  	$myObj->link = get_permalink();

  	array_push($resultArr, $myObj);


 endwhile; wp_reset_postdata();

 	$myJSON = json_encode($resultArr);

	echo $myJSON;		

 else:
 endif;


?>
