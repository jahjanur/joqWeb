<?php

/*
    Template Name: Count Posts
*/


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);



$first = date('Y-m-d', strtotime('first day of last month'));
$last = date('Y-m-d', strtotime('last day of last month'));
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => '-1',
    'orderby' => 'author',
    'date_query' => array(
        array(
            'after'     => $first,
            'before'    => $last,
            'inclusive' => true,
        ),
    )
);
$query = new WP_query($args);

$myObj = new stdClass;
if ($query -> have_posts()) : while ($query->have_posts()) : $query->the_post();

    $author = $post->post_author;

    if($myObj->$author): //check if author exist
        $myObj->$author['count'] += 1;
    else:
        $authorName = get_author_name($author);
        $myObj->$author = array(
            'count' => 1,
            'author' => $authorName
        );
    endif;
endwhile; 
endif;


foreach ($myObj as $item) {
    echo '<div style="font-size: 22px;font-family: sans-serif;margin: 20px;">' . $item['author'] . 
    ' <span style="font-weight: 700">' .$item['count'] .'</span></div>';
}












?>