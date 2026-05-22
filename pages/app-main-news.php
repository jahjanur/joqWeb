<?php 
/* 
    Template Name: APP Main News
*/


print_r(1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



echo "<pre>";



//delete all content betweeen strings

function delete_all_between($beginning, $end, $string) {
  $beginningPos = strpos($string, $beginning);

  $endPos = strpos($string, $end);
 

  if ($beginningPos === false || $endPos === false) {
    return $string;
  }



  $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);

  if(strpos($textToDelete, 'twitter') !== false) {
  	echo "true";
  }


  return delete_all_between($beginning, $end, str_replace($textToDelete, '', $string)); 

   
}



//replace special chars for content

function replace_special_characters($content){

  $old = ["&lt;",  "&gt;", "&#8221;", "&#8243;", "&#8220;","&#8230;", "&#8216;", "&#8217;", "&nbsp;", "&amp;", "<p>", "</p>", "<h6>", "</h6>", "http://new20.joq.al/cachedWeb/imagesNew/", "https://newjoq.joq.al/cachedWeb/imagesNew/", "http://admin.joq.al/cachedWeb/imagesNew/", "https://joq-albania.com/imagesNew", "&#xA;", "&#x201d;", "&#x201c;", "&#8211;", "https://static.joq-albania.com/imagesNew/"];

  $new   = ['<', '>', '"', '"', '"', '...', '\'', '\'', ' ','&', '<p>', '</p>', '<h6>', '</h6>', 'https://joq.al/imagesNew/', 'https://static.qypandej.com/imagesNew/', 'https://static.qypandej.com/imagesNew/', 'https://static.qypandej.com/imagesNew', "<hr> </hr>", "\"", "\"", "-", "https://static.qypandej.com/imagesNew/"];

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









if( !$_GET['post_id'] && !is_numeric($_GET['post_id']) ) {
    return;
}



$post_id = $_GET['post_id'];

// Takes raw data from the request
$mainJson = file_get_contents('https://api.qypandej.com/app/main.json');

// Converts it into a PHP object
$main = json_decode($mainJson);

$thetest = new stdClass();


//last News
$cat_result = array();
$last_query = new WP_query('type=post&post_status=publish&posts_per_page=10&order=DESC');
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
        $thePost->c = $content;
    	$thePost->gallery = $gallery;

   $thetest->{$thePost->id}=$thePost;

    endwhile; 
    wp_reset_postdata();
endif; 



 if(is_object($thetest) && count(get_object_vars($thetest)) === 10) {
  $main->last = $thetest;
}



//each category by id
$myCategory = get_the_category($post_id);


foreach ($myCategory as $cat) {
print_r($cat->term_id);
echo "    ";
    $thetest = new stdClass();
    $cat_result = array();

    $cat_query = new WP_query('type=post&post_status=publish&cat='.$cat->term_id.'&posts_per_page=10&orderby=date&order=DESC');
    if ( $cat_query->have_posts() ) : 
         while ( $cat_query->have_posts() ) : $cat_query->the_post(); 


            $news_categories = array();
            $loricat = get_the_category( get_the_ID() );


            foreach ($loricat as $key => $val) {

                array_push($news_categories, $val->name);

                
            }


      			$content_post = get_post(get_the_ID());
      			$c = apply_filters('the_content', $content_post->post_content);
      	   $content = replace_special_characters($c);


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


            $thePost = new stdClass();
            $thePost->id = get_the_ID();
            $thePost->title = my_the_content_filter_app(get_the_title());
            $thePost->category = $news_categories;
            $thePost->image = fix_post_thumbnail_app(get_the_post_thumbnail_url( get_the_ID(),'img2' ));;
            $thePost->author = get_the_author_meta('first_name'). " ". get_the_author_meta('last_name');
            $thePost->date = get_the_time('Y-m-d H:i' );
            $thePost->link = "https://joq-albania.com/artikull/". get_the_ID() .".html";
            $thePost->content = convertContentToJson($content);
            $thePost->c = $content;
            $thePost->gallery = $gallery;
            $thetest->{$thePost->id}=$thePost;      

         endwhile; 
        wp_reset_postdata();
    endif; 

    
    if(is_object($thetest) && count(get_object_vars($thetest)) === 10) {
        $main->{$cat->cat_ID} = $thetest;
    }
   

//$main->{$cat->cat_ID} = $thetest;

}




//top news
$hits_json = file_get_contents('https://dynamic.joqalbania.com/getStats.php?code=123');
$hits_obj = json_decode($hits_json);



$top_news_clicks = (array) $hits_obj;



$finalArr = array();


foreach ($hits_obj as $key => $value) {
    array_push($finalArr, $key);
}



$thetest = new stdClass();

$args = array(
    'post__in' => $finalArr,
    'posts_per_page' => 15,
    'orderby' => 'post__in'
);

$top_news = array();

$posts = get_posts($args);


foreach ($posts as $p) :

   $thisCategory = get_the_category( $p->ID );


   $news_categories = array();


   foreach ($thisCategory as $key => $val) {


        array_push($news_categories, $val->name);
  

	      $content_post = get_post($p->ID);

      
	      $content_from_wp = apply_filters('the_content', $content_post->post_content);


        $newContent = replace_special_characters($content_from_wp);


        // //get field fotogalery, and replace links

        $gallery =get_field('fotogaleri-am', $p->ID);


        if($gallery){
            
            for ($i=0; $i < count($gallery); $i++) { 

                
                $gallery[$i]['url'] = replace_special_characters( $gallery[$i]['url']);
                $gallery[$i]['icon'] = replace_special_characters( $gallery[$i]['icon']);
                $gallery[$i]['sizes']['img2'] = replace_special_characters( $gallery[$i]['sizes']['img2']);
                $gallery[$i]['sizes']['img1'] = replace_special_characters( $gallery[$i]['sizes']['img1']);
                $gallery[$i]['sizes']['thumbnail'] = replace_special_characters( $gallery[$i]['sizes']['thumbnail']);
                $gallery[$i]['sizes']['medium'] = replace_special_characters($gallery[$i]['sizes']['medium']);
                $gallery[$i]['sizes']['large'] = replace_special_characters($gallery[$i]['sizes']['large']);

            }

        }





         $thePost = new stdClass();
         $thePost->id = $p->ID;
         $thePost->title = replace_special_characters($p->post_title);
         $thePost->category = $news_categories;
         $thePost->image = fix_post_thumbnail_app(get_the_post_thumbnail_url( $p->ID,'img2' ));
         $thePost->author = get_author_name( $p->post_author );
         $thePost->date = $p->post_date;
         $thePost->link = "https://joq-albania.com/artikull/". $p->ID .".html";
         $thePost->content =  convertContentToJson($newContent);
         $thePost->gallery = $gallery;
         $thePost->clicks = $top_news_clicks[$p->ID];
         array_push($top_news, $thePost);

         $thetest->{$thePost->id}=$thePost;

        if(is_object($thetest) && count(get_object_vars($thetest)) === 10) {
            $main->top_news = $thetest;
        }
        //$main->top_news = $thetest;

}

endforeach;


// $categories = get_categories();


// $all_cat_by_id = array();

// foreach($categories as $category) {

//     $id_name = new stdClass();
//     $id_name->slug = $category->slug;
//     $id_name->name = $category->name;
//     $id_name->id = $category->term_id;

//     array_push($all_cat_by_id, $id_name);
        

// }


// $main->allCategories = $all_cat_by_id;


$banners = new stdClass();
    $banners->st = "205"; //siper titullit
    $banners->pt = "205"; //posht titulit
    $banners->fl = "1"; //fund lajmit
    $banners->pd = "105"; //posht dates


$main->bh = $banners;


$fp = fopen('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/app/main.json', 'w');
fwrite($fp, json_encode($main));
fclose($fp);





?>