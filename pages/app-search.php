<?php

/*
    Template Name: App Search
*/

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// return;

header('Access-Control-Allow-Origin: *');





if (!$_GET['term']) {
	return;
}

//print_r($_GET['term']);




function delete_all_between($beginning, $end, $string) {
  $beginningPos = strpos($string, $beginning);

  $endPos = strpos($string, $end);
 

  if ($beginningPos === false || $endPos === false) {
    return $string;
  }



  $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);


    return delete_all_between($beginning, $end, str_replace($textToDelete, '', $string)); 

   
}


function replace_special_characters($content){

  $old = ["&lt;",  "&gt;", "&#8221;", "&#8243;", "&#8220;","&#8230;", "&#8216;", "&#8217;", "&nbsp;", "&amp;", "<p>", "</p>", "<h6>", "</h6>", "http://new20.joq.al/cachedWeb/imagesNew/", "https://newjoq.joq.al/cachedWeb/imagesNew/", "http://admin.joq.al/cachedWeb/imagesNew/", "https://joq-albania.com/imagesNew"];

  $new   = ['<', '>', '"', '"', '"', '...', '\'', '\'', ' ','&', '<p>', '</p>', '<h6>', '</h6>', 'https://joq.al/imagesNew/', 'https://joq.al/imagesNew/', 'https://static.qypandej.com/imagesNew/', 'https://static.qypandej.com/imagesNew'];

  $newPhrase = str_replace($old, $new, $content);

return $newPhrase;

}



function convertContentToJson($content){

    //return content to json with nodejs
    $domainToConvertContent = 'https://aud.boostog.net/test/wp';


    $args = array(
       'method' => 'POST',
        'headers'  => array(
            'Content-type: application/x-www-form-urlencoded'
        ),
        'sslverify' => false,
        'body' => array( 'lajmi' => $content ),
    ); 


    $result  = wp_safe_remote_post($domainToConvertContent, $args);

    $convertedContent = json_decode($result['body']);

    return $convertedContent;

}






 // pass your search string here example like this ( 's'=>'test' ) 
 $args = array('s'=> $_GET['term'], 'order'=> 'DESC', 'posts_per_page'=>get_option('posts_per_page'));


  $resultArr = array();

  $query = new WP_Query($args);

  $thetest = new stdClass();

  if( $query->have_posts()): 

    while( $query->have_posts()): $query->the_post();

      $theImage = fix_photogallery_image(get_the_post_thumbnail_url( $post->ID, 'img2' ));

      $unwanted_array = array( 
        'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'https://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'https://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'http://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
        'https://joq.al/' => 'https://static.qypandej.com/'
      );
      $theImage = strtr( $theImage, $unwanted_array );


        $news_categories = array();
        $news_categories_id = array();
        $loricat = get_the_category( $post->ID );


        foreach ($loricat as $key => $val) {
 
            array_push($news_categories, $val->name);
            array_push($news_categories_id, $val->term_id);
 
        }


      $gallery =get_field('fotogaleri-am', $post->ID);


      if($gallery){
        
        for ($i=0; $i < count($gallery); $i++) { 

          $gallery[$i]['url'] = replace_special_characters($gallery[$i]['url']);
          $gallery[$i]['icon'] = replace_special_characters($gallery[$i]['icon']);
          $gallery[$i]['sizes']['img2'] = replace_special_characters($gallery[$i]['sizes']['img2']);
          $gallery[$i]['sizes']['img1'] = replace_special_characters($gallery[$i]['sizes']['img1']);
          $gallery[$i]['sizes']['thumbnail'] = replace_special_characters($gallery[$i]['sizes']['thumbnail']);
          $gallery[$i]['sizes']['medium'] = replace_special_characters($gallery[$i]['sizes']['medium']);
          $gallery[$i]['sizes']['large'] = replace_special_characters($gallery[$i]['sizes']['large']);

        }

      }


        $content_post = get_post($post->ID);

	    $content_from_wp = apply_filters('the_content', $content_post->post_content);

 		$newContent = replace_special_characters($content_from_wp);

		$news_id = strval($post->ID);

      	$toPrint = new stdClass;

    	$myObj = new stdClass;
    	$myObj->id = $post->ID;
    	$myObj->title = $post->post_title;
    	$myObj->link = "https://joq-albania.com/artikull/". $news_id .".html";
      $myObj->category = $news_categories;
      $myObj->category_id = $news_categories_id;
    	$myObj->post_date = $post->post_date;
    	$myObj->image = $theImage;
    	$myObj->content =  convertContentToJson($newContent);
      $myObj->gallery = $gallery;

    	array_push($resultArr, $myObj);

    	 $thetest->{$myObj->id}=$myObj; 
    endwhile;  wp_reset_postdata();



    $toPrint->result = $thetest;

    echo json_encode($toPrint);
 

 else:
 endif;
 
 


?>
