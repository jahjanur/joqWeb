<?php
/* 
    Template Name: Menu dropdown
*/


/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

//start cache system
ob_start();
?>


<?php

	if( !$_GET['category'] || !ctype_alpha($_GET['category']) ){
		return;
	}


	$ajaxLoad = 1;

	$lastPosts = new WP_query('type=post&posts_per_page=4&category_name=' . $_GET['category']);
	while( $lastPosts->have_posts() ): $lastPosts->the_post();

?>

	<li class="cat_news">
	<a href="<?php echo get_permalink(); ?>">
	<img src="<?php echo fix_photogallery_image(get_the_post_thumbnail_url( get_the_ID(),'img1' )) ?>">
	</a>
	<a href="<?php echo get_permalink();?>">
	<?php echo the_title(); ?></a>
	</li>


<?php 

endwhile; wp_reset_postdata();
?>


<script>

    $(".hm_news").addClass('display_news');
    $(".hm_singleLink").on('mouseenter', function () {
        $(".hm_singleLink").removeClass('active1');
        $(this).addClass('active1');
    });

</script>


<?php

$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/menu_sub_'.$_GET['category'].'_kater_.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/menu_sub_'.$_GET['category'].'_kater_.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/menu_sub_'.$_GET['category'].'_kater_.html',  $content);





ob_start();
?>


<?php


	$ajaxLoad = 1;
	$x=0;
	while( $lastPosts->have_posts() ): $lastPosts->the_post();
		$x++;
		if ($x < 4) {

?>

<div class="article-wrapper" style="width: 33.3333%">
	<a href="<?php echo get_permalink(); ?>">
		<div class="article-image">
			<img src="<?php echo fix_photogallery_image(get_the_post_thumbnail_url( get_the_ID(),'img1' )) ?>" alt="JoqAlbania">
		</div>
		<div class="article-title">
			<div class="article-title-wrapper">
				<?php echo the_title(); ?>
			</div>
			<div class="home-category-post-author mobile-only">
                Shkruar nga: <?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?> | Publikuar më: <?php echo  get_the_date( 'd.m.Y, H:i' );?>
			</div>
		</div>
		<div class="mobile-only" style="clear: both;"></div>
	</a>
</div>



<?php 

}

endwhile; wp_reset_postdata();

$content = ob_get_contents();
ob_end_clean();

// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/myAjax/more-from-'.$_GET['category'].'.html',  $content);


// JOQALBANIA //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/more-from-'.$_GET['category'].'.html',  $content);


// JETAOSHQEF-CO //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/myAjax/more-from-'.$_GET['category'].'.html',  $content);


?>



