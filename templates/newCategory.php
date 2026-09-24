
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

    <meta property="fb:pages" content="223536081352906" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="google-site-verification" content="kQ4bP_ZT5Z7QD2vAAheHvCVWxbFH7fRNIB55Ld-rAS8" />
    <meta property="fb:app_id" content="1591048791052134" />


    <?php 
        $thiscat = $wp_query->get_queried_object();
        $categoryName = $thiscat->name;
        $categorySlug = $thiscat->slug;
    ?>
    <meta name="description" content="JOQ Lajme nga kategoria <?php echo $categoryName ?>" />
    <link rel="canonical" href="https://joq-albania.com/kategori/<?php echo $categorySlug ?>.html" />
    <meta name="author" content="JOQ" />
    <?php /* og:image was logoJOQ.jpg at 208x142 -- below Facebook's 600x315
       minimum for a large card, so category links shared as a thumbnail or not
       at all. The shared card is 1200x630. */ ?>
    <?php echo joq_social_meta( array(
        'title'       => 'JOQ - ' . $categoryName,
        'description' => 'JOQ Lajme nga kategoria ' . $categoryName,
        'url'         => 'https://joq-albania.com/kategori/' . $categorySlug . '.html',
    ) ); ?>
    <title>JOQ - <?php echo $categoryName ?></title>

    <link rel="shortcut icon" href="https://static.joq-albania.com/assets/images/facivon4.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://joq-albania.com/assets/css/font-awesome.min.css" type="text/css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/swiper-bundle.min.css" type="text/css" />

    
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v=1.02" type="text/css" />

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

    <script type="text/javascript">
        if (window.self !== window.top) {
            window.top.location.href = window.location.href;
        }
        $.ajaxSetup({
            cache: false
        });
        var isNews = false, isHome = false, isCategory = true;
        var isMobile = false;
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
    </script>

    <script type="text/javascript" src="https://static.joq-albania.com/assets/js/jquery.fancybox.js?v=2.1.5"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.6/postscribe.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://static.joq-albania.com/assets/js/swiper-bundle.min.js" type="text/javascript"></script>


    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "0b76b7e8-180a-4fb6-a524-5d0a06695323",
        });
      });
    </script>


    <script type="text/javascript">
        if (window.self !== window.top) {
            window.top.location.href = window.location.href;
        }

    </script>


    <script type="text/javascript">
        $.ajaxSetup({
            cache: false
        });

    </script>

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


    <!-- Category Body -->
    <div class="container-wrapper">
        <div class="padding-mobile joq-category joq-category__layout">

            <!-- Category News List -->
            <div class="joq-category__main">

                <div class="fixed-left-banner pc-only" style="top: 75px;">
                    <div class="adunit-1" data-adunit="joq__floating-left" data-dimensions="160x600" style="width:160px; height:600px;"></div>
                </div>

            	<div class="mobile-only" style="width:300px; margin:0px auto 0; height: auto; overflow: hidden;">
					<div id="rcjsload_b6282e"></div>
				</div>
				<div class="mobile-only" style="width:300px; margin:-5px auto 0;">
					<div id="taboola-top-mobile"></div>
				</div>
				<div class="mobile-only" style="width: 300px; margin: 0 auto 5px;  max-height: 300px; overflow: hidden;">
					<div id="crit300x250-1"></div>
				</div>
				<div class="mobile-only" style="width:300px; height:auto; margin:0 auto 5px;">
					<div class="adunit-1" data-adunit="joq__MOB-300x100-third" data-dimensions="300x100"></div>
				</div>
				<div class="mobile-only" style="width:300px; height:auto; margin:0 auto 5px;">
					<div class="adunit-1" data-adunit="joq__MOB-300x100-1" data-dimensions="300x100" style="width:300px; height:100px;"></div>
				</div>
				<div class="mobile-only" style="width:300px; height:auto; margin:0 auto 5px;">
					<div class="adunit-1" data-adunit="joq__MOB300x100-4" data-dimensions="300x100" style="width:300px; height:100px;"></div>
				</div>
				<div class="pc-only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
					<div class="adunit-1" data-adunit="joq__leaderboard" data-dimensions="728x90" style="width:728px; height:90px;"></div>
				</div>
				<div class="pc-only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
					<div class="adunit-1" data-adunit="joq__PC-Leaderboard-3" data-dimensions="728x90" style="width:728px; height:90px;"></div>
				</div>

                <div class="joq-category__header">
                    <h1 class="joq-category__title"><?php echo joq_cat_icon_img( $thiscat->slug, 'joq-category__title-icon' ); ?><?php echo single_cat_title(); ?></h1>
                    <div class="joq-category__count"><?php global $wp_query; echo (int) $wp_query->found_posts; ?> artikuj</div>
                </div>

                <div class="category-article-list">

	                <?php
	                  /* The whole archive is in the markup; the first ten are shown and
	                     the rest revealed in tens by the button below. The class is set
	                     here rather than by JS because this page is cached as static
	                     HTML -- doing it on load would flash the full list first. */
	                  $joq_cat_i    = 0;
	                  $joq_cat_step = 10;
	                ?>
	                <?php while ( have_posts() ) : the_post(); $joq_cat_i++; ?>
	                <div class="joq-category__article<?php echo $joq_cat_i > $joq_cat_step ? ' is-hidden' : ''; ?>">
	                    
	                    <div class="joq-category__article-img">
	                        <a href="<?php echo get_permalink(); ?>">
	                            <?php echo joq_thumb_img( get_the_ID(), 'img2', array( 'alt' => get_the_title(), 'width' => false, 'height' => false ) ); ?>
	                        </a>
	                    </div>
	                    <div class="joq-category__article-body">
	                        <a href="<?php echo get_permalink(); ?>">
	                            <?php /* The design puts a category label above the title. On
	                                     this archive it is usually the archive's own category
	                                     and therefore redundant, so it is only printed when
	                                     the post's primary category is a DIFFERENT one --
	                                     i.e. when it actually tells the reader something. */
	                              $joq_card_cats = get_the_category();
	                              $joq_card_cat  = ! empty( $joq_card_cats ) ? $joq_card_cats[0] : null;
	                              if ( $joq_card_cat && (int) $joq_card_cat->term_id !== (int) $thiscat->term_id ) : ?>
	                            <div class="joq-category__article-cat"><?php echo esc_html( $joq_card_cat->cat_name ); ?></div>
	                            <?php endif; ?>
	                            <div class="joq-category__article-title">
	                                <?php echo the_title(); ?>
	                            </div>
	                            <div class="joq-category__article-excerpt">
	                                <?php $text = wp_strip_all_tags(get_the_content()); echo wp_trim_words( $text, 40, '...' ); ?>
	                            </div>
	                            <div class="joq-category__article-meta">
	                                <?php $catAuthor = joq_author_line(); if ( $catAuthor ) : ?><span class="joq-category__article-author">Shkruar nga: <?php echo esc_html( $catAuthor ); ?></span> | <?php endif; ?>Publikuar m&euml;: <?php echo  get_the_date( 'd.m.Y, H:i' );?>
	                            </div>
	                        </a>
	                    </div>
	                    
	                </div>
	                <?php endwhile; ?>

                </div>

                <?php /* Without JS nothing can reveal the rest, so show everything. */ ?>
                <noscript><style>.joq-category__article.is-hidden{display:flex}.joq-category__load-more{display:none}</style></noscript>

                <?php if ( $joq_cat_i > $joq_cat_step ) : ?>
                <div class="joq-category__load-more">
	                <button type="button" id="load-more-art" class="joq-category__load-btn"
	                        data-step="<?php echo (int) $joq_cat_step; ?>">M&euml; shum&euml;</button>
	            </div>
	            <?php endif; ?>

            </div>
            <!-- End Category News List -->

            

            <!-- Category Right Block -->
            <div class="joq-category__sidebar">
                <!-- Category Top News -->
                <div class="home-last-news home-content-item category-tpl" style="display: block;">
                	<div class="mobile-only" style="width: 300px; margin: -5px auto 5px;  max-height: 250px; overflow: hidden;">
						<div id="crit300x250-2"></div>
					</div>
					<div class="mobile-only" style="width:300px; height:auto; margin:0 auto 5px;">
						<div class="adunit-1" data-adunit="joq__MOB300x100-3" data-dimensions="300x100" style="width:300px; height:100px;"></div>
					</div>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__PC-300x250-5" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<?php if ($wp_query->get_queried_object()->slug === 'sport') {  ?>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
                        <div class="adunit-1" data-adunit="joq__300x250-4" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                    </div>
                	<?php } ?>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__300x250-3" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__MOB-300x250-first" data-dimensions="300x250"></div>
					</div>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__MOB-300x250-mid" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="pc-only" style="width:300px; max-height:250px; margin-bottom:5px; overflow: hidden;">
						<div id="lupon300x250-1"></div>
					</div>

					<?php /* "Me te Lexuarat" as the design system's .joq-post__widget.
					         It was built from newstyle.css classes (.article-wrapper /
					         .block-title / .top-news-articles), which is why it never
					         looked like the mockup. The category scoping stays: the old
					         /myAjax/top-news-post2.html fragment is site-wide and put
					         other categories' stories on the page. */
						$GLOBALS['joq_widget_cat'] = (int) $thiscat->term_id;
						get_template_part( 'templates/parts/most-read-widget' );
					?>
					
					<div class="pc-mob-banner" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__PC-300x250-last" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
						<div class="adunit-1" data-adunit="joq__MOB-300x100-mid" data-dimensions="300x100" style="width:300px; height:100px;"></div>
					</div>
					<div class="mobile-only" style="width:300px; height:auto; margin:0 auto 5px;">
						<div class="adunit-1" data-adunit="joq__MOB-300x100-2" data-dimensions="300x100"></div>
					</div>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__300x250-bottomRight" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="mobile-only" style="width:300px; height:100px; margin:0 auto 10px;">
						<div class="adunit-1" data-adunit="joq__MOB-300x100-second" data-dimensions="300x100" style="width:300px; height:100px;"></div>
					</div>
					<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__300x250-2" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__PC-300x250-1" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="pc-only" style="width:300px; height:auto; margin-bottom:5px;">
						<div class="adunit-1" data-adunit="joq__300x250" data-dimensions="300x250" style="width:300px; height:250px;"></div>
					</div>
					<div class="mobile-only" style="width: 320px; margin: 0 auto;  max-height: 50px; overflow: hidden;">
						<div id="crit320x50-1"></div>
					</div>
					<div class="pc-only" style=" max-height: 250px; overflow: hidden; width: 300px;">
						<div id="lupon300x250-2"></div>
					</div>

                    
                </div>
                <!-- Category Top News  -->
            </div>
            <!-- End Category Right Block -->


        <!-- Download JOQ App -->
        <div class="download-app mobile-only" style="margin: 50px 0 30px;">
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
            
            <?php
              /* Same reason as the sidebar: last-four-news3.html is one site-wide
                 file, so it used to drop other categories' stories in here. */
              $joq_cat_latest = new WP_Query( array(
                'post_type'           => 'post',
                'post_status'         => 'publish',
                'cat'                 => $thiscat->term_id,
                'posts_per_page'      => 4,
                'ignore_sticky_posts' => true,
                'no_found_rows'       => true,
              ) );
            ?>
            <div class="footer-last-news-articles-mob">
                <?php foreach ( $joq_cat_latest->posts as $joq_lp ) :
                  $joq_lp_img = fix_post_thumbnail( get_the_post_thumbnail_url( $joq_lp->ID, 'img2' ) );
                ?>
                <div class="home-category-article">
                    <div class="home-category-image">
                        <a href="<?php echo get_permalink( $joq_lp->ID ); ?>"<?php if ( $joq_lp_img ) : ?> style="background-image: url(<?php echo esc_url( $joq_lp_img ); ?>);"<?php endif; ?>></a>
                    </div>
                    <div class="home-category-post">
                        <a href="<?php echo get_permalink( $joq_lp->ID ); ?>">
                            <div class="home-category-post-title">
                                <?php echo get_the_title( $joq_lp->ID ); ?>
                            </div>
                            <div class="home-category-post-author">
                                <?php $lpAuthor = joq_author_line( $joq_lp ); if ( $lpAuthor ) : ?>Shkruar nga: <?php echo esc_html( $lpAuthor ); ?> | <?php endif; ?>Publikuar m&euml;: <?php echo get_the_date( 'd.m.Y, H:i', $joq_lp->ID ); ?>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
                
        </div>
        <!-- End last news mobile -->


    </div>
    <!-- End Category Body -->




<?php
$GLOBALS['joq_footer_last_news']     = true;
$GLOBALS['joq_footer_last_news_cat'] = $thiscat->term_id;
get_template_part( 'templates/joqFooter' );
?>
    

    <a href="https://wa.me/+355699299998" id="whatsapp-button" class="mobile-only">
        <img width="24px" src="https://static.joq-albania.com/assets/images/whatsapp-logo.svg">
    </a>



    <script src="https://static.joq-albania.com/assets/js/newscript.js" type="text/javascript"></script>
    <script src="https://static.joq-albania.com/assets/js/bannersys.js?v2.05" type="text/javascript"></script>

    <script src="/wp-content/themes/joq/assets/js/joq-design-system.js?v=3.8"></script>
</body>

</html>

<?php



$content = ob_get_contents();
ob_end_clean();

$nameANDfolder = '';
// decide the name and folder

$thiscat = $wp_query->get_queried_object();
// var_dump();

if ($thiscat->slug == 'maqedoni' || $thiscat->slug == 'kosova' || $thiscat->slug == 'english') {
    $nameANDfolder = $thiscat->slug . '/index.html'; 
} else {
    $nameANDfolder = 'kategori/' . $thiscat->slug . '.html';
}



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