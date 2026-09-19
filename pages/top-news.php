<?php
/* 
    Template Name: Top News
*/




// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);




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
 

<div class="moduletable nspBg title-arrow newsMore homepagecenterfeed">
<h3 class="me-te-spikaturat-header">M&euml; t&euml; lexuarat</h3>
<div class="nspMain  nspBg title-arrow newsMore homepagecenterfeed" id="nsp-nsp-207">
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

$args = array(
    'post__in' => $finalArr,
    'posts_per_page' => 10,
    'orderby' => 'post__in',
    'category__not_in' => '63551'
);


//global $ajaxLoad;
$ajaxLoad = 1;

$posts = get_posts($args);


foreach ($posts as $p) :
?>

<div class="article-sys4">
<div class="photo-article-sys4"><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo joq_thumb_img( $p->ID, 'img2', array( 'alt' => get_the_title( $p->ID ), 'width' => false, 'height' => false, 'loading' => false ) ); ?></a></div>
<div class="box-text-article-sys4">
<span class="video-sys4"></span>
<div class="article-text-sys4 homemidFix2"><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo $p->post_title ?></a></div>
</div>
</div>

<?php endforeach; ?>

</div>
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





//start cache system2
ob_start();


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
    'posts_per_page' => 4,
    'orderby' => 'post__in'
);



$ajaxLoad = 1;

/* Emits the homepage "Më të lexuarat" strip (.joq-trending in index.php).
   Order comes from the popularity API above via post__in. Production caches
   this output to /myAjax/top-news2.html — regenerate it after deploying. */
$posts = get_posts($args);
$rank  = 0;
foreach ($posts as $p) :
    $rank++;
?>

<article class="joq-trending__item">
    <a href="<?php echo get_permalink( $p->ID ); ?>" title="<?php echo esc_attr( $p->post_title ); ?>">
        <div class="joq-trending__top">
            <span class="joq-trending__num"><?php echo str_pad( $rank, 2, '0', STR_PAD_LEFT ); ?></span>
            <div class="joq-trending__img">
                <?php echo joq_thumb_img( $p->ID, 'img2', array( 'alt' => $p->post_title, 'width' => false, 'height' => false ) ); ?>
            </div>
        </div>
        <div class="joq-trending__title"><?php echo $p->post_title ?></div>
    </a>
</article>

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