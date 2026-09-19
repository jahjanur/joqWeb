<?php
/* 
    Template Name: Last Four news
*/


/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

//start cache system
ob_start();
?>


<?php
$ajaxLoad = 1;

	$lastPosts = new WP_query('type=post&posts_per_page=4&category__not_in=63551');
	while( $lastPosts->have_posts() ): $lastPosts->the_post();

?>

	<div class="fourContent-wrapper">
	<div class="image-holder">
	<a href="<?php echo get_permalink(); ?>">
	<?php echo joq_thumb_img( get_the_ID(), 'img2', array( 'alt' => get_the_title(), 'width' => false, 'height' => false, 'loading' => false ) ); ?>
	</a>
	</div>
	<div class="content-holder">
	<a href="<?php echo get_permalink(); ?>">
	<div class="fourText-wrapper"><?php echo the_title(); ?></div>
	</a>
	<div class="fourInfo-wrapper">
	<span class="fourTime"><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 3px;"></i><?php echo  get_the_date( 'H:i' );?></span>
	<span class="fourAuthor"><?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?></span>
	</div>
	</div>
	</div>

<?php 

endwhile; wp_reset_postdata();


$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/last-four-news.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/last-four-news.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/last-four-news.html',  $content);


ob_start();
?>


<?php
$ajaxLoad = 1;

	// $lastPosts = new WP_query('type=post&posts_per_page=4&category__not_in=63551');
	while( $lastPosts->have_posts() ): $lastPosts->the_post();

?>

	<div class="article-wrapper" style="width: 25%;">
        <a href="<?php echo get_permalink() ?>">
            <?php $lfnImg = fix_post_thumbnail( get_the_post_thumbnail_url( get_the_ID(), 'img2' ) ); ?>
            <div class="article-image" style="padding-bottom: 75%;<?php if ( $lfnImg ) : ?> background-image: url(<?php echo esc_url( $lfnImg ); ?>);<?php endif; ?> background-size: cover; background-position: center;border-top-left-radius: 10px;border-top-right-radius: 10px;"></div>
            <div class="article-title">
                <?php echo the_title(); ?>
            </div>
        </a>
    </div>

<?php 

endwhile; wp_reset_postdata();


$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/last-four-news2.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/last-four-news2.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/last-four-news2.html',  $content);



ob_start();
?>


<?php
$ajaxLoad = 1;

	// $lastPosts = new WP_query('type=post&posts_per_page=4&category__not_in=63551');
	while( $lastPosts->have_posts() ): $lastPosts->the_post();

?>

	<div class="home-category-article">
	    <?php $lfnImg3 = fix_post_thumbnail( get_the_post_thumbnail_url( get_the_ID(), 'img2' ) ); ?>
	    <div class="home-category-image">
	        <a href="<?php echo get_permalink() ?>"<?php if ( $lfnImg3 ) : ?> style="background-image: url(<?php echo esc_url( $lfnImg3 ); ?>);"<?php endif; ?>>
	        </a>
	    </div>
	    <div class="home-category-post">
	        <a href="<?php echo get_permalink() ?>">
	            <div class="home-category-post-title">
	                <?php echo the_title(); ?>
	            </div>
	            <div class="home-category-post-author">
	                Shkruar nga: <?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?> | Publikuar më: <?php echo  get_the_date( 'd.m.Y, H:i' );?>
	            </div>
	        </a>
	    </div>
	</div>

<?php 

endwhile; wp_reset_postdata();


$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/last-four-news3.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/last-four-news3.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/last-four-news3.html',  $content);

?>



