<?php
/* 
    Template Name: TEST
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo 'test' . '<br>';



// $url = 'https://leads.al'; // Replace with the URL you want to fetch
// $curl = curl_init();
// curl_setopt( $curl, CURLOPT_URL, $url );
// curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
// curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ); // Disable SSL certificate verification
// $response = curl_exec( $curl );
// curl_close( $curl );


$topArr = array();


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
                "size" => 12
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
// print_r($popularPostsRawResponse);

$finalArr = array();
if (isset($popularPostsRawResponse->aggregations->popular_news->buckets) && is_array($popularPostsRawResponse->aggregations->popular_news->buckets)) {
    // Extract "key" values from the JSON data
    $i = 0;
    foreach ($popularPostsRawResponse->aggregations->popular_news->buckets as $bucket) {
        if ($i >= $_GET['topOffset'] && $i < ($_GET['topOffset'] + 4)) {
            array_push($finalArr, $bucket->key);
        }
        $i++;
    }
} else {
    // Handle the case where 'buckets' do not exist
    echo "The 'buckets' property does not exist or is not an array.";
}



// global $ajaxLoad;
$ajaxLoad = 1;
$args = array(
    'post__in' => $finalArr,
    'posts_per_page' => 4,
    'orderby' => 'post__in',
    'category__not_in' => '63551'
);
$topPosts = get_posts($args);


foreach ($topPosts as $p) :
    $category = get_the_category($p->ID); 
    $topObj = new stdClass;
    $topObj->title = $p->post_title;
    $topObj->post_date = get_the_date( 'd.m.Y, H:i', $p->ID );
    $topObj->image = fix_photogallery_image(get_the_post_thumbnail_url( $p->ID, 'img2' ));
    $topObj->link = get_permalink($p->ID);
    $topObj->cat = $category[0]->cat_name;
    $topObj->cat_slug = $category[0]->slug;
    $topObj->author_name = get_the_author_meta($p->ID, 'first_name');
    $topObj->author_lastname = get_the_author_meta($p->ID, 'last_name');  
    array_push($topArr, $topObj);
endforeach; 

print_r($topArr);


