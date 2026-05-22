<?php
/* 
    Template Name: Delete Post
*/

/*

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/




if( !$_GET['post_id'] && !is_numeric($_GET['post_id']) )  {
	return;
}




$post_id = $_GET['post_id'];


unlink("/var/www/html/joq.al/wordpress/cachedWeb/artikull/" . $post_id . '.html');
unlink("/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/artikull/" . $post_id . '.html');
unlink("/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/artikull/" . $post_id . '.html');



/*
$file = "/var/www/html/joq.al/wordpress/cachedWeb/artikull/" . $_GET['post_id'] . '.html';

if (!unlink($file)) {

  	//echo ("Error deleting $file");



} else {

  	//echo ("Deleted $file");

  	$args = array(
	    'timeout'     => 1,
	    'redirection' => 5,
	    'httpversion' => '1.0',
	    'blocking'    => false
	); 


	//homepage
	wp_safe_remote_get("https://admin.joq.al", $args);


	//generate categories
	$postCat = get_the_category($post_id);

	foreach ($postCat as $cat) {

		//category 
		wp_safe_remote_get("https://admin.joq.al/kategori/" . $cat->slug, $args);

		//menu dropdown
		wp_safe_remote_get("https://admin.joq.al/menu-dropdown?category=" . $cat->slug, $args);
		
	}

	//footer last 4 posts
	wp_safe_remote_get("https://admin.joq.al/last-four-news", $args);


}

*/