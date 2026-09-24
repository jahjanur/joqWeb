<?php ob_start(); ?>


<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="sq-AL">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5LHWR57');

    </script>
    <!-- End Google Tag Manager -->

    <meta name="apple-itunes-app" content="app-id=1224913299">
    <meta name="google-play-app" content="app-id=com.joqAlbania.al">
    <meta property="fb:pages" content="104916548544422" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta property="fb:app_id" content="1591048791052134" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="sq_AL" />
    <?php 
		global $post;
		$text = wp_strip_all_tags($post->post_content);
		$ID = $post->ID;
		$title = $post->post_title;
		$author = $post->post_author;
	?>
    <meta name="description" content="<?php echo wp_trim_words( esc_attr($text), 40, '...' ); ?>" />
    <link rel="canonical" href="https://joq-albania.com/artikull/<?php echo $ID ?>.html" />
    <!--    <link rel="amphtml" href="https://joq-albania.com/amp/<?php echo $ID ?>.html">-->
    <meta name="author" content="<?php echo the_author_meta( 'first_name' , $author ); ?>.<?php echo the_author_meta( 'last_name' , $author ); ?>" />
    <meta property="og:url" content="https://joq-albania.com/artikull/<?php echo $ID ?>.html" />
    <meta property="og:title" content="<?php echo esc_attr($title); ?>" />
    <meta property="og:description" content="<?php echo wp_trim_words( $text, 40, '...' ); ?>" />
    <meta property="og:image" content="<?php echo joq_absolute_url(fix_post_thumbnail(get_the_post_thumbnail_url( $ID,'full' ))); ?>" />
    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo esc_attr($title); ?>" />
	<meta name="twitter:description" content="<?php echo wp_trim_words( $text, 40, '...' ); ?>" />
	<meta name="twitter:image" content="<?php echo joq_absolute_url(fix_post_thumbnail(get_the_post_thumbnail_url( $ID,'full' ))); ?>" />
	<meta name="twitter:site" content="@JoqAlbania" />

    <?php /* Structured data. Invisible to readers; this is what Google News and
             Discover read to decide whether to surface the story. */ ?>
    <?php echo joq_news_article_jsonld( $post ); ?>
    <?php echo joq_breadcrumb_jsonld( $post ); ?>

    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="https://static.joq-albania.com/assets/images/facivon4.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://joq-albania.com/assets/css/font-awesome.min.css" type="text/css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/swiper-bundle.min.css" type="text/css" />
    
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v1.02" type="text/css" />

    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="/wp-content/themes/joq/assets/css/joq-design-system.css?v=6.1" type="text/css" />
    
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];

    </script>

    <script>
        googletag.cmd.push(function() {
            googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });

    </script>

    <script src="https://static.joq-albania.com/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://static.joq-albania.com/assets/js/jquery.dfp.min.js" type="text/javascript"></script>


    <script>
	    <?php $theID = get_the_ID(); $isAdultNews = get_field( "lajmi_18", $theID );?>
	    var resultToBoolean = {
	        'Po': true,
	        'Jo': false
	    };
	    var adultNews = resultToBoolean['<?php echo $isAdultNews[0] ?>'];
	    var isNews = true, isHome = false, isCategory = false;

	    <?php $postCat = get_the_category($theID); $encodeCats = json_encode($postCat);?>
	    var postCategories = <?php echo $encodeCats ?>;
	    var isSport = false;
	    var isKosovo = false;
	    var isMacedonia = false;
	    for (let category of postCategories) {
	    	if (category['slug'] === 'sport') {
	    		isSport = true;
	    		break;
	    	} else if (category['slug'] === 'kosova') {
	    		isKosovo = true;
	    		break;
	    	} else if (category['slug'] === 'maqedoni') {
	    		isMacedonia = true;
	    		break;
	    	}
	    }
	    

	    var isMobile = false;
	    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
	        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;

	</script>


    <script type="text/javascript">
        if (window.self !== window.top) {
            window.top.location.href = window.location.href;
        }
        $.ajaxSetup({
            cache: false
        });
    </script>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "0b76b7e8-180a-4fb6-a524-5d0a06695323",
        });
      });
    </script>

    <script type="text/javascript" src="https://static.joq-albania.com/assets/js/jquery.fancybox.js?v=2.1.5"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.6/postscribe.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://static.joq-albania.com/assets/js/swiper-bundle.min.js" type="text/javascript"></script>

    <!-- Taboola -->
    <!-- <script async src="//htagpa.tech/c/joq-albania.com.js"></script> -->

    <!-- Ogilvi -->
    <!-- <script async src="//ogilvi.medium.al/www/delivery/asyncjs.php"></script> -->
    <!-- <script async src="//paslsa.com/c/joq-albania.com.js"></script>-->

    <!-- Mediadesk -->
    <!-- <script src="https://mediadesk.al/ad/joq/h.js"></script> -->

