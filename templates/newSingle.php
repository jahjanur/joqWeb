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
    <meta property="og:image" content="<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $ID,'full' )); ?>" />
    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo esc_attr($title); ?>" />
	<meta name="twitter:description" content="<?php echo wp_trim_words( $text, 40, '...' ); ?>" />
	<meta name="twitter:image" content="<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $ID,'full' )); ?>" />
	<meta name="twitter:site" content="@JoqAlbania" />

    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="https://static.joq-albania.com/assets/images/facivon4.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://joq-albania.com/assets/css/font-awesome.min.css" type="text/css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/swiper-bundle.min.css" type="text/css" />
    
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v1.02" type="text/css" />
    
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
	
	<!-- Toolbar -->
	<div class="fixed-header category-tpl">
		<div class="container">
			<div class="header-content">
				<div class="header-socials pc-only">

					<a href="https://www.youtube.com/channel/UCVsMVFcGZgxXTl5A-usiIBQ/?sub_confirmation=1" target="_blank" class="youtube-icon" title="Youtube">
						<svg viewBox="0 0 512 512"><path d="m224.113281 303.960938 83.273438-47.960938-83.273438-47.960938zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm159.960938 256.261719s0 51.917969-6.585938 76.953125c-3.691406 13.703125-14.496094 24.507812-28.199219 28.195312-25.035156 6.589844-125.175781 6.589844-125.175781 6.589844s-99.878906 0-125.175781-6.851562c-13.703125-3.6875-24.507813-14.496094-28.199219-28.199219-6.589844-24.769531-6.589844-76.949219-6.589844-76.949219s0-51.914062 6.589844-76.949219c3.6875-13.703125 14.757812-24.773437 28.199219-28.460937 25.035156-6.589844 125.175781-6.589844 125.175781-6.589844s100.140625 0 125.175781 6.851562c13.703125 3.6875 24.507813 14.496094 28.199219 28.199219 6.851562 25.035157 6.585938 77.210938 6.585938 77.210938zm0 0"/></svg>
					</a>

					<a href="https://twitter.com/JoqAlbania" target="_blank" class="twitter-icon" title="Twitter">
						<svg viewBox="0 0 97.75 97.75">
							<g>
								<path d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z    M78.43,35.841c0.023,0.577,0.035,1.155,0.035,1.736c0,20.878-15.887,42.473-42.473,42.473c-8.127,0-16.04-2.319-22.883-6.708   c-0.143-0.091-0.202-0.268-0.145-0.427c0.057-0.158,0.218-0.256,0.383-0.237c1.148,0.137,2.322,0.205,3.487,0.205   c6.323,0,12.309-1.955,17.372-5.664c-6.069-0.512-11.285-4.619-13.161-10.478c-0.039-0.122-0.011-0.255,0.073-0.351   c0.085-0.096,0.215-0.138,0.339-0.115c1.682,0.319,3.392,0.34,5.04,0.072c-6.259-1.945-10.658-7.808-10.658-14.483l0.002-0.194   c0.003-0.127,0.072-0.243,0.182-0.306c0.109-0.064,0.245-0.065,0.355-0.003c1.632,0.906,3.438,1.488,5.291,1.711   c-3.597-2.867-5.709-7.213-5.709-11.862c0-2.682,0.71-5.318,2.054-7.623c0.06-0.103,0.166-0.169,0.284-0.178   c0.119-0.012,0.234,0.04,0.309,0.132c7.362,9.03,18.191,14.59,29.771,15.305c-0.193-0.972-0.291-1.974-0.291-2.985   c0-8.361,6.802-15.162,15.162-15.162c4.11,0,8.082,1.689,10.929,4.641c3.209-0.654,6.266-1.834,9.09-3.508   c0.129-0.077,0.291-0.065,0.41,0.028c0.116,0.094,0.164,0.25,0.118,0.394c-0.957,2.993-2.823,5.604-5.33,7.489   c2.361-0.411,4.652-1.105,6.831-2.072c0.146-0.067,0.319-0.025,0.424,0.098c0.104,0.124,0.113,0.301,0.023,0.435   C83.759,31.175,81.299,33.744,78.43,35.841z"/>
							</g>
						</svg> 
					</a>

					<a href="https://www.facebook.com/joqalbania/" target="_blank" class="facebook-icon" title="Facebook">
						<svg viewBox="0 0 97.75 97.75">
							<g>
								<path d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z    M67.521,24.89l-6.76,0.003c-5.301,0-6.326,2.519-6.326,6.215v8.15h12.641L67.07,52.023H54.436v32.758H41.251V52.023H30.229V39.258   h11.022v-9.414c0-10.925,6.675-16.875,16.42-16.875l9.851,0.015V24.89L67.521,24.89z"/>
							</g>
						</svg>
					</a>

					<a href="https://www.instagram.com/joqalbania/" target="_blank" class="instagram-icon" title="Instagram">
						<svg viewBox="0 0 512 512"><path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"/><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"/></svg>
					</a>

				</div>
				<div class="header-home mobile-only">
					<a href="/faqe/live.html">
		                Live
		            </a>
				</div>
				<div class="header-logo">
					<a href="/" title="JOQ Albania">
						<img src="https://static.joq-albania.com/assets/images/logoJOQ.jpg" alt="JoqAlbania logo">
					</a>
				</div>
				<div class="header-search">
					<a href="/faqe/live.html" class="live-svg-wrapper pc-only">
			            <svg class="live-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 69.01" style="enable-background:new 0 0 122.88 69.01" xml:space="preserve">
			                <style type="text/css"><![CDATA[
			                  .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#E74040;}
			                  .st1{fill:#242424;}
			                ]]></style>
			              <g><path class="st0" d="M6.78,9.11H91.9c-0.15,0.81-0.25,1.65-0.3,2.49c-0.27,5.16,1.57,9.95,4.77,13.51 c3.06,3.4,7.37,5.69,12.26,6.12c0.34,0.05,0.69,0.08,1.05,0.08V31.3c0.73,0.02,1.45,0.01,2.16-0.05v30.98 c0,3.72-3.06,6.78-6.78,6.78H6.78C3.06,69.01,0,65.96,0,62.23V15.88C0,12.16,3.05,9.11,6.78,9.11L6.78,9.11L6.78,9.11z M110.97,0.02c6.94,0.37,12.26,6.29,11.89,13.23c-0.37,6.94-6.29,12.26-13.23,11.89c-6.94-0.37-12.26-6.29-11.89-13.23 C98.11,4.98,104.03-0.35,110.97,0.02L110.97,0.02z M110.71,4.71c2.18,0.12,4.1,1.1,5.45,2.6c1.35,1.5,2.12,3.51,2.01,5.69 c-0.12,2.18-1.1,4.1-2.6,5.45c-1.5,1.35-3.51,2.13-5.69,2.01c-2.18-0.12-4.11-1.1-5.45-2.6c-1.35-1.5-2.12-3.51-2.01-5.69 c0.12-2.18,1.1-4.11,2.6-5.45C106.53,5.37,108.54,4.59,110.71,4.71L110.71,4.71z M28.15,22.07v27.19h5.63v6.79h-15V22.07H28.15 L28.15,22.07L28.15,22.07z M46.4,22.07v33.98h-9.36V22.07H46.4L46.4,22.07L46.4,22.07z M73.28,22.07l-4.73,33.98H54.39l-5.42-33.98 h9.86c1.11,9.37,1.92,17.3,2.43,23.78c0.5-6.55,1.02-12.36,1.54-17.44l0.62-6.34H73.28L73.28,22.07L73.28,22.07z M75.86,22.07 h15.59v6.79h-6.22v6.49h5.82v6.44h-5.82v7.48h6.86v6.79H75.86V22.07L75.86,22.07L75.86,22.07z"/><path class="st1" d="M110.56,7.69c2.7,0.14,4.77,2.45,4.63,5.14c-0.14,2.7-2.45,4.77-5.14,4.63c-2.7-0.14-4.77-2.45-4.63-5.14 S107.86,7.55,110.56,7.69L110.56,7.69z"/></g>
			            </svg>
			        </a>
					<svg viewBox="0 0 118.783 118.783" class="menu-search" style="cursor: pointer;">
						<g>
							<path d="M115.97,101.597L88.661,74.286c4.64-7.387,7.333-16.118,7.333-25.488c0-26.509-21.49-47.996-47.998-47.996   S0,22.289,0,48.798c0,26.51,21.487,47.995,47.996,47.995c10.197,0,19.642-3.188,27.414-8.605l26.984,26.986   c1.875,1.873,4.333,2.806,6.788,2.806c2.458,0,4.913-0.933,6.791-2.806C119.72,111.423,119.72,105.347,115.97,101.597z    M47.996,81.243c-17.917,0-32.443-14.525-32.443-32.443s14.526-32.444,32.443-32.444c17.918,0,32.443,14.526,32.443,32.444   S65.914,81.243,47.996,81.243z"/>
						</g>
					</svg>
					<a title="English" href="/english/index.html" class="en-logo">
	                    <svg style="width: 22px; height:  22px;" viewBox="0 0 512.002 512.002">
	                        <path style="fill:#41479B;" d="M503.172,423.725H8.828c-4.875,0-8.828-3.953-8.828-8.828V97.104c0-4.875,3.953-8.828,8.828-8.828  h494.345c4.875,0,8.828,3.953,8.828,8.828v317.793C512,419.772,508.047,423.725,503.172,423.725z"></path>
	                        <path style="fill:#F5F5F5;" d="M512,97.104c0-4.875-3.953-8.828-8.828-8.828h-39.495l-163.54,107.147V88.276h-88.276v107.147  L48.322,88.276H8.828C3.953,88.276,0,92.229,0,97.104v22.831l140.309,91.927H0v88.276h140.309L0,392.066v22.831  c0,4.875,3.953,8.828,8.828,8.828h39.495l163.54-107.147v107.147h88.276V316.578l163.54,107.147h39.495  c4.875,0,8.828-3.953,8.828-8.828v-22.831l-140.309-91.927H512v-88.276H371.691L512,119.935V97.104z"></path>
	                        <g>
	                            <polygon style="fill:#FF4B55;" points="512,229.518 282.483,229.518 282.483,88.276 229.517,88.276 229.517,229.518 0,229.518    0,282.483 229.517,282.483 229.517,423.725 282.483,423.725 282.483,282.483 512,282.483  "></polygon>
	                            <path style="fill:#FF4B55;" d="M178.948,300.138L0.25,416.135c0.625,4.263,4.14,7.59,8.577,7.59h12.159l190.39-123.586h-32.428   V300.138z"></path>
	                            <path style="fill:#FF4B55;" d="M346.388,300.138H313.96l190.113,123.404c4.431-0.472,7.928-4.09,7.928-8.646v-7.258   L346.388,300.138z"></path>
	                            <path style="fill:#FF4B55;" d="M0,106.849l161.779,105.014h32.428L5.143,89.137C2.123,90.54,0,93.555,0,97.104V106.849z"></path>
	                            <path style="fill:#FF4B55;" d="M332.566,211.863L511.693,95.586c-0.744-4.122-4.184-7.309-8.521-7.309h-12.647L300.138,211.863   H332.566z"></path>
	                        </g>
	                    </svg>
	                </a>
	                <svg viewBox="0 0 512 512" id="open-mobile-menu" class="mobile-only"><path d="m464.883 64.267h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 208.867h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 353.467h-417.766c-25.98 0-47.117 21.137-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.012-21.137-47.149-47.117-47.149z"/></svg>
	                <svg id="close-mobile-menu" class="hide" viewBox="0 0 348.333 348.334">
						<g>
							<path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85   c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563   c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85   l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554   L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"/>
						</g>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<!-- End Toolbar -->

	<div class="spacer-menu category-tpl"></div>

	<!-- Hover Menu -->
    <div class="hovermenu pc-only category-tpl <?php echo get_the_category($post->ID)[0]->slug; ?>-border-color">
    	<div class="container">

    		<div class="hovermenu-wrapper">
    			<div class="hovermenu-block">
    				<div class="hovermenu-block-title">Kategoritë</div>
    				<ul>
		                <li>
		                    <a href="/kategori/vec-e-jona.html"> Veç e Jona </a>
		                </li>
		                <li>
		                    <a href="/kategori/lajme.html"> Lajme </a>
		                </li>
		                <li>
		                    <a href="/kategori/teknologji.html"> Teknologji </a>
		                </li>
		                <li>
		                    <a href="/kategori/bota.html"> Bota </a>
		                </li>
		                <li>
		                    <a href="/kategori/argetim.html"> Argëtim </a>
		                </li>
		                <li>
	                        <a href="/maqedoni/index.html"> Maqedoni </a>
	                    </li>
		            </ul>
    			</div>
    			<div class="hovermenu-block-seperator"></div>
	            <div class="hovermenu-block">
	            	<div class="hovermenu-block-title">Rreth Nesh</div>
	            	<ul>
		                <li>
		                    <a href="/faqe/rreth-nesh.html"> Rreth Nesh </a>
		                </li>
		                <li>
		                    <a href="/faqe/puno-me-ne.html"> Puno me ne! </a>
		                </li>

	                    <li>
	                        <a href="/faqe/live.html"> Live </a>
	                    </li>
		            </ul>
	            </div>
	            <div class="hovermenu-block-seperator"></div>
	            <div class="hovermenu-block">
	            	<div class="hovermenu-block-title">Kontakt</div>
		            <ul>
		                <li>
		                    <a href="/faqe/reklamo.html">Marketing </a>
		                </li>
		                <li>
		                    <a href="/faqe/kontakto.html"> Kontakt </a>
		                </li>
		            </ul>
	            </div>
	            <div class="hovermenu-block-seperator"></div>
	            <div class="hovermenu-block">
	            	<div class="hovermenu-block-title">Privatësia</div>
	            	<ul>
		                <li>
		                    <a href="/faqe/politika-e-privatesise.html"> Politika e privatësisë </a>
		                </li>
		                <li>
		                    <a href="/faqe/kushtet-e-perdorimit.html"> Kushtet e përdorimit </a>
		                </li>
		            </ul>
	            </div>
    		</div>

		</div>
    </div>
    <!-- End Hover Menu -->

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <ul>
            <a href="/kategori/vec-e-jona.html">
                <li data-name="tonat">Veç e jona</li>
            </a>
            <a href="/kategori/lajme.html">
                <li data-name="aktualitet">News</li>
            </a>
            <a href="/kategori/sondazhe.html">
                <li data-name="sondazhe">Sondazhe</li>
            </a>
            <a href="/kosova/index.html">
                <li data-name="kosova">Kosova</li>
            </a>
            <a href="/maqedoni/index.html">
                <li data-name="maqedoni">Maqedoni</li>
            </a>
            <a href="/faqe/live.html">
                <li data-name="maqedoni">Live</li>
            </a>
            <a href="/kategori/bota.html">
                <li data-name="perditshmeri">Bota</li>
            </a>
            <a href="/kategori/persekutimi-ndaj-joq.html">
                <li data-name="persekutimi-ndaj-joq">
                	Persekutimi ndaj JOQ
            	</li>
         	</a>
            <!-- <a href="https://tehumbura.joq-albania.com/te-humbura/">
	          <li data-name="te-humbura">Të humbura</li>
	      	</a> -->
            <a href="/kategori/sport.html">
                <li data-name="perditshmeri">Sport</li>
            </a>
            <a href="/kategori/udhetime.html">
                <li data-name="udhetime">Travel</li>
            </a>
            <a href="/kategori/teknologji.html">
                <li data-name="shkence">Teknologji</li>
            </a>
            <a href="/kategori/kuriozitete.html">
                <li data-name="kuriozitete">Kuriozitete</li>
            </a>
            <a href="/kategori/thashetheme.html">
                <li data-name="thashetheme">Thashetheme</li>
            </a>
            <a href="/kategori/udhetime.html">
                <li data-name="udhetime">Udhetime</li>
            </a>
            <a href="/kategori/shendeti.html">
                <li data-name="shendeti">Shëndeti</li>
            </a>
            <a href="/kategori/si-te.html">
                <li data-name="si-te">Si të...</li>
            </a>
            <a href="/faqe/puno-me-ne.html" target="_blank">
                <li>Puno me ne!</li>
            </a>
            <a href="/faqe/reklamo.html" target="_blank">
                <li>Marketing</li>
            </a>
            <a href="/faqe/politika-e-privatesise.html" target="_blank">
                <li>Politikat e Privatësisë</li>
            </a>
            <a href="/faqe/rreth-nesh.html" target="_blank">
                <li>Rreth Nesh</li>
            </a>
            <a href="/faqe/kushtet-e-perdorimit.html" target="_blank">
                <li>Kushtet e Përdorimit</li>
            </a>
            <a href="/faqe/kontakto.html" target="_blank">
                <li>Kontakt</li>
            </a>
        </ul>
    </div>
    <!-- End Mobile Menu -->

    <!-- Search -->
    <div class="full-search category-tpl">
        <img class="close-search" src="https://static.joq-albania.com/assets/images/icons/close.svg">
        <form action="/kerko.html" method="GET">
            <input type="text" spellcheck="false" name="search" placeholder="Kërko dhe shtyp enter" required="">
        </form>
    </div>
    <!-- End Search -->

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


	        <div class="padding-mobile category-body" style="position: relative;">

	        	<div class="fixed-left-banner pc-only">
                    <div class="adunit-1" data-adunit="joq__floating-left" data-dimensions="160x600" style="width:160px; height:600px;"></div>
                </div>

	    		<div class="news-left-block">
    			
	    			<div class="news-wrapper">
	    			
		    			<div class="news-title">
		    				<h1>
		    					<?php echo the_title(); ?>
		    				</h1>
		    			</div>
		    			<div class="news-author">
		    				Shkruar nga: <?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?> | Publikuar më: <?php echo  get_the_date( 'd.m.Y, H:i' );?>
		    				<?php if (get_field('english_news_id')) { ?>
	                            | <a href="https://joq-albania.com/artikull/<?php echo get_field('english_news_id'); ?>.html">
	                                Read in english
	                            </a>
                            <?php } ?>
		    			</div>

		    			<div class="news-social-shares">
		    				<ul class="rrssb-buttons clearfix rrssb-1">
		                            <li class="rrssb-facebook">
		                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://joq-albania.com/artikull/<?php echo $ID ?>.html" class="popup" target="_blank">
		                                    <span class="rrssb-icon"><svg xmlns="https://w3.org/2000/svg" viewBox="0 0 29 29">
		                                            <path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"></path></svg></span>
		                                    <span class="rrssb-text">Share</span>
		                                </a>
		                            </li>
		                            <li class="rrssb-twitter">
		                                <a href="https://twitter.com/intent/tweet?text=https://joq-albania.com/artikull/<?php echo $ID ?>.html" class="popup" target="_blank">
		                                    <span class="rrssb-icon"><svg xmlns="https://w3.org/2000/svg" viewBox="0 0 28 28">
		                                            <path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"></path></svg></span>
		                                    <span class="rrssb-text">Share</span>
		                                </a>
		                            </li>
		                            <li class="rrssb-newEntry mobile-only">
		                                <a id="shareWhatsapp" style="background-color: #1bd741;" href="whatsapp://send?text=https://joq-albania.com/artikull/<?php echo $ID ?>.html" target="_blank">
		                                    <span class="rrssb-icon newIcon" style="padding-top: 6px;">
		                                        <svg x="0px" y="0px" viewBox="0 0 455.731 455.731" style="width: 22px; height: 22px;" xml:space="preserve">
		                                            <g>
		                                                <rect x="0" y="0" style="fill:#1BD741;" width="455.731" height="455.731"></rect>
		                                                <g>
		                                                    <path style="fill:#FFFFFF;" d="M68.494,387.41l22.323-79.284c-14.355-24.387-21.913-52.134-21.913-80.638
																c0-87.765,71.402-159.167,159.167-159.167s159.166,71.402,159.166,159.167c0,87.765-71.401,159.167-159.166,159.167
																c-27.347,0-54.125-7-77.814-20.292L68.494,387.41z M154.437,337.406l4.872,2.975c20.654,12.609,44.432,19.274,68.762,19.274
																c72.877,0,132.166-59.29,132.166-132.167S300.948,95.321,228.071,95.321S95.904,154.611,95.904,227.488
																c0,25.393,7.217,50.052,20.869,71.311l3.281,5.109l-12.855,45.658L154.437,337.406z"></path>
		                                                    <path style="fill:#FFFFFF;" d="M183.359,153.407l-10.328-0.563c-3.244-0.177-6.426,0.907-8.878,3.037
																	c-5.007,4.348-13.013,12.754-15.472,23.708c-3.667,16.333,2,36.333,16.667,56.333c14.667,20,42,52,90.333,65.667
																	c15.575,4.404,27.827,1.435,37.28-4.612c7.487-4.789,12.648-12.476,14.508-21.166l1.649-7.702c0.524-2.448-0.719-4.932-2.993-5.98
																	l-34.905-16.089c-2.266-1.044-4.953-0.384-6.477,1.591l-13.703,17.764c-1.035,1.342-2.807,1.874-4.407,1.312
																	c-9.384-3.298-40.818-16.463-58.066-49.687c-0.748-1.441-0.562-3.19,0.499-4.419l13.096-15.15
																	c1.338-1.547,1.676-3.722,0.872-5.602l-15.046-35.201C187.187,154.774,185.392,153.518,183.359,153.407z"></path>
		                                                </g>
		                                            </g>
		                                        </svg>
		                                    </span>
		                                    <span class="rrssb-text">Share</span>
		                                </a>
		                            </li>
		                            <li class="rrssb-newEntry mobile-only" data-size="0" style="">
		                                <a id="shareViber" style="background-color: #7d3daf;" href="viber://forward?text=https://joq-albania.com/artikull/<?php echo $ID ?>.html" target="_blank">
		                                    <span class="rrssb-icon newIcon" style="padding-top: 6px;">
		                                        <svg viewBox="0 0 455.731 455.731" style="width: 22px; height: 22px;" >
		                                            <g>
		                                                <rect x="0" y="0" style="fill:#7D3DAF;" width="455.731" height="455.731"></rect>
		                                                <g>
		                                                    <path style="fill:#FFFFFF;" d="M371.996,146.901l-0.09-0.36c-7.28-29.43-40.1-61.01-70.24-67.58l-0.34-0.07
																		c-48.75-9.3-98.18-9.3-146.92,0l-0.35,0.07c-30.13,6.57-62.95,38.15-70.24,67.58l-0.08,0.36c-9,41.1-9,82.78,0,123.88l0.08,0.36
																		c6.979,28.174,37.355,58.303,66.37,66.589v32.852c0,11.89,14.49,17.73,22.73,9.15l33.285-34.599
																		c7.219,0.404,14.442,0.629,21.665,0.629c24.54,0,49.09-2.32,73.46-6.97l0.34-0.07c30.14-6.57,62.96-38.15,70.24-67.58l0.09-0.36
																		C380.996,229.681,380.996,188.001,371.996,146.901z M345.656,264.821c-4.86,19.2-29.78,43.07-49.58,47.48
																		c-25.921,4.929-52.047,7.036-78.147,6.313c-0.519-0.014-1.018,0.187-1.38,0.559c-3.704,3.802-24.303,24.948-24.303,24.948
																		l-25.85,26.53c-1.89,1.97-5.21,0.63-5.21-2.09v-54.422c0-0.899-0.642-1.663-1.525-1.836c-0.005-0.001-0.01-0.002-0.015-0.003
																		c-19.8-4.41-44.71-28.28-49.58-47.48c-8.1-37.15-8.1-74.81,0-111.96c4.87-19.2,29.78-43.07,49.58-47.48
																		c45.27-8.61,91.17-8.61,136.43,0c19.81,4.41,44.72,28.28,49.58,47.48C353.765,190.011,353.765,227.671,345.656,264.821z"></path>
		                                                    <path style="fill:#FFFFFF;" d="M270.937,289.942c-3.044-0.924-5.945-1.545-8.639-2.663
																			c-27.916-11.582-53.608-26.524-73.959-49.429c-11.573-13.025-20.631-27.73-28.288-43.292c-3.631-7.38-6.691-15.049-9.81-22.668
																			c-2.844-6.948,1.345-14.126,5.756-19.361c4.139-4.913,9.465-8.673,15.233-11.444c4.502-2.163,8.943-0.916,12.231,2.9
																			c7.108,8.25,13.637,16.922,18.924,26.485c3.251,5.882,2.359,13.072-3.533,17.075c-1.432,0.973-2.737,2.115-4.071,3.214
																			c-1.17,0.963-2.271,1.936-3.073,3.24c-1.466,2.386-1.536,5.2-0.592,7.794c7.266,19.968,19.513,35.495,39.611,43.858
																			c3.216,1.338,6.446,2.896,10.151,2.464c6.205-0.725,8.214-7.531,12.562-11.087c4.25-3.475,9.681-3.521,14.259-0.624
																			c4.579,2.898,9.018,6.009,13.43,9.153c4.331,3.086,8.643,6.105,12.638,9.623c3.841,3.383,5.164,7.821,3.001,12.412
																			c-3.96,8.408-9.722,15.403-18.034,19.868C276.387,288.719,273.584,289.127,270.937,289.942
																			C267.893,289.017,273.584,289.127,270.937,289.942z"></path>
		                                                    <path style="fill:#FFFFFF;" d="M227.942,131.471c36.515,1.023,66.506,25.256,72.933,61.356c1.095,6.151,1.485,12.44,1.972,18.683
																				c0.205,2.626-1.282,5.121-4.116,5.155c-2.927,0.035-4.244-2.414-4.434-5.039c-0.376-5.196-0.637-10.415-1.353-15.568
																				c-3.78-27.201-25.47-49.705-52.545-54.534c-4.074-0.727-8.244-0.918-12.371-1.351c-2.609-0.274-6.026-0.432-6.604-3.675
																				c-0.485-2.719,1.81-4.884,4.399-5.023C226.527,131.436,227.235,131.468,227.942,131.471
																				C264.457,132.494,227.235,131.468,227.942,131.471z"></path>
		                                                    <path style="fill:#FFFFFF;" d="M283.434,203.407c-0.06,0.456-0.092,1.528-0.359,2.538c-0.969,3.666-6.527,4.125-7.807,0.425
																					c-0.379-1.098-0.436-2.347-0.438-3.529c-0.013-7.734-1.694-15.46-5.594-22.189c-4.009-6.916-10.134-12.73-17.318-16.248
																					c-4.344-2.127-9.042-3.449-13.803-4.237c-2.081-0.344-4.184-0.553-6.275-0.844c-2.534-0.352-3.887-1.967-3.767-4.464
																					c0.112-2.34,1.822-4.023,4.372-3.879c8.38,0.476,16.474,2.287,23.924,6.232c15.15,8.023,23.804,20.687,26.33,37.597
																					c0.114,0.766,0.298,1.525,0.356,2.294C283.198,199.002,283.288,200.903,283.434,203.407
																					C283.374,203.863,283.288,200.903,283.434,203.407z"></path>
		                                                    <path style="fill:#FFFFFF;" d="M260.722,202.523c-3.055,0.055-4.69-1.636-5.005-4.437c-0.219-1.953-0.392-3.932-0.858-5.832
																						c-0.918-3.742-2.907-7.21-6.055-9.503c-1.486-1.083-3.17-1.872-4.934-2.381c-2.241-0.647-4.568-0.469-6.804-1.017
																						c-2.428-0.595-3.771-2.561-3.389-4.839c0.347-2.073,2.364-3.691,4.629-3.527c14.157,1.022,24.275,8.341,25.719,25.007
																						c0.102,1.176,0.222,2.419-0.039,3.544C263.539,201.464,262.113,202.429,260.722,202.523
																						C257.667,202.578,262.113,202.429,260.722,202.523z"></path>
		                                                </g>
		                                            </g>
		                                        </svg>
		                                    </span>
		                                    <span class="rrssb-text">Share</span>
		                                </a>
		                            </li>
		                        </ul>
		    			</div>

		    			<div class="news-featured-image">
		    				<img src="<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $ID,'full' )); ?>" alt="<?php echo the_title(); ?>">
		    				<div class="main-image-caption"><?php echo the_post_thumbnail_caption() ?></div>
		    			</div>



	                        <div class="mobile-only" style="text-align: center; height:auto; margin: 0 auto -5px;">
	                            <div class="adunit-1" data-adunit="app_joq__6" data-dimensions="300x100"></div>
	                        </div>


		    			<div class="content-wrapper">

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

		                    <?php $relatedNews =  get_field('te_lidhura');  if( $relatedNews ): ?>

		                    <div class="news-related-news2">
		                    	<?php 
			                    	$related = array();
			                    	foreach ($relatedNews as $value) {
									    array_push($related, $value['id']);
									}
		                    	?>
				    			<div class="block-title" style="text-align: left;">
				    				<!-- T&euml; tjera nga lajme... -->
				    				Të lidhura me lajmin:
				    			</div>

				    			<div class="related-news-article-wrapper2">
				    			<?php	

				    				$args = array(
				    					'type' => 'post',
                						'post_status' => 'publish',
									    'post__in' => $related
									);

									$posts = get_posts($args);

									
									foreach ($posts as $p):?>
										<div class="article-wrapper" style="width: 33.3333%">
											<a href="<?php echo get_permalink( $p->ID ); ?>">
												<div class="article-image">
													<img src="<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $p->ID)) ?>" alt="JoqAlbania">
												</div>
												<div class="article-title">
													<div class="article-title-wrapper">
														<?php echo $p->post_title ?>
													</div>
													<div class="home-category-post-author mobile-only">
										                Shkruar nga: <?php echo get_the_author_meta('first_name', $p->post_author) ?> <?php echo get_the_author_meta('last_name', $p->post_author) ?> | Publikuar më: <?php echo  get_the_date( 'd.m.Y, H:i', $p->ID );?>
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

		    				<div class="telegram-group">
		    					<strong>FACT CHECK:</strong> 
		    					Synimi i JOQ Albania është t’i paraqesë lajmet në mënyrë të saktë dhe të drejtë. Nëse ju shikoni diçka që nuk shkon, jeni të lutur të na e
		    					<a href="mailto:info@joqalbania.com?subject=Fact Check - <?php echo $title; ?>&body=————————————————————————%0AReferring%20URL%3A%20https%3A%2F%2Fjoq-albania.com/artikull/<?php echo $ID ?>.html%0A————————————————————————%0A">raportoni këtu</a>.
		    				</div>

					        <!-- JOQ POLL -->
	                      	<div class="joq-poll-wrapper article-wrapper" style="margin: 0 auto 5px;">

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


		    		<div class="news-related-news">
		    			<?php $postCat = get_the_category($post->ID)[0]->slug;?>
		    			<div class="block-title" style="text-align: left;">
		    				<!-- T&euml; tjera nga <?php echo $postCat; ?>... -->
		    				T&Euml; NGJASHME
		    			</div>

		    			<div class="related-news-article-wrapper"></div>
		    			<script type="text/javascript">

		    				if ('<?php echo $postCat ?>' === 'slide-kryesor-1') {
		    					$('.news-related-news').remove();
		    				} else {
		    					$.get( "/myAjax/more-from-<?php echo $postCat ?>.html", function( data ) {
	                              $( ".related-news-article-wrapper" ).html( data );
	                            });
		    				}
                            
                        </script>

		    		</div>

    				<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        <div class="adunit-1" data-adunit="joq__MOB-300x250-first" data-dimensions="300x250"></div>
                    </div> 

	    		</div>

				<!-- Category Right Block -->
				<div class="category-right-block">



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


    <!-- Footer -->
    <div class="footer-wrapper">
    	<div class="container footer">

    		<!-- Last News -->
    		<div class="footer-last-news pc-only">
    			<div class="footer-last-news-title">
    				Më të fundit
    			</div>
    			<div class="footer-last-news-articles"></div>
                <script type="text/javascript">
                    if ($( window ).width() > 600) {
                        $.get( "/myAjax/last-four-news2.html", function( data ) {
                          $( ".footer-last-news-articles" ).html( data );
                        });  
                    }
                </script>
    		</div>
    		<!-- End Last News -->

    		<!-- Footer Socials -->
    		<div class="footer-socials">
    			<a href="https://www.youtube.com/channel/UCVsMVFcGZgxXTl5A-usiIBQ/?sub_confirmation=1" target="_blank" title="youtube">
    				<div class="footer-social-item youtube">
    					<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
    				</div>
    			</a>
    			<a href="https://twitter.com/JoqAlbania" target="_blank" title="twitter">
	    			<div class="footer-social-item twitter">
						<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
					</div>
    			</a>
    			<a href="https://www.facebook.com/joqalbania/" target="_blank" title="facebook">
	    			<div class="footer-social-item facebook">
						<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
					</div>
    			</a>
    			<a href="https://www.instagram.com/joqalbania/" target="_blank" title="instagram">
	    			<div class="footer-social-item instagram">
						<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
					</div>
    			</a>
    			<a href="#" title="whatsapp">
	    			<div class="footer-social-item whatsapp">
						<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
					</div>
    			</a>
    			<a href="#" title="tiktok">
	    			<div class="footer-social-item tiktok">
						<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
					</div>
    			</a>
    			<a href="#" title="snapchat">
	    			<div class="footer-social-item snapchat">
						<img src="https://static.joq-albania.com/imagesNew/2021/09/Home-Desktop.jpg">
					</div>
    			</a>
    		</div>
    		<!-- End Footer Socials -->

    		<!-- Dergo materialin tend -->
    		<div class="footer-dergo-materialin">
    			<div class="footer-dergo-materialin-button">
    				<a href="https://wa.me/+355699299998" target="_blank">Dërgo materialin tënd këtu</a>
    				<svg viewBox="0 0 512.002 512.002">
						<g>
							<g>
								<path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105    L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795    l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/>
							</g>
						</g>
					</svg>
    			</div>
    		</div>
    		<!-- End Dergo materialin tend -->

    		<!-- Footer Menu -->
    		<div class="footer-menu">
    			<ul>
	                <li>
	                    <a href="/faqe/puno-me-ne.html"> Puno me ne! </a>
	                </li>
	                <li>
	                    <a href="/faqe/reklamo.html">Marketing </a>
	                </li>
	                <li>
	                    <a href="/faqe/politika-e-privatesise.html"> Politika e privatësisë </a>
	                </li>
    				<li>
	                    <a href="/faqe/rreth-nesh.html"> Rreth Nesh </a>
	                </li>
	                <li>
	                    <a href="/faqe/kushtet-e-perdorimit.html"> Kushtet e përdorimit </a>
	                </li>
	                <li>
	                    <a href="/faqe/kontakto.html"> Kontakt </a>
	                </li>
    			</ul>
    		</div>
    		<!-- End Footer Menu -->

    	</div>
    </div>
    <!-- End Footer -->


    <a href="https://wa.me/+355699299998" id="whatsapp-button" class="mobile-only">
        <img width="24px" src="https://static.joq-albania.com/assets/images/whatsapp-logo.svg">
    </a>

    <button id="back-to-top" class="mobile-only" >
    	<svg style="width: 16px; transform: rotate(90deg);fill: #fff;" viewBox="0 0 32 32"><g data-name="Layer 2" id="Layer_2"><path class="cls-1" d="M15.12,15.53,25,5.66a1,1,0,0,1,1.41,1.41l-9.06,9.06,8.8,8.8a1,1,0,0,1,0,1.41h0a1,1,0,0,1-1.42,0l-9.61-9.61A.85.85,0,0,1,15.12,15.53Z"/><path class="cls-1" d="M5.54,15.53l9.88-9.87a1,1,0,1,1,1.41,1.41L7.77,16.13l8.8,8.8a1,1,0,0,1,0,1.41h0a1,1,0,0,1-1.41,0L5.54,16.73A.85.85,0,0,1,5.54,15.53Z"/></g></svg>
    </button>


    <div id="footer-mob-banner" class="mobile-only">
      <div id="close-footer-mob-banner"></div> 
    </div>


	<script src="https://static.joq-albania.com/assets/js/newscript.js" type="text/javascript"></script>
    <script src="https://static.joq-albania.com/assets/js/bannersys.js?v2.11" type="text/javascript"></script>


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
