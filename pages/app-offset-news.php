<?php

/*
    Template Name: App Offset News
*/


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);






if( !$_GET['offset'] && !$_GET['cat_id'] && !$_GET['nr_news']) {
    return;
}



// replace special chars for content

function replace_special_characters($content){

  $old = ["&lt;",  "&gt;", "&#8221;", "&#8243;", "&#8220;","&#8230;", "&#8216;", "&#8217;", "&nbsp;", "&amp;", "<p>", "</p>", "<h6>", "</h6>", "http://new20.joq.al/cachedWeb/imagesNew/", "https://newjoq.joq.al/cachedWeb/imagesNew/", "http://admin.joq.al/cachedWeb/imagesNew/", "https://joq-albania.com/imagesNew", "&#xA;", "&#x201d;", "&#x201c;", "&#8211;"];

  $new   = ['<', '>', '"', '"', '"', '...', '\'', '\'', ' ','&', '<p>', '</p>', '<h6>', '</h6>', 'https://joq.al/imagesNew/', 'https://joq.al/imagesNew/', 'https://static.qypandej.com/imagesNew/', 'https://static.qypandej.com/imagesNew', "<hr> </hr>", "\"", "\"", "-"];

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







if( $_GET['cat_id']=== "last" && $_GET['nr_news']){


$theLastNews = new stdClass();
$main = new stdClass();




//last News
$cat_result = array();
$nr_news = $_GET['nr_news'];

if(!$_GET['offset']){
	$last_query = new WP_query('type=post&post_status=publish&category__not_in=63551&posts_per_page='.$nr_news.'&order=DESC');
} elseif($_GET['offset']) {
    $offset = $_GET['offset'];
	$last_query = new WP_query('type=post&post_status=publish&category__not_in=63551&posts_per_page='.$nr_news.'&order=DESC&offset='.$offset);

}




$last_result = array();

if ( $last_query->have_posts() ) : 
    while ( $last_query->have_posts() ) : $last_query->the_post(); 


        $news_categories = array();
        $loricat = get_the_category( get_the_ID() );


        foreach ($loricat as $key => $val) {

            array_push($news_categories, $val->name);
 
        }

			 $gallery =get_field('fotogaleri-am');

			if($gallery){
				
				for ($i=0; $i < count($gallery); $i++) { 
					
					$gallery[$i]['url'] = my_the_content_filter_app($gallery[$i]['url']);
					$gallery[$i]['icon'] = my_the_content_filter_app($gallery[$i]['icon']);
					$gallery[$i]['sizes']['img2'] = my_the_content_filter_app($gallery[$i]['sizes']['img2']);
					$gallery[$i]['sizes']['img1'] = my_the_content_filter_app($gallery[$i]['sizes']['img1']);
					$gallery[$i]['sizes']['thumbnail'] = my_the_content_filter_app($gallery[$i]['sizes']['thumbnail']);
					$gallery[$i]['sizes']['medium'] = my_the_content_filter_app($gallery[$i]['sizes']['medium']);
					$gallery[$i]['sizes']['large'] = my_the_content_filter_app($gallery[$i]['sizes']['large']);

				}

			}
       
		
       
  		$content_post = get_post(get_the_ID());
  		$c = apply_filters('the_content', $content_post->post_content);
      $content = replace_special_characters($c);


    	$thePost = new stdClass();
    	$thePost->id = get_the_ID();
    	$thePost->title = my_the_content_filter_app(get_the_title());
    	$thePost->category = $news_categories;
    	$thePost->image = fix_post_thumbnail_app(get_the_post_thumbnail_url( get_the_ID(),'full' ));;
    	$thePost->author = get_the_author_meta('first_name'). " ". get_the_author_meta('last_name');
    	$thePost->date = get_the_time('Y-m-d H:i' );
    	$thePost->link = "https://joq-albania.com/artikull/". get_the_ID() .".html";
    	$thePost->content = convertContentToJson($content);
       // $thePost->c = $content;
    	$thePost->gallery = $gallery;

    //array_push($last_result, $thePost);

    $theLastNews->{$thePost->id}=$thePost;

    endwhile; 
    // print_r($theLastNews);
    wp_reset_postdata();

    $main->last = $theLastNews;
  
  echo json_encode($main);

 else:
 endif;
 

 } else if  ( $_GET['nr_news']  && is_numeric($_GET['cat_id']) && $_GET['cat_id']!="last") {




$theCategoryNews = new stdClass();
$news = new stdClass();
   


//category News
$cat_result = array();

$cat_id = $_GET['cat_id'];
$nr_news = $_GET['nr_news'];

if(!$_GET['offset']){
	
	$last_query = new WP_query('type=post&post_status=publish&category__not_in=63551&cat='.$cat_id.'&posts_per_page='.$nr_news.'&order=DESC');
} elseif($_GET['offset']) {
    $offset = $_GET['offset'];
	$last_query = new WP_query('type=post&post_status=publish&category__not_in=63551&cat='.$cat_id.'&posts_per_page='.$nr_news.'&order=DESC&offset='.$offset);

}




if ( $last_query->have_posts() ) : 
    while ( $last_query->have_posts() ) : $last_query->the_post(); 


        $news_categories = array();
        $loricat = get_the_category( get_the_ID() );


        foreach ($loricat as $key => $val) {

            array_push($news_categories, $val->name);
 
        }

             $gallery =get_field('fotogaleri-am');

            if($gallery){
                
                for ($i=0; $i < count($gallery); $i++) { 
                    
                    $gallery[$i]['url'] = my_the_content_filter_app($gallery[$i]['url']);
                    $gallery[$i]['icon'] = my_the_content_filter_app($gallery[$i]['icon']);
                    $gallery[$i]['sizes']['img2'] = my_the_content_filter_app($gallery[$i]['sizes']['img2']);
                    $gallery[$i]['sizes']['img1'] = my_the_content_filter_app($gallery[$i]['sizes']['img1']);
                    $gallery[$i]['sizes']['thumbnail'] = my_the_content_filter_app($gallery[$i]['sizes']['thumbnail']);
                    $gallery[$i]['sizes']['medium'] = my_the_content_filter_app($gallery[$i]['sizes']['medium']);
                    $gallery[$i]['sizes']['large'] = my_the_content_filter_app($gallery[$i]['sizes']['large']);

                }

            }
       
        
       
        $content_post = get_post(get_the_ID());
        $c = apply_filters('the_content', $content_post->post_content);
        $content = replace_special_characters($c);


        $thePost = new stdClass();
        $thePost->id = get_the_ID();
        $thePost->title = my_the_content_filter_app(get_the_title());
        $thePost->category = $news_categories;
        $thePost->image = fix_post_thumbnail_app(get_the_post_thumbnail_url( get_the_ID(),'full' ));;
        $thePost->author = get_the_author_meta('first_name'). " ". get_the_author_meta('last_name');
        $thePost->date = get_the_time('Y-m-d H:i' );
        $thePost->link = "https://joq-albania.com/artikull/". get_the_ID() .".html";
        $thePost->content = convertContentToJson($content);
       // $thePost->c = $content;
        $thePost->gallery = $gallery;

        //array_push($cat_result, $thePost);

    $theCategoryNews->{$thePost->id}=$thePost;

    endwhile; 
    // print_r($theLastNews);
    wp_reset_postdata();

    $news->{$cat_id} = $theCategoryNews;
   
 
 echo json_encode($news);

//echo "grisjana";

 else:
 endif;

}


?>