</head>

<body>

    <div id="smart-mgid"></div>
	
<?php get_template_part( 'templates/joqHeader' ); ?>

    <!-- News Body -->
    <div class="container-wrapper">
    	<div class="container">

    		<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	            <div id="mgid-mob-top"></div>
	        </div>

	        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	            <div class="adunit-1" data-adunit="app_joq__1" data-dimensions="300x100"></div>
	        </div>

	      

	        <div class="pc-only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
	            <div class="adunit-1" data-adunit="joq__leaderboard" data-dimensions="728x90"></div>
	        </div>


	        <div class="padding-mobile joq-post" style="position: relative;">

	        	<div class="fixed-left-banner pc-only">
                    <div class="adunit-1" data-adunit="joq__floating-left" data-dimensions="160x600" style="width:160px; height:600px;"></div>
                </div>

	    		<div class="joq-post__main">
    			
	    			<div>
	    			<?php $postCats = get_the_category(); ?>

		    			<nav class="joq-post__breadcrumb">
		    				<a href="/">Kryefaqja</a>
		    				<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
		    				<?php if ( ! empty( $postCats ) ) : ?>
		    					<a href="/kategori/<?php echo $postCats[0]->slug; ?>.html"><?php echo joq_cat_icon_img( $postCats[0]->slug, 'joq-breadcrumb__icon' ); ?><?php echo $postCats[0]->cat_name; ?></a>
		    					<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
		    				<?php endif; ?>
		    				<span><?php echo wp_trim_words( get_the_title(), 7, '...' ); ?></span>
		    			</nav>

		    			<?php if ( ! empty( $postCats ) ) : ?>
		    				<?php /* No icon here on purpose: this chip is solid brand red and the
		    				   icon set is drawn in the same red and black, so marks like
		    				   persekutimi-ndaj-joq turn to mud on it. The breadcrumb above
		    				   carries the icon instead, on a light background. */ ?>
		    				<a class="joq-post__cat" href="/kategori/<?php echo $postCats[0]->slug; ?>.html"><?php echo $postCats[0]->cat_name; ?></a>
		    			<?php endif; ?>

		    			<div>
		    				<h1 class="joq-post__title">
		    					<?php echo the_title(); ?>
		    				</h1>
		    			</div>
		    			<div class="joq-post__meta">
		    				<?php $joqAuthor = joq_author_line(); ?>
                            <?php if ( $joqAuthor ) : ?><span class="joq-post__author">Shkruar nga: <?php echo esc_html( $joqAuthor ); ?></span><?php endif; ?>
		    				<span class="joq-post__meta-sep"></span>
		    				<time datetime="<?php echo get_the_date( 'c' ); ?>">Publikuar m&euml;: <?php echo get_the_date( 'd.m.Y, H:i' );?></time>
		    				<?php if (get_field('english_news_id')) { ?>
		    					<span class="joq-post__meta-sep"></span>
	                            <a href="https://joq-albania.com/artikull/<?php echo get_field('english_news_id'); ?>.html">
	                                Read in english
	                            </a>
                            <?php } ?>
		    			</div>

		    			<div class="joq-post__shares">
		    				<span class="joq-post__share-label">Shp&euml;rndaje:</span>
		    				<a class="joq-post__share-btn joq-post__share-btn--fb popup" target="_blank"
		    				   href="https://www.facebook.com/sharer/sharer.php?u=https://joq-albania.com/artikull/<?php echo $ID ?>.html" title="Facebook" aria-label="Facebook">
		    					<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07"/></svg>
		    				</a>
		    				<a class="joq-post__share-btn joq-post__share-btn--tw popup" target="_blank"
		    				   href="https://twitter.com/intent/tweet?text=https://joq-albania.com/artikull/<?php echo $ID ?>.html" title="X" aria-label="X">
		    					<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 1.2h3.7l-8.1 9.2L24 22.8h-7.4l-5.9-7.6-6.7 7.6H.3l8.6-9.9L0 1.2h7.6l5.3 7zm-1.3 19.4h2L6.5 3.3H4.3z"/></svg>
		    				</a>
		    				<a id="shareWhatsapp" class="joq-post__share-btn joq-post__share-btn--wa" target="_blank"
		    				   href="whatsapp://send?text=https://joq-albania.com/artikull/<?php echo $ID ?>.html" title="WhatsApp" aria-label="WhatsApp">
		    					<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884a9.82 9.82 0 0 1 6.988 2.896 9.82 9.82 0 0 1 2.893 6.994c-.003 5.45-4.437 9.886-9.885 9.886m8.413-18.297A11.8 11.8 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.9 11.9 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.82 11.82 0 0 0-3.48-8.413"/></svg>
		    				</a>
		    				<a id="shareViber" class="joq-post__share-btn joq-post__share-btn--viber" target="_blank"
		    				   href="viber://forward?text=https://joq-albania.com/artikull/<?php echo $ID ?>.html" title="Viber" aria-label="Viber">
		    					<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M11.4 0C9.5 0 5.6.3 3.4 2.3 1.8 3.9 1.2 6.3 1.1 9.3c0 3 .1 8.6 5.5 10.1v2.3c0 .9 1 1.4 1.7.8l1.5-1.7c.7 0 1.4.1 2.1.1 1.9 0 5.8-.3 8-2.3 1.6-1.6 2.2-4 2.3-7 0-3-.1-5.4-1.7-7C18.3.3 14.4 0 12.5 0h-1.1zm.3 2.1h.9c1.6 0 4.9.3 6.5 1.8 1.2 1.2 1.4 3.2 1.4 5.6s-.2 4.4-1.4 5.6c-1.6 1.5-4.9 1.8-6.5 1.8-.7 0-1.4 0-2-.1l-1.5 1.7v-2.1C5 15.3 3.2 13 3.2 9.4c0-2.4.2-4.4 1.4-5.6C6.2 2.4 9.1 2.1 11.7 2.1z"/><path d="M12 4.4c-.3 0-.5.2-.5.5s.2.4.5.5c2.3.2 3.6 1.5 3.7 3.8 0 .3.2.5.5.5s.5-.2.5-.5c-.1-2.8-1.8-4.6-4.7-4.8zM9.1 6.6c-.4-.2-.8-.1-1.1.2 0 0-.9.9-.7 1.8.3 1.4 2.6 4.6 5.3 5.3.9.2 1.8-.7 1.8-.7.3-.3.4-.7.2-1.1l-.9-1c-.3-.3-.7-.3-1-.1l-.5.4c-.2.2-.6.1-.6.1s-1.4-.6-2.2-2.2c0 0-.1-.4.1-.6l.4-.5c.2-.3.2-.7-.1-1l-.7-.6z"/></svg>
		    				</a>
		    				<button type="button" class="joq-post__share-btn joq-post__share-btn--copy"
		    				        title="Kopjo linkun" aria-label="Kopjo linkun"
		    				        onclick="navigator.clipboard.writeText('https://joq-albania.com/artikull/<?php echo $ID ?>.html');this.classList.add('is-copied');">
		    					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
		    				</button>
		    			</div>

		    			<?php /* box always renders; with no thumbnail its fallback mark shows */ ?>
		    			<div class="joq-post__image">
		    				<?php echo joq_thumb_img( $ID, 'full', array( 'alt' => get_the_title(), 'width' => false, 'height' => false, 'loading' => false ) ); ?>
		    				<?php $joqCaption = trim( (string) get_the_post_thumbnail_caption() ); ?>
		    				<?php if ( $joqCaption ) : ?><div class="joq-post__image-caption"><?php echo $joqCaption; ?></div><?php endif; ?>
		    			</div>



	                        <div class="mobile-only" style="text-align: center; height:auto; margin: 0 auto -5px;">
	                            <div class="adunit-1" data-adunit="app_joq__6" data-dimensions="300x100"></div>
	                        </div>


		    			<div class="joq-post__content">

		    				<?php echo the_content(); ?>


		    				<?php $photoArr =  get_field('fotogaleri-am');  if( $photoArr ): ?>
			    				<div class="photogallery-wrapper">

			    					<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
								      <div class="swiper-wrapper">
								      	<?php foreach( $photoArr as $photo ): ?>
								        <div class="swiper-slide">
								          <img src="<?php echo fix_photogallery_image($photo['url']) ?>" />
								        </div>
								        <?php endforeach; ?>
								      </div>
								      <div class="swiper-button-next"></div>
								      <div class="swiper-button-prev"></div>
								    </div>

								    <div thumbsSlider="" class="swiper mySwiper pc-only">
								      <div class="swiper-wrapper">
								        <?php foreach( $photoArr as $photo ): ?>
								        <div class="swiper-slide">
								          <img src="<?php echo fix_photogallery_image($photo['url']) ?>" />
								        </div>
								        <?php endforeach; ?>
								      </div>
								    </div>
			    					
			    				</div>
			    				<script type="text/javascript">
			    					if ($(window).width() > 600) {
				    					var swiper = new Swiper(".mySwiper", {
									        spaceBetween: 10,
									        slidesPerView: 4,
									        freeMode: true,
									        watchSlidesProgress: true,
									    });
				    					var swiper2 = new Swiper(".mySwiper2", {
									        spaceBetween: 10,
									        navigation: {
									          nextEl: ".swiper-button-next",
									          prevEl: ".swiper-button-prev",
									        },
									        thumbs: {
									          swiper: swiper,
									        },
								        });	
			    					} else {
			    						var swiper2 = new Swiper(".mySwiper2", {
									        spaceBetween: 10,
									        navigation: {
									          nextEl: ".swiper-button-next",
									          prevEl: ".swiper-button-prev",
									        }
								        });	
			    					}
			    					
			    				</script>
		    				<?php endif; ?>

		    				<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	                            <div id="after-news-mob"></div>
	                        </div>

	                        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
					            <div class="adunit-1" data-adunit="app_joq__3" data-dimensions="300x100"></div>
					        </div>

					        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
					            <div class="adunit-1" data-adunit="app_joq__13" data-dimensions="300x100"></div>
					        </div>

		    				<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	                            <div class="adunit-1" data-adunit="app_joq__6" data-dimensions="300x100"></div> 
	                        </div>

	                        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	                        	<div id="ytb-mob"></div>
	                        </div>

		    				<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	                            <div class="adunit-1" data-adunit="app_joq__5" data-dimensions="300x100"></div>
	                        </div>  

	                        <!-- <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
		                        <a href="https://www.youtube.com/channel/UCVsMVFcGZgxXTl5A-usiIBQ/?sub_confirmation=1" target="_blank">
		                        	<img width="300" src="https://joq-albania.com/b/ytb/31/29-09-2022.jpg">
		                        </a>
		                    </div> -->

		                    <?php
		                      /* The query runs before the markup now: the editor's ACF list can
		                         point at posts that were since unpublished or deleted, and the
		                         heading used to render over an empty grid in that case.
		                         'type' was also a no-op -- get_posts() wants 'post_type', so
		                         attachments could slip in. */
		                      $related = array();
		                      $posts   = array();
		                      $relatedNews = get_field('te_lidhura');
		                      if ( $relatedNews ) {
		                          foreach ( $relatedNews as $value ) {
		                              $related[] = $value['id'];
		                          }
		                          if ( $related ) {
		                              $posts = get_posts( array(
		                                  'post_type'           => 'post',
		                                  'post_status'         => 'publish',
		                                  'post__in'            => $related,
		                                  'numberposts'         => count( $related ),
		                                  'ignore_sticky_posts' => true,
		                              ) );
		                          }
		                      }
		                    ?>
		                    <?php if ( $posts ) : ?>

		                    <div class="joq-post__related">
				    			<h2 class="joq-post__related-title">T&euml; lidhura me lajmin</h2>

				    			<div class="joq-post__related-grid">
				    			<?php

									
									foreach ($posts as $p):?>
										<div class="article-wrapper" style="width: 33.3333%">
											<a href="<?php echo get_permalink( $p->ID ); ?>">
												<div class="article-image">
													<?php echo joq_thumb_img( $p->ID, 'img2', array( 'alt' => get_the_title( $p->ID ), 'width' => false, 'height' => false ) ); ?>
												</div>
												<div class="article-title">
													<div class="article-title-wrapper">
														<?php echo $p->post_title ?>
													</div>
													<div class="home-category-post-author mobile-only">
										                <?php $relAuthor = joq_author_line( $p ); if ( $relAuthor ) : ?>Shkruar nga: <?php echo esc_html( $relAuthor ); ?> | <?php endif; ?>Publikuar më: <?php echo  get_the_date( 'd.m.Y, H:i', $p->ID );?>
										            </div>
												</div>
												<div class="mobile-only" style="clear: both;"></div>
											</a>
										</div>
									<?php endforeach;

			                    ?>
			                    </div>
				    			
				    		</div>
				    		<?php endif; ?>

		    				<div class="joq-post__factcheck">
		    					<strong>FACT CHECK:</strong> 
		    					Synimi i JOQ Albania është t’i paraqesë lajmet në mënyrë të saktë dhe të drejtë. Nëse ju shikoni diçka që nuk shkon, jeni të lutur të na e
		    					<a href="mailto:info@joqalbania.com?subject=Fact%20Check%20-%20<?php echo rawurlencode( wp_strip_all_tags( $title ) ); ?>&body=————————————————————————%0AReferring%20URL%3A%20https%3A%2F%2Fjoq-albania.com/artikull/<?php echo $ID ?>.html%0A————————————————————————%0A">raportoni këtu</a>.
		    				</div>

		    				<?php $postTags = get_the_tags(); if ( $postTags ) : ?>
		    				<div class="joq-post__tags">
		    					<?php foreach ( $postTags as $postTag ) : ?>
		    						<a class="joq-post__tag" href="<?php echo esc_url( get_tag_link( $postTag->term_id ) ); ?>">#<?php echo $postTag->name; ?></a>
		    					<?php endforeach; ?>
		    				</div>
		    				<?php endif; ?>

					        <!-- JOQ POLL -->
	                      	<?php /* hidden until a fragment actually delivers a poll: the shell is
	                      	     baked into the cached HTML, so an unstyled "JOQ Sondazh" heading
	                      	     used to sit on the page whenever the poll was off or the
	                      	     fragment 404'd, right on top of the FACT CHECK box. */ ?>
	                      	<div class="joq-poll-wrapper article-wrapper" hidden>

  								<script src="https://static.joq-albania.com/assets/js/joq-poll3.js?v12.39" type="text/javascript"></script>
	                      		<script src="https://www.google.com/recaptcha/api.js?render=6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN"></script>
	                      		<div class="joq-poll-title">
	                              JOQ Sondazh
	                              <div>
	                              	KLIKO PËR TË VOTUAR
	                              </div>
	                              <div style="text-align: center;height: 10px;">
	                              	<i class="fa fa-angle-down"></i>
	                              </div>
	                            </div>
					            <script type="text/javascript">
					              /* Show the wrapper only once one of the two fragments has put a
					                 real poll inside it. Both callbacks call this; whichever lands
					                 last wins, and if neither lands the wrapper stays hidden. */
					              function joqPollReveal() {
					                var w = document.querySelector('.joq-poll-wrapper');
					                if (!w) { return; }
					                var filled = w.querySelector('.jp .joq-poll-body, .jp2 .joq-poll-body, .jp ul, .jp2 ul');
					                if (filled) { w.hidden = false; }
					              }
					            </script>
					            <div class="joq-poll-body">
					                <div class="jp"></div>
						            <script type="text/javascript">
						                $.get( "/myAjax/sondazh.html", function( data ) {
						                	$( ".jp" ).html( data );
						                  try {
						                  	if (!isHeroiEnabled) {
												$( ".jp" ).remove();
						                  	}
						                  } catch(err) {console.log(err)};
						                  joqPollReveal();
						                });
						            </script>
						            <div class="jp2"></div>
						            <script type="text/javascript">
						                $.get( "/myAjax/sondazh-harami.html", function( data ) {
											$( ".jp2" ).html( data );
						                  setTimeout(() => {
						                  	console.log(isHaramiEnabled, isHeroiEnabled)
						                  	try {
								                  	if (!isHaramiEnabled) {
														$( ".jp2" ).remove();
														if (!isHeroiEnabled) {
								                  			$('.joq-poll-wrapper.article-wrapper').remove();
								                  		}
								                  	}
								                } catch(err) {console.log(err)};
								                joqPollReveal();
								            }, 50);
						                });
						            </script>
					          </div>
					          <script>
					          	$('.joq-poll-title').on('click', function() {
								  if ($('.joq-poll-title i').hasClass('open')) {
								    $('.joq-poll-title i').removeClass('open');
								    $('.joq-poll-body').removeClass('open');
								  } else {
								    $('.joq-poll-title i').addClass('open');
								    $('.joq-poll-body').addClass('open');
								  }
								});
					          </script>
					      	</div>
					      	<!-- END JOQ POLL --> 




					        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
					            <div class="adunit-1" data-adunit="app_joq__12" data-dimensions="300x100"></div>
					        </div>
							
							
            				

                <div class="mobile-only" style=" margin: 0 auto 3px; position: relative; top: -7px">
                    <div id="photogallery_pos2"></div>
                    <div id="photogallery_pos3"></div>
                </div>
                <div id="mgid-under-article"></div>

		    			</div>


                        <div class="mobile-only" style="max-width: 300px; margin: 20px auto 3px; position: relative; top: -8px;">
                            <div id="rcjsload_c1f2ce"></div>
                        </div>

                        <div class="pc-only">
			                <div class="adunit-1" data-adunit="joq__PC-600x100-2" data-dimensions="600x100"></div>
			            </div>


                        <div class="pc-only" style="margin-top: 10px;">
                            <div id="pc-under-news"></div>
                        </div>
                        

                        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        	<div id="ytb-1"></div>
                        </div>

                        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__8" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__9" data-dimensions="300x100"></div>
                        </div> 

                        <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
				            <div class="adunit-1" data-adunit="app_joq__2" data-dimensions="300x100"></div>
				        </div>
                        
						<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        	<div class="adunit-1" data-adunit="app_joq__11" data-dimensions="300x100"></div>
                        </div>

	                    <div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
	                        <div class="adunit-1" data-adunit="joq__MOB-300x250-mid" data-dimensions="300x250"></div>
	                    </div>

	                    <div class="pc-only" style="display: flex; align-items: center; justify-content: center;">
	                    	<div class="pc-only" style="width:300px; height:auto; margin: 0 5px;">
		                        <div class="adunit-1" data-adunit="joq__PC-300x250-11" data-dimensions="300x250"></div>
		                    </div>
		                    <div class="pc-only" style="width:300px; height:auto; margin: 0 5px;">
		                        <div class="adunit-1" data-adunit="joq__PC-300x250-12" data-dimensions="300x250"></div>
		                    </div>
	                    </div>

		    		</div>


		    		<?php
		    		  /* Was a $.get for /myAjax/more-from-{slug}.html. That fragment is
		    		     generated by pages/menu-dropdown.php, which guards on ctype_alpha(),
		    		     so it never exists for a hyphenated slug -- vec-e-jona,
		    		     persekutimi-ndaj-joq, hallet-e-popullit, si-te. Those articles
		    		     always showed the heading above an empty white card. Rendered here
		    		     instead: same category, never empty, and nothing at all when the
		    		     category has no other published post. */
		    		  $joqCats    = get_the_category( $post->ID );
		    		  $joqCatSlug = ! empty( $joqCats ) ? $joqCats[0]->slug : '';
		    		  $joqSameCat = array();
		    		  if ( $joqCatSlug && $joqCatSlug !== 'slide-kryesor-1' ) {
		    		      $joqSameCat = get_posts( array(
		    		          'post_type'           => 'post',
		    		          'post_status'         => 'publish',
		    		          'category'            => $joqCats[0]->term_id,
		    		          'numberposts'         => 3,
		    		          'post__not_in'        => array_merge( array( $post->ID ), ( isset( $related ) && is_array( $related ) ) ? $related : array() ),
		    		          'ignore_sticky_posts' => true,
		    		      ) );
		    		  }
		    		?>
		    		<?php if ( $joqSameCat ) : ?>
		    		<div class="news-related-news">
		    			<div class="block-title" style="text-align: left;">
		    				T&Euml; NGJASHME
		    			</div>

		    			<div class="related-news-article-wrapper">
		    				<?php foreach ( $joqSameCat as $joqRel ) : ?>
		    				<div class="article-wrapper" style="width: 33.3333%">
		    					<a href="<?php echo get_permalink( $joqRel->ID ); ?>">
		    						<div class="article-image">
		    							<?php echo joq_thumb_img( $joqRel->ID, 'img2', array( 'alt' => get_the_title( $joqRel->ID ), 'width' => false, 'height' => false ) ); ?>
		    						</div>
		    						<div class="article-title">
		    							<div class="article-title-wrapper"><?php echo get_the_title( $joqRel->ID ); ?></div>
		    						</div>
		    					</a>
		    				</div>
		    				<?php endforeach; ?>
		    			</div>

		    		</div>
		    		<?php endif; ?>

    				<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        <div class="adunit-1" data-adunit="joq__MOB-300x250-first" data-dimensions="300x250"></div>
                    </div> 

	    		</div>

				<!-- Category Right Block -->
				<div class="joq-post__sidebar">



		    		<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-3" data-dimensions="300x250"></div>
                    </div>

					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-9" data-dimensions="300x250"></div>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-4" data-dimensions="300x250"></div>
                    </div>


					<div class="pc-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        <div class="adunit-1" data-adunit="joq__PC-300x250-13" data-dimensions="300x250"></div>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <a href="https://www.instagram.com/esp_oil/" target="_blank">
                        	<img width="300" src="https://joq-albania.com/b/esp_oil/325/06-05-2026.gif">
                        </a>
                    </div> 

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__PC-300x250-10" data-dimensions="300x250"></div>
                    </div>

					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-8" data-dimensions="300x250"></div>
                    </div>

					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div id="ytb-pc" style="width:300px;"></div>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin: 0 0 5px 0;">
                        <div class="adunit-1" data-adunit="joq__PC-300x250-last" data-dimensions="300x250"></div>
                    </div>

                    

                    

                    <!-- <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <a href="https://www.youtube.com/channel/UCVsMVFcGZgxXTl5A-usiIBQ/?sub_confirmation=1" target="_blank">
                        	<img width="300" src="https://joq-albania.com/b/ytb/325/29-09-2022.jpg">
                        </a>
                    </div> -->

