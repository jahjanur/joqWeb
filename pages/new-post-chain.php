<?php
/* 
    Template Name: New Post Chain
*/


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


$domainToRequest = 'https://8wfrttgeecxwtmuenew.joq-albania.com/';


$args = array(
    'timeout'     => 1,
    'redirection' => 5,
    'blocking'    => true,
    'sslverify' => false
); 




if( !$_GET['post_id'] && !is_numeric($_GET['post_id']) )  {
	return;
}



$post_id = $_GET['post_id'];

//article
wp_safe_remote_get($domainToRequest."artikull/".$post_id.".html", $args);
//sleep(10);


//homepage
wp_safe_remote_get($domainToRequest, $args);
//sleep(10);

//wp_safe_remote_get($domainToRequest."update-ia", $args);
//sleep(10);

wp_safe_remote_get($domainToRequest."top-news", $args);
//sleep(10);

wp_safe_remote_get($domainToRequest."top-news-post", $args);
//sleep(10);

//app main news
wp_safe_remote_get($domainToRequest."app-main-news?post_id=".$post_id, $args);
sleep(10);

//poll
wp_safe_remote_get($domainToRequest."poll", $args);
sleep(10);

//poll-popup
wp_safe_remote_get($domainToRequest."poll-popup", $args);
sleep(10);

// amp article
// wp_safe_remote_get($domainToRequest."generate-amp?post_id=".$post_id, $args);




//file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/newpost.txt',  $_GET['post_id']);

//generate categories
$postCat = get_the_category($post_id);

foreach ($postCat as $cat) {

	//category 
    wp_safe_remote_get($domainToRequest."kategori/" . $cat->slug, $args);
    sleep(10);

	//menu dropdown
    wp_safe_remote_get($domainToRequest."menu-dropdown?category=" . $cat->slug, $args);
    sleep(10);
	
}

//footer last 4 posts
wp_safe_remote_get($domainToRequest."last-four-news", $args);
sleep(10);



//clear cloudflare cache for joqalbania.com 
/*
$response = wp_remote_post( "https://api.cloudflare.com/client/v4/zones/72fd7d37b668b6f4c9412696c183548b/purge_cache", array(
    'method'      => 'POST',
    'timeout'     => 1,
    'redirection' => 5,
    'httpversion' => '1.0',
    'blocking'    => true,
    'headers'     => array('X-Auth-Email' => 'ingrid.shyti@gmail.com', 'X-Auth-Key' => 'ecac690eaf6721503b33adef0e2273ea439fe', 'Content-Type' => 'application/json'),
    'body'        => json_encode(array( 'files' => array( 'https://joqalbania.com/', 'https://joqalbania.com/artikull/'.$post_id.'.html' )  ))
    )
);
 */
 
/* 
 
if ( is_wp_error( $response ) ) {
    $error_message = $response->get_error_message();
    echo "Something went wrong: $error_message";
} else {
    echo 'Response:<pre>';
    print_r( $response );
    echo '</pre>';
}
*/


//print_r( 'https://joqalbania.com/artikull/'.$post_id.'.html' );


//generate top news
//wp_safe_remote_get("http://newjoq.joq.al/top-news", $args);

//generate top news in posts
//wp_safe_remote_get("http://newjoq.joq.al/top-news-post", $args);
