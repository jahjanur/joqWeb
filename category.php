<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/




// if ($wp_query->get_queried_object()->slug === 'sport') { 
if (true) { 


    echo get_template_part( 'templates/newCategory' ); 

?>






<?php } else {


	get_header();

?>
<div id="t3-mainbody" class="container t3-mainbody one-sidebar-right">
	<div class="row">
		
		<div class="mobile_only" style="width:300px; margin:0px auto 0; height: auto; overflow: hidden;">
			<div id="rcjsload_b6282e"></div>
		</div>
		<div class="mobile_only" style="width:300px; margin:-5px auto 0;">
			<div id="taboola-top-mobile"></div>
		</div>
		<div class="mobile_only" style="width: 300px; margin: 0 auto 5px;  max-height: 300px; overflow: hidden;">
			<div id="crit300x250-1"></div>
		</div>
		<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
			<div class="adunit-1" data-adunit="joq__MOB-300x100-third" data-dimensions="300x100"></div>
		</div>
		<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
			<div class="adunit-1" data-adunit="joq__MOB-300x100-1" data-dimensions="300x100" style="width:300px; height:100px;"></div>
		</div>
		<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
			<div class="adunit-1" data-adunit="joq__MOB300x100-4" data-dimensions="300x100" style="width:300px; height:100px;"></div>
		</div>
		<div class="pc_only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
			<div class="adunit-1" data-adunit="joq__leaderboard" data-dimensions="728x90" style="width:728px; height:90px;"></div>
		</div>
		<div class="pc_only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
			<div class="adunit-1" data-adunit="joq__PC-Leaderboard-3" data-dimensions="728x90" style="width:728px; height:90px;"></div>
		</div>

		<div id="t3-content" class="t3-content col-xs-12 col-sm-12  col-md-8">
			<div class="fixed_left_banner inNews_fixed_left_banner fixed_left_staticBanner pc_only">
				<div id="floating-left"></div>
			</div>
			<div id="k2Container" class="itemListView  aqua">
				<h1 class="h1cat"><?php echo single_cat_title(); ?></h1>
				<div class="itemList category-news-container" style="height: 3600px; overflow: hidden;">
					<div id="itemListLeading">

						<?php while ( have_posts() ) : the_post(); ?>

							<div class="article-joq">
								<div class="photoArticle"> <a href="<?php echo get_permalink(); ?>"> <img src="<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( get_the_ID(),'img2' )) ?>"> </a> </div>
								<div class="boxText">
									<div class="articleText"><a href="<?php echo get_permalink(); ?>"> <?php echo the_title(); ?> </a> </div>
									<span class="time"><?php echo  get_the_date( 'd.m.Y, H:i' );?> | <?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?> </span>
								</div>
								<div class="clear"></div>
							</div>

						<?php endwhile; ?>

						<div class="load_more_show"></div>
						

						<script type="text/javascript">var categoryName = '<?php echo $wp_query->get_queried_object()->slug; ?>';</script>



						<!-- load more vars 
						<script type="text/javascript">
							var categoryName = '<?php echo $wp_query->get_queried_object()->slug; ?>';
						    if (typeof categoryName !== 'undefined') {
						        var lm_category = categoryName;
						    }
						    var lm_limit = 25;
						    var lm_offset = 25;
						    $(".load_more_button").on("click", function(){
						    	$('.load_more_button').html('...');
						        $.ajax({
						            url: "https://newjoq.joq.al/load-more-category?category="+lm_category+"&limit="+lm_limit+"&offset="+lm_offset+"",
						            success: function( response ) {
						            	$('.load_more_button').html('M&euml; Shum&euml;');
						            	if(response == '') {
							                
							            } else {
							                var HTML_result = '';
							                try{
							                	response = JSON.parse(response);
							                	if(response.length == 0) {
							                		$('.load_more_button').remove();
							                	} else {
							                		lm_offset += 25;
							                		for(var i = 0; i < response.length; i++) {

									                    HTML_result += '<div class="article-joq"><div class="photoArticle"> <a href=" '+response[i]['link']+' "> <img src=" '+response[i]['image']+' "> </a> </div><div class="boxText"><div class="articleText"><a href=" '+response[i]['link']+' ">  '+response[i]['title']+'  </a> </div><span class="time"> '+response[i]['post_date']+' |  '+response[i]['author_name']+'   '+response[i]['author_lastname']+' </span></div><div class="clear"></div></div>';

									                }
									                $('.load_more_show').append(HTML_result);
							                	}
								                
							                } catch (e) {
							                	console.log(e);
							                	$('.load_more_show').html('Di&ccedilka shkoi gabim. Ju lutem provoni p&euml;rs&euml;ri!');
							                }
							                
							            }
						            }
						        });
						    });
						</script>
						-->
					</div>
				</div>
				<div style="padding: 10px; background-color: #fff;">
					<button class="load_more_button">M&euml Shum&euml</button>
				</div>
			</div>
		</div>
		<div class="t3-sidebar t3-sidebar-right col-xs-12 col-sm-12  col-md-4 ">
			<div class="fixed_right_banner inNews_fixed_right_banner fixed_right_staticBanner">
				<div class="adunit-1" data-adunit="joq__floating-right" data-dimensions="160x600" style="width:160px; height:600px;"></div>
			</div>
			<div class="t3-module module title-arrow nspText latestnews " id="Mod248">
				<div class="module-inner">
					<div class="module-ct">
						<div class="mobile_only" style="width: 300px; margin: -5px auto 5px;  max-height: 250px; overflow: hidden;">
							<div id="crit300x250-2"></div>
						</div>
						<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
							<div class="adunit-1" data-adunit="joq__MOB300x100-3" data-dimensions="300x100" style="width:300px; height:100px;"></div>
						</div>
						<?php if ($wp_query->get_queried_object()->slug === 'sport') {  ?>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__300x250-4" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>
                    	<?php } ?>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__300x250-3" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__MOB-300x250-first" data-dimensions="300x250"></div>
						</div>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__MOB-300x250-mid" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>
						<div class="pc_only" style="width:300px; max-height:250px; margin-bottom:5px; overflow: hidden;">
							<div id="lupon300x250-1"></div>
						</div>
						<div class="ajxLastNews"></div>
						<div class="pc-mob-banner" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__PC-300x250-last" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>
						<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
							<div class="adunit-1" data-adunit="joq__MOB-300x100-mid" data-dimensions="300x100" style="width:300px; height:100px;"></div>
						</div>
						<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
							<div class="adunit-1" data-adunit="joq__MOB-300x100-2" data-dimensions="300x100"></div>
						</div>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__300x250-bottomRight" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>
						<div class="mobile_only" style="width:300px; height:100px; margin:0 auto 10px;">
							<div class="adunit-1" data-adunit="joq__MOB-300x100-second" data-dimensions="300x100" style="width:300px; height:100px;"></div>
						</div>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__300x250-2" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__PC-300x250-1" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>
						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
							<div class="adunit-1" data-adunit="joq__300x250" data-dimensions="300x250" style="width:300px; height:250px;"></div>
						</div>


						




						<style type="text/css">
							.mob_pc_banners {
								width: 300px;
								margin-bottom: 5px;
							}
							@media only screen and (max-width: 768px){
								.mob_pc_banners {
									width: 300px;
									margin: 0 auto 5px;
								}
							}
						</style>
						<div class="mobile_only" style="width: 320px; margin: 0 auto;  max-height: 50px; overflow: hidden;">
							<div id="crit320x50-1"></div>
						</div>
						<div class="pc_only" style=" max-height: 250px; overflow: hidden; width: 300px;">
							<div id="lupon300x250-2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- load more news -->
<script type="text/javascript">

	$category_news = $('.category-news-container');

    if ($(window).width() > 768) {


        //More category news
        $('.load_more_button').on('click', function() {
            if($category_news.height() < 20400) {
                $category_news.height($category_news.height() + 3600);
                if($category_news.height() >= 20400) {
                    $('.load_more_button').remove();
                }
            }
        });

    } else {

        //More category news
        $('.load_more_button').on('click', function() {
            if($category_news.height() < 33150) {
                $category_news.height($category_news.height() + 5850);
                if($category_news.height() >= 33150) {
                    $('.load_more_button').remove();
                }
            }
        });

    }

</script>

<?php get_footer(); ?>

<?php }


