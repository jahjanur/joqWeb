<?php



$domainToRequest = 'https://8wfrttgeecxwtmuenew.joq-albania.com/';


function setup_settings(){
    
   
    register_nav_menus( array(
	    'main' => 'Main Menu',
	    'footer' => 'Footer menu',
    ));
    
    add_theme_support('post-formats', array( 'image', 'video' ));
    add_theme_support('post-thumbnails');

	add_filter( 'allow_password_reset', 'disable_reset_lost_password');

	// remove wordpress update
	remove_action( 'load-update-core.php', 'wp_update_plugins' );
	add_filter( 'pre_site_transient_update_plugins', function( $a ) { return null; } );

	add_filter('pre_site_transient_update_core', 'remove_core_updates');
	add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
	add_filter('pre_site_transient_update_themes', 'remove_core_updates');

	add_filter('show_admin_bar', '__return_false');



}

add_action('init', 'setup_settings');

add_image_size('featured', 1830, 640, true);
add_image_size('img1', 335, 213, true);
add_image_size('img2', 527, 375, true);


function disable_reset_lost_password(){
   return false;
}




$generateLastNewsSys = 0;
$ajaxLoad = 0;







function remove_core_updates(){

    global $wp_version;
    return (object) array(
        'last_checked' => time(),
        'version_checked' => $wp_version,
        );
}







// Autosave, do nothing
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
// Return if it's a post revision
if ( false !== wp_is_post_revision( $post_id ) )
        return;



//modify url, make it absolute
function append_query_string( $url, $post, $leavename = false ) {

/*
	ob_start();

	print_r($url);
	print_r($post);
	print_r($leave);

	$content = ob_get_contents();

	// Get the content that is in the buffer and put it in your file //
	file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/test.html',  $content);

*/


	$finalUrl = $url;

	if ( $post->post_type == 'post' ) {
		$parse = parse_url($url);
		$path = isset($parse['path']) ? $parse['path'] : '/artikull/' . $post->ID . '.html';

		if ( is_admin() ) {
			$finalUrl = 'https://joq-albania.com' . $path;
		} else {
			$finalUrl = $path;
		}

	}


	if ( is_feed() ){

		$parse = parse_url($url);
		// $finalUrl = 'https://joq.al' . $parse['path'];
		$finalUrl = 'https://joq-albania.com' . $parse['path'];

	}




	return $finalUrl;
}

add_filter( 'post_link', 'append_query_string', 10, 3 );



//this function make the updated only one, not twice
function onPostUpdate( $post_id ) {


	$domainToRequest = 'https://8wfrttgeecxwtmuenew.joq-albania.com/';


	global $flag;

	
    if($flag == 0){

    	// file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/log19.txt',  print_r($flag)." = flag => log2, ", FILE_APPEND);

		$args = array(
			'timeout'     => 1,
			'redirection' => 5,
			'blocking'    => false,
			'sslverify' => false
		); 
		wp_safe_remote_get($domainToRequest."new-post-chain?post_id=".$post_id, $args);

		//wp_safe_remote_get("https://demo-page.abingmedia.com/joq/postchain.php?post_id=".$post_id, $args);

		
    }
	$flag = 1;
	

	// wp_safe_remote_get($domainToRequest."update-ia");
	
	//file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/log333-2.txt',  "log3 ".$post_id."  ");

}
add_action('edit_post', 'onPostUpdate');


function onPostDelete( $post_id ) {

	$domainToRequest = 'https://8wfrttgeecxwtmuenew.joq-albania.com/';

    global $flag;
    if($flag == 0) {
                
        $args = array(
		    'timeout'     => 1,
		    'redirection' => 5,
		    'httpversion' => '1.0',
		    'blocking'    => true,
			'sslverify' => false
		); 

    	wp_safe_remote_get($domainToRequest."delete-post?post_id=" . $post_id, $args);


    }
    $flag = 1;

}
add_action('wp_trash_post', 'onPostDelete');