<!--                     <div id="albsig-pc" class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <script>
                            if (!isMobile) {
                                $.post("https://dynamic2.joq-albania.com/country", function(data) {
                                    var rc_country = JSON.parse(data).country;
                                    if (rc_country == 'AL') {
                                        try {
                                            postscribe('#albsig-pc', '<a href="https://facebook.com/albsigalbania/" target="_blank"><img width="300" src="https://static.joq-albania.com/banners/albsig/albsig.gif"></a>');
                                        } catch (e) {}
                                    }
                                });
                            }

                        </script>
                    </div> -->

					<!-- Category Top News -->
		    		<div class="home-last-news home-content-item category-tpl" style="display: block;">
		    			<div class="article-wrapper">
		    				<div class="block-title">
			    				Më të Lexuarat
			    			</div>
		    				<div class="top-news-articles"></div>
	                        <script type="text/javascript">
	                            $.get( "/myAjax/top-news-post2.html", function( data ) {
	                              $( ".top-news-articles" ).html( data );
	                            });
	                        </script>
		    			</div>
		    		</div>
		    		<!-- Category Top News  -->

                    <div id="joq-banner" class="pc-only" style="width:300px; height:auto; margin-bottom:5px;overflow: hidden;"></div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-2" data-dimensions="300x250"></div>
                    </div>

                    <div style="position: -webkit-sticky;position: sticky;top: 60px;">
                        <div class="pc-only" id="mgid-right-pc" style="width:300px; height:auto; margin-bottom:5px;"></div>
                        <div id="pc-impuls" style="width:300px; height:auto; margin: 0 0 5px 0;"></div>
                        <style type="text/css">
                            .mob_pc_banners {
                                width: 300px;
                                margin-bottom: 5px;
                            }

                            @media only screen and (max-width: 768px) {
                                .mob_pc_banners {
                                    width: 300px;
                                    margin: 0 auto 5px;
                                }
                            }

                        </style>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                      <a href="https://aleancaetike.media/decent-invest-offer-easily/" target="_blank">
                        <img style="width: 100%;" src="/b/ame/300x50/2020-27-10.gif">
                      </a>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__PC-300x250-6" data-dimensions="300x250"></div>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__PC-300x250-5" data-dimensions="300x250"></div>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-bottomRight" data-dimensions="300x250"></div>
                    </div>

                     <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250" data-dimensions="300x250"></div>
                    </div>

                    <div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__PC-300x250-1" data-dimensions="300x250"></div>
                    </div>

                    

                   


                    
					



				</div>
				<!-- End Category Right Block -->




				<div id="fixed_728_banner" class="pc-only" style="position: fixed; bottom: 0; width: 728px; left: calc(50% - 364px); height: auto; z-index: 99999;  max-height: 90px; overflow: hidden;">
			        <img id="remove_728_banner" src="https://static.joq-albania.com/assets/images/remove_banner.png" style="display: none; position: absolute; right: 0; top: 0; width: 24px; cursor: pointer;">
			        <div class="adunit-1" data-adunit="joq__PC-Leaderboard-4" data-dimensions="728x90"></div>
			    </div>
				<div id="fb-share" class="mobile-only fixed-fbshare"></div>

				<script type="text/javascript">
				    (async () => {
					    const post = {
					      "ID": <?php echo (int)get_the_ID(); ?>,
				          "theDate": "<?php echo  get_the_date('Y-m-d H:i:s'); ?>"
					  	};

					    fetch('https://dynamic2.joq-albania.com/search-event', {
					      method: 'POST',
					      headers: {
					        'Content-Type': 'application/json'
					      },
					      body: JSON.stringify({
					        post
					      })

					    });
					})();
				</script>


			    <!-- Download JOQ App -->
				<div class="download-app mobile-only" style="margin: 30px 0 30px;">
					<div class="download-app-title">
						Shkarkoni aplikacionin JOQ ALBANIA në platformat
					</div>
					<div class="download-app-buttons">
						<a href="https://itunes.apple.com/al/app/joq-al/id1224913299?mt=8" target="_blank">
							<div class="download-app-button">
								<div class="download-app-icon">
									<svg viewBox="0 0 512 512">
										<g>
											<path d="M185.255,512c-76.201-0.439-139.233-155.991-139.233-235.21c0-129.404,97.075-157.734,134.487-157.734   c16.86,0,34.863,6.621,50.742,12.48c11.104,4.087,22.588,8.306,28.975,8.306c3.823,0,12.832-3.589,20.786-6.738   c16.963-6.753,38.071-15.146,62.651-15.146c0.044,0,0.103,0,0.146,0c18.354,0,74.004,4.028,107.461,54.272l7.837,11.777   l-11.279,8.511c-16.113,12.158-45.513,34.336-45.513,78.267c0,52.031,33.296,72.041,49.292,81.665   c7.061,4.248,14.37,8.628,14.37,18.208c0,6.255-49.922,140.566-122.417,140.566c-17.739,0-30.278-5.332-41.338-10.034   c-11.191-4.761-20.845-8.862-36.797-8.862c-8.086,0-18.311,3.823-29.136,7.881C221.496,505.73,204.752,512,185.753,512H185.255z"/>
											<path d="M351.343,0c1.888,68.076-46.797,115.304-95.425,112.342C247.905,58.015,304.54,0,351.343,0z"/>
										</g>
									</svg>
								</div>
								<div class="download-app-text">
									<div class="download-app-text1">
										Shkarko për
									</div>
									<div class="download-app-text2">
										Apple iOS
									</div>
								</div>
							</div>
		        		</a>

		        		<a href="https://play.google.com/store/apps/details?id=com.joqAlbania.al" target="_blank">
							<div class="download-app-button">
								<div class="download-app-icon">
									<svg viewBox="0 0 512 512" class="android-svg">
										<g>
											<path xmlns="http://www.w3.org/2000/svg" d="M322.041,43.983l23.491-36.26c1.51-2.287,0.841-5.414-1.467-6.903     c-2.286-1.51-5.414-0.884-6.903,1.467l-24.353,37.512c-18.27-7.485-38.676-11.691-60.226-11.691     c-21.571,0-41.934,4.206-60.247,11.691l-24.31-37.512c-1.488-2.351-4.638-2.977-6.946-1.467     c-2.308,1.488-2.977,4.616-1.467,6.903l23.512,36.26c-42.387,20.773-70.968,59.924-70.968,104.834     c0,2.761,0.173,5.479,0.41,8.175h280.053c0.237-2.696,0.388-5.414,0.388-8.175C393.009,103.907,364.406,64.756,322.041,43.983z      M187.655,108.911c-7.442,0-13.482-5.997-13.482-13.46c0-7.463,6.04-13.439,13.482-13.439c7.485,0,13.482,5.975,13.482,13.439     S195.097,108.911,187.655,108.911z M317.49,108.911c-7.442,0-13.482-5.997-13.482-13.46c0-7.463,6.04-13.439,13.482-13.439     c7.463,0,13.46,5.975,13.46,13.439C330.95,102.914,324.953,108.911,317.49,108.911z"/>
										</g>
									</svg>
								</div>
								<div class="download-app-text">
									<div class="download-app-text1">
										Shkarko për
									</div>
									<div class="download-app-text2">
										Android
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- End Download JOQ App -->


				<!-- Last news mobile -->
				<div class="home-category-wrapper mobile-only" style="margin-bottom: 50px;">
					<div class="home-category-title category-tpl" style="font-size: 26px;">
						Më të fundit
					</div>
					<div class="footer-last-news-articles-mob"></div>
		            <script type="text/javascript">
		                if ($( window ).width() <= 600) {
		                    $.get( "/myAjax/last-four-news3.html", function( data ) {
		                      $( ".footer-last-news-articles-mob" ).html( data );
		                    });  
		                }
		            </script>
				</div>
				<!-- End last news mobile -->


	        </div>

	    	</div>


		</div>

		<div id="mob-fixed-footer" class="mobile-only">
			<div id="closeBanner_sys400"></div>
		</div>


    </div>
    <!-- End Category Body -->


