<?php
/* 
    Template Name: Top News Post
*/


/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/



$popularPostsApi = 'https://dynamic2.joq-albania.com/search-event';
$popularData = [
    "from" => 0,
    "size" => 0,
    "query" => [
        "range" => [
            "@timestamp" => [
                "gte" => "now-1d/d",
                "lte" => "now"
            ]
        ]
    ],
    "aggs" => [
        "popular_news" => [
            "terms" => [
                "field" => "post.ID",
                "size" => 4
            ]
        ]
    ]
];

$dataString = json_encode($popularData);

$ch = curl_init($popularPostsApi);
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($dataString)
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    // echo 'Error: ' . curl_error($ch) . '<br>';
}

curl_close($ch);

// Handle the response as needed, e.g., parse JSON response
$popularPostsRawResponse = json_decode($response);









//start cache system
ob_start();
?>

<div class="intvbanner"></div><div class="modul-article-sys3"><div class="modul-title-sys3">M&euml; t&euml; lexuarat </div> 


<?php

$finalArr = array();
if (isset($popularPostsRawResponse->aggregations->popular_news->buckets) && is_array($popularPostsRawResponse->aggregations->popular_news->buckets)) {
    // Extract "key" values from the JSON data
    foreach ($popularPostsRawResponse->aggregations->popular_news->buckets as $bucket) {
        array_push($finalArr, $bucket->key);
    }
} else {
    // Handle the case where 'buckets' do not exist
    // echo "The 'buckets' property does not exist or is not an array.";
}


//$finalArr =  array('395378', '395253', '395367', '395387', '395418', '395454', '395392', '395322', '395212', '393918', '393827', '393999', '393945');


$args = array(
    'post__in' => $finalArr,
    'posts_per_page' => 5,
    'orderby' => 'post__in'
);



$ajaxLoad = 1;

$posts = get_posts($args);
foreach ($posts as $p) :

?>

<a href="<?php echo get_permalink( $p->ID ); ?>">
<div class="modul-box-sys3">
<div class="modul-photo-sys3"><img src="<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $p->ID, 'thumbnail' )) ?>"></div>
<div class="photo-text-modul-sys3"> <?php echo $p->post_title ?> </div>
</div>
</a>


<?php endforeach; ?>




</div></div>

</div>

<?php 

global $post;

$post_slug = $post->post_name;

$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/' . $post_slug . '.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/' . $post_slug . '.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/' . $post_slug . '.html',  $content);




//start cache system
ob_start();

$j = 0;
foreach ($posts as $p) :

	$j++;

	if ($j === 4) {
		?>
		<div class="mob-pc-banner-wrapper" style="margin-bottom: 20px;">
          <a href="https://aleancaetike.media/decent-invest-offer-easily/" target="_blank">
            <img style="width: 100%;" src="/b/ame/300x50/2020-27-10.gif">
          </a>
        </div>
        <?php
	}

?>

<div class="last-news-article-wrapper">
    <a href="<?php echo get_permalink( $p->ID ); ?>">
        <div class="article-image" 
            style="background-image: url(<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $p->ID, 'img2' )) ?>);">
        </div>
        <div class="article-title">
            <?php echo $p->post_title ?>
        </div>
    </a>
    <div style="clear: both;"></div>
</div>


<?php endforeach; ?>



<?php 

global $post;

$post_slug = $post->post_name;

$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/' . $post_slug . '2.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/' . $post_slug . '2.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/' . $post_slug . '2.html',  $content);





?>