function post_private( $new_status, $old_status, $post ) {

	$domainToRequest = 'https://8wfrttgeecxwtmuenew.joq-albania.com/';

	global $flag;

    if ( $new_status == 'private' ) {

    if($flag == 0) {
                
        $args = array(
		    'timeout'     => 1,
		    'redirection' => 5,
		    'httpversion' => '1.0',
		    'blocking'    => true,
			'sslverify' => false
		); 
	                
    	wp_safe_remote_get($domainToRequest."delete-post?post_id=" . $post->ID, $args);


    }
    $flag = 1;


   }
}
add_action( 'transition_post_status', 'post_private', 10, 3 );


function my_the_content_filter($content) {

	if ($GLOBALS['post']->post_type == 'post') {
		$unwanted_array = array( '&lt;'=>'<', '&gt;'=>'>', '&#8221;' => '"', '&#8243;' => '"', '&#8220;' => '"', '&#8230;' => '...', '&#8216;'=>'\'', '&#8217;'=>'\'',
			 '&nbsp;'=> ' ',  '&amp;'=>'&', '<br />'=> '&#xA;', '/r/n'=> '&#xA;', 
			'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
			'https://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
			'https://new20.joq.al/console/../imagesNew/' => 'https://joq.al/imagesNew/',
			'http://admin.joq.al/console/../imagesNew/' => 'https://joq.al/imagesNew/', 
			'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
			// '/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/', 
			'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
			'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
			'https://joq-albania.com/imagesNew' => 'https://static.joq-albania.com/imagesNew'
		);
		$content = strtr( $content, $unwanted_array );
        
        $string = htmlentities($content, null, 'utf-8');
        $content = str_replace("&nbsp;", " ", $string);
        $content = html_entity_decode($content);
	}

    return $content;
}

add_filter( 'the_content', 'my_the_content_filter' );




add_filter( 'the_content', 'prefix_insert_post_ads' );
/**
 * Insert code for ads after second paragraph of single post content.
 *
 */
function prefix_insert_post_ads( $content ) {
	$ad_code = '<div style="margin: -10px auto 10px;"><script src="https://mediadesk.al/ad/joq/ad1.js"></script></div>';

	return prefix_insert_after_paragraph( $ad_code, 2, $content );
}