<?php
$GLOBALS['joq_footer_last_news'] = true;
get_template_part( 'templates/joqFooter' );
?>


    <a href="https://wa.me/+355699299998" id="whatsapp-button" class="mobile-only">
        <img width="24px" src="https://static.joq-albania.com/assets/images/whatsapp-logo.svg">
    </a>



    <div id="footer-mob-banner" class="mobile-only">
      <div id="close-footer-mob-banner"></div> 
    </div>


	<script src="https://static.joq-albania.com/assets/js/newscript.js" type="text/javascript"></script>
    <script src="https://static.joq-albania.com/assets/js/bannersys.js?v2.11" type="text/javascript"></script>


    <script src="/wp-content/themes/joq/assets/js/joq-design-system.js?v=3.8"></script>
</body>

</html>


<?php 


	$content = ob_get_contents();
    ob_end_clean();

    $nameANDfolder = 'artikull/' . $post->ID . '.html';

	// Get the content that is in the buffer and put it in your file //
    gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/' . $nameANDfolder,  $content);


    // ORIGINALS //
    $domain = '/'.preg_quote('https://joq.al/', '/').'/';
    $fbpage = '/'.preg_quote('1413297348940786', '/').'/';


    // JOQALBANIA //
    $content2 = preg_replace($domain, 'https://joq-albania.com/', $content, 2);
    //$content2 = preg_replace($fbpage, '1413297348940786', $content2);
    gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/' . $nameANDfolder,  $content2);


    // JETAOSHQEF-CO //
    $co_content = preg_replace($domain, 'https://jetaoshqef.co/', $content, 2);
    //$co_content = preg_replace($fbpage, '1413297348940786', $co_content);
    gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/' . $nameANDfolder,  $co_content);

?>