/**
 * Insert something after a specific paragraph in some content.
 *
 */
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	$count = substr_count( $content, '</p>' );
	foreach ($paragraphs as $index => $paragraph) {
		// Only add closing tag to non-empty paragraphs
		if ( trim( $paragraph ) ) {
			// Adding closing markup now, rather than at implode, means insertion
			// is outside of the paragraph markup, and not just inside of it.
			$paragraphs[$index] .= $closing_p;
		}

		// + 1 allows for considering the first paragraph as #1, not #0.
		if ( floor($count/2) == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	return implode( '', $paragraphs ); 
}






function my_the_content_filter_app($content) {

	if ($GLOBALS['post']->post_type == 'post') {
		$unwanted_array = array( '&lt;'=>'<', '&gt;'=>'>', '&#8221;' => '"', '&#8243;' => '"', '&#8220;' => '"', '&#8230;' => '...', '&#8216;'=>'\'', '&#8217;'=>'\'',
			 '&nbsp;'=> ' ',  '&amp;'=>'&', '<br />'=> '&#xA;', '/r/n'=> '&#xA;', 
			'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://static.qypandej.com/imagesNew/',
			'https://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://static.qypandej.com/imagesNew/',
			'https://new20.joq.al/console/../imagesNew/' => 'https://static.qypandej.com/imagesNew/',
			'http://admin.joq.al/console/../imagesNew/' => 'https://static.qypandej.com/imagesNew/', 
			'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://static.qypandej.com/imagesNew/',
			// '/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/', 
			'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://static.qypandej.com/imagesNew/',
			'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.qypandej.com/imagesNew/',
			'https://joq-albania.com/imagesNew' => 'https://static.qypandej.com/imagesNew'
		);
		$content = strtr( $content, $unwanted_array );
	}

    return $content;
}

add_filter( 'the_content', 'my_the_content_filter_app' );



function fix_photogallery_image($image) {

    $unwanted_array = array( 
    	'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'https://joq.al/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
        'https://joq-albania.com/imagesNew' => 'https://static.joq-albania.com/imagesNew',
        'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
        'http://new-admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
        'https://new-admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
    );
    return strtr( $image, $unwanted_array );

}

function fix_post_thumbnail($link) {

	$unwanted_array = array( 
    	'https://joqalbania.com' => 'https://static.joq-albania.com/',
        'https://joq.al/' => 'https://static.joq-albania.com/',
        'http://admin.joq.al/cachedWeb/imagesNew' => 'https://static.joq-albania.com/imagesNew',
        'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
        'http://new-admin.joq-albania.com/cachedWeb/imagesNew' => 'https://static.joq-albania.com/imagesNew',
        'https://new-admin.joq-albania.com/cachedWeb/imagesNew' => 'https://static.joq-albania.com/imagesNew',
        'https://joq-albania.com/imagesNew' => 'https://static.joq-albania.com/imagesNew'
    );
    return strtr( $link, $unwanted_array );

}


function fix_post_thumbnail_app($link) {

	$unwanted_array = array( 
    	'https://joqalbania.com' => 'https://static.qypandej.com/',
        'https://joq.al/' => 'https://static.qypandej.com/',
        'http://admin.joq.al/cachedWeb/imagesNew' => 'https://static.qypandej.com/imagesNew',
        'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.qypandej.com/imagesNew/',
        'https://joq-albania.com/imagesNew' => 'https://static.qypandej.com/imagesNew'
    );
    return strtr( $link, $unwanted_array );

}



function wp40547_filter_post_thumbnail_src( $image, $attachment_id, $size, $icon ) {

	global $ajaxLoad;
	
	if ( 'post-thumbnail' !== $size ) {
		
		if( is_home() || is_category() || is_single() || $ajaxLoad === 1 || is_feed()){

			if($image[0]){

					$parse = parse_url($image[0]);
					$image[0] = $parse['path'];

					$unwanted_array = array(
						'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
						'https://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
                            'http://new-admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
                            'https://new-admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
						'https://new20.joq.al/console/../imagesNew/' => 'https://joq.al/imagesNew/',
						'http://admin.joq.al/console/../imagesNew/' => 'https://joq.al/imagesNew/', 
						'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
						'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
						'/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
				        'https://joq.al/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
				        'https://joq-albania.com/imagesNew' => 'https://static.joq-albania.com/imagesNew',
				        'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/'

				 	);
					$image[0] = strtr( $image[0], $unwanted_array );

					return $image;
				}


		}

		return $image; 


	}

	// Set the image URL for the passed $attachment_id.
	// $image[0] = ...

	return $image;
}
add_filter( 'wp_get_attachment_image_src', 'wp40547_filter_post_thumbnail_src', 10, 4 );



 
/*


// define the the_content_rss callback 
function filter_the_content_rss( $polldaddy_link, $int ) { 
    // make filter magic happen here... 


    

		$images = get_field('fotogaleri-am');
		//print_r($images);


		if( $images ): 
		        foreach( $images as $image ): 
		           //$content .= '<figure><img src="'.wp_get_attachment_image( $image['ID'], 'full' ).'" /><figcaption>'.$image['description'].'</figcaption></figure>';
		           //$polldaddy_link = $polldaddy_link .'<img src="'.$image['url'].'" />'; 
		        	echo '<img src="'.$image['url'].'" />';
		    endforeach; 
		endif;

	



    return $polldaddy_link; 
}; 
         
// add the filter 
add_filter( 'the_content_rss', 'filter_the_content_rss', 10, 2 ); */
/*

function exclude_single_posts_home($query) {



  if ($query->is_feed() && $query->is_main_query()) {
    






  }
}

add_action('pre_get_posts', 'exclude_single_posts_home');*/




function my_custom_admin_css_inline() {
    echo '<style>
        #acf-upgrade-notice { display: none !important; }
    </style>';
}
add_action('admin_head', 'my_custom_admin_css_inline');













