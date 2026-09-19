<?php
  global $generateLastNewsSys;
?>
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

    <meta property="og:type" content="website" />
    <meta property="og:locale" content="sq_AL" />
    <?php if( is_home() ) { ?>
    <meta name="description" content="Krijuar më 5 shkurt 2010, joq-albania.com është platforma më e madhe e lajmeve unike, argëtuese dhe sociale në hapësirën shqipfolëse. Nga vijnë materialet? Nga ju dhe komuniteti. Përveç kësaj, ne lundrojmë kudo ku ka shqiptarë dhe ju sjellim nga andej më të mirën duke argëtuar qindra mijëra vizitorë në ditë." />
    <link rel="canonical" href="https://joq-albania.com/" />
    <meta name="author" content="JOQ" />
    <meta property="og:url" content="https://joq-albania.com/">
    <meta property="og:title" content="JOQ Albania" />
    <meta property="og:description" content="Krijuar më 5 shkurt 2010, joq-albania.com është platforma më e madhe e lajmeve unike, argëtuese dhe sociale në hapësirën shqipfolëse. Nga vijnë materialet? Nga ju dhe komuniteti. Përveç kësaj, ne lundrojmë kudo ku ka shqiptarë dhe ju sjellim nga andej më të mirën duke argëtuar qindra mijëra vizitorë në ditë." />
    <meta property="og:image" content="https://static.joq-albania.com/assets/images/default.png" />
    <title>JOQ Albania</title>
    <?php } ?>
    <?php if( is_single() || $generateLastNewsSys === 1 ) { ?>
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
    <title><?php echo $title; ?></title>
    <?php   } ?>
    <?php if( is_category() ){ ?>
    <?php 
$thiscat = $wp_query->get_queried_object();
$categoryName = $thiscat->name;
$categorySlug = $thiscat->slug;
?>
    <meta name="description" content="JOQ Lajme nga kategoria <?php echo $categoryName ?>" />
    <link rel="canonical" href="https://joq-albania.com/kategori/<?php echo $categorySlug ?>.html" />
    <meta name="author" content="JOQ" />
    <meta property="og:title" content="JOQ -  <?php echo $categoryName ?> " />
    <meta property="og:description" content="JOQ Lajme nga kategoria <?php echo $categoryName ?>" />
    <meta property="og:image" content="https://static.joq-albania.com/assets/images/default.png" />
    <title>JOQ - <?php echo $categoryName ?></title>
    <?php } ?>
    <link rel="shortcut icon" href="https://static.joq-albania.com/assets/images/facivon4.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/k2.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/system.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/blue_template.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/megamenu.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/off-canvas.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/icomoon.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/roboto-fonts.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/home.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/style2.0.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/sp_social.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/socialShare.css" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/joq.css?v=1.04" type="text/css" />
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/static_p.css?v=1.01" type="text/css" />

    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="/wp-content/themes/joq/assets/css/joq-design-system.css?v=6.0" type="text/css" />



    <style type="text/stylesheet">
        @-webkit-viewport   { width: device-width; }
        @-moz-viewport      { width: device-width; }
        @-ms-viewport       { width: device-width; }
        @-o-viewport        { width: device-width; }
        @viewport           { width: device-width; }
    </style>


    <script src="https://static.joq-albania.com/assets/js/jquery.min.js" type="text/javascript"></script>

<!-- aY5sy23t&J6rU4= -->
    <!-- Lupon DFP
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script async src="https://lupon.media/prebid/prebid9.js"></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
<script src="https://cdn.adxpremium.com/hbgsript_jetaoshqef.al_desktop_31.js"></script>
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/194204832/adxp_jetaoshqef_300x250_1_HB', [300, 250], 'div-gpt-ad-1543245372331-0').addService(googletag.pubads());
    googletag.defineSlot('/194204832/adxp_jetaoshqef_300x250_2_HB', [300, 250], 'div-gpt-ad-1543245462242-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.pubads().disableInitialLoad();
    googletag.enableServices();
  });
</script>
 -->

    <!-- -->
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


    <script type="text/javascript" src="https://static.joq-albania.com/assets/js/jquery.fancybox.js?v=2.1.5"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.6/postscribe.min.js"></script>
    <!--<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({article:'auto'});
  !function (e, f, u, i) {
    if (!document.getElementById(i)){
      e.async = 1;
      e.src = u;
      e.id = i;
      f.parentNode.insertBefore(e, f);
    }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/joqal/loader.js',
  'tb_loader_script');
  if(window.performance && typeof window.performance.mark == 'function')
    {window.performance.mark('tbl_ic');}
</script>-->


    <script async src="//ogilvi.medium.al/www/delivery/asyncjs.php"></script>
    <!--    <script async src="//paslsa.com/c/joq-albania.com.js"></script>-->

    <!-- Mediadesk -->
    <script src="https://mediadesk.al/ad/joq/h.js"></script>

    <?php //wp_head(); ?>


</head>


<body class="homeColor">

    <style>
        div#joq-smartbanner {
            position: relative;
            width: 100%;
            height: 70px;
            background: #ecebeb;
            padding: 10px;
            display: none;
        }

        .smartbanner-app-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background-image: url(https://static.joq-albania.com/assets/images/joq.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-right: 10px;
        }

        .close-smartbanner svg {
            width: 11px;
            height: 11px;
            margin: 20px 10px 20px 4px;
        }

        .smartbanner-app-info {
            width: calc(100% - 140px);
            line-height: 1.1;
            padding: 5px 0;
        }

        .smartbanner-app-desc {
            font-size: 12px;
        }

        .smartbanner-app-review {
            display: inline;
        }

        .smartbanner-app-review svg {
            display: inline-block;
            width: 10px;
        }

        .smartbanner-app-install {
            line-height: 50px;
            color: #0072ff;
        }

    </style>
    <div class="mobile_only">
        <div id="joq-smartbanner">
            <div class="close-smartbanner">

                <svg height="12px" viewBox="0 0 365.696 365.696" width="12px" xmlns="https://www.w3.org/2000/svg">
                    <path fill="#696969" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" /></svg>

            </div>
            <div class="smartbanner-app-icon"></div>
            <div class="smartbanner-app-info">
                <div class="smartbanner-app-title">JOQ Albania</div>
                <div class="smartbanner-app-review">
                    <svg viewBox="0 0 128 128" xmlns="https://www.w3.org/2000/svg">
                        <path d="m64 9.314 17.768 36.003 39.732 5.773-28.75 28.025 6.787 39.571-35.537-18.683-35.537 18.683 6.787-39.571-28.75-28.025 39.732-5.773z" fill="#fcb44d" /></svg>
                    <svg viewBox="0 0 128 128" xmlns="https://www.w3.org/2000/svg">
                        <path d="m64 9.314 17.768 36.003 39.732 5.773-28.75 28.025 6.787 39.571-35.537-18.683-35.537 18.683 6.787-39.571-28.75-28.025 39.732-5.773z" fill="#fcb44d" /></svg>
                    <svg viewBox="0 0 128 128" xmlns="https://www.w3.org/2000/svg">
                        <path d="m64 9.314 17.768 36.003 39.732 5.773-28.75 28.025 6.787 39.571-35.537-18.683-35.537 18.683 6.787-39.571-28.75-28.025 39.732-5.773z" fill="#fcb44d" /></svg>
                    <svg viewBox="0 0 128 128" xmlns="https://www.w3.org/2000/svg">
                        <path d="m64 9.314 17.768 36.003 39.732 5.773-28.75 28.025 6.787 39.571-35.537-18.683-35.537 18.683 6.787-39.571-28.75-28.025 39.732-5.773z" fill="#fcb44d" /></svg>
                    <svg viewBox="0 0 128 128" xmlns="https://www.w3.org/2000/svg">
                        <path d="m64 9.314 17.768 36.003 39.732 5.773-28.75 28.025 6.787 39.571-35.537-18.683-35.537 18.683 6.787-39.571-28.75-28.025 39.732-5.773z" fill="#fcb44d" /></svg>
                </div>
                <div class="smartbanner-app-desc">
                    <span id="smartbanner-type"> App Store </span>
                </div>
            </div>
            <a id="smartbanner-link" href="#" target="_blank">
                <div class="smartbanner-app-install">SHKARKO</div>
            </a>

        </div>
    </div>

    <script type="text/javascript">
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        if (/android/i.test(userAgent)) {
            $('#smartbanner-link').attr('href', 'https://play.google.com/store/apps/details?id=com.joqAlbania.al');
        } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            $('#smartbanner-link').attr('href', 'https://apps.apple.com/al/app/joq-al/id1224913299');
        }

        if (!!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/) || getCookie('joq-smartbanner')) {
            $('#joq-smartbanner').remove();
        } else {
            $('#joq-smartbanner').css('display', 'flex');
        }

        $('.close-smartbanner').on('click', function() {
            setCookie('joq-smartbanner', 1, 7);
            $('#joq-smartbanner').remove();
        });

        $('#smartbanner-link').on('click', function() {
            setCookie('joq-smartbanner', 1, 365);
            $('#joq-smartbanner').remove();
        });

    </script>


    <!-- Google Tag Manager (noscript) 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LHWR57"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/sq_AL/sdk.js#xfbml=1&version=v2.9&appId=799283230226486";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <style>
        @media only screen and (max-width: 768px) {
            #MarketGidComposite386065 .mgbox {
                margin-top: 5px !important;
            }

            .newLogo2-img {
                left: calc(50% - 55px) !important;
            }

            .back-home {
                position: absolute;
                top: 6px;
                left: 5px;
                z-index: 99999;
                height: 50px;
                color: #fff;
                font-family: 'joq-title';
                font-size: 19px;
                padding: 13px 5px;
            }

            input.prev-link {
                opacity: 0;
                position: absolute;
                bottom: 4px;
            }

            .back-home img {
                width: 20px;
                position: relative;
                left: 0;
                top: -2px;
                -ms-transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
        }

    </style>

    <div class="fixed_menu">

        <a href="/">
            <div class="back-home mobile_only"> <img src="https://static.joq-albania.com//assets/images/back.svg"> Home </div>
        </a>
        <div class="container largeContainer">
            <div class="newLogo2-img" style="left: 10px; position: relative;">
                <a href="/" title="JOQ Albania"><img width="109" height="60" src="https://static.joq-albania.com/assets/images/joq-final2.png" alt="JOQ Albania" /></a>
            </div>

            <ul class="main_menu" style="padding-left: 22px !important;">
            	<a href="/kategori/kck.html">
                    <li id="kck" class="category_li1" data-name="kck">K&Ccedil;K</li>
                </a>
                <a href="/kategori/vec-e-jona.html">
                    <li id="vec-e-jona" class="category_li" data-name="vec-e-jona">Ve&ccedil; e jona<i class="fa fa-caret-down"></i></li>
                </a>
                <a href="/kategori/lajme.html">
                    <li id="lajme" class="category_li1" data-name="aktualitet">JOQ News</li>
                </a>
                <a href="/kategori/sondazhe.html">
                    <li id="sondazhe" class="category_li1" data-name="sondazhe">Sondazhe</li>
                </a>
                <a href="/kosova/index.html">
                    <li id="kosova" class="category_li1" data-name="kosova">Kosova</li>
                </a>
                <a href="/maqedoni/index.html">
                    <li id="maqedoni" class="category_li1" data-name="maqedoni">Maqedoni</li>
                </a>
                <a href="/kategori/sport.html">
                    <li id="sport" class="category_li1" data-name="sport">Sport</li>
                </a>
                <a href="/kategori/paskthim.html">
                    <li id="paskthim" class="category_li1" data-name="sport">Paskthim</li>
                </a>
                <!-- <a href="/kategori/argetim.html">
                    <li id="argetim" class="category_li" data-name="argetim">Arg&euml;tim<i class="fa fa-caret-down"></i></li>
                </a> -->
                <a href="/kategori/ide.html">
                    <li id="ide" class="category_li" data-name="sport">Ide<i class="fa fa-caret-down"></i></li>
                </a>

                <a href="/">
                    <li id="me-shume" class="static_subMenu" data-name="sport">M&euml; shum&euml;<i class="fa fa-caret-down"></i></li>
                </a>
                <a href="/kategori/hallet-e-popullit.html">
                    <li id="hallet-e-popullit" class="category_li2" data-name="hallet-e-popullit">Hallet e Popullit</li>
                </a>
                <a href="/kategori/teknologji.html">
                    <li id="teknologji" class="category_li2" data-name="teknologji">Teknologji</li>
                </a>
                <a href="/kategori/kuriozitete.html">
                    <li id="kuriozitete" class="category_li2" data-name="kuriozitete">Kuriozitete</li>
                </a>
                <a href="/kategori/thashetheme.html">
                    <li id="thashetheme" class="category_li2" data-name="thashetheme">Thashetheme</li>
                </a>
                <a href="/kategori/udhetime.html">
                    <li id="udhetime" class="category_li2" data-name="udhetime">Udhetime</li>
                </a>
                <a href="/kategori/shendeti.html">
                    <li id="shendeti" class="category_li2" data-name="shendeti">Sh&euml;ndeti</li>
                </a>
                <a href="/kategori/si-te.html">
                    <li id="si-te" class="category_li2" data-name="si-te">Si t&euml;...</li>
                </a>
                <a href="/faqe/puno-me-ne.html" target="_blank">
                    <li class="category_li2 mobile_only">Puno me ne!</li>
                </a>
                <a href="/faqe/reklamo.html" target="_blank">
                    <li class="category_li2 mobile_only">Marketing</li>
                </a>
                <a href="/faqe/politika-e-privatesise.html" target="_blank">
                    <li class="category_li2 mobile_only">Politikat e Privat&euml;sis&euml;</li>
                </a>
                <a href="/faqe/rreth-nesh.html" target="_blank">
                    <li class="category_li2 mobile_only">Rreth Nesh</li>
                </a>
                <a href="/faqe/kushtet-e-perdorimit.html" target="_blank">
                    <li class="category_li2 mobile_only">Kushtet e P&euml;rdorimit</li>
                </a>
                <a href="/faqe/kontakto.html" target="_blank">
                    <li class="category_li2 mobile_only">Kontakt</li>
                </a>
            </ul>

            <style type="text/css">
                .en-flag {
                    float: right; position: relative; margin: 12px 0 0 20px; align-items: center;
                }
                @media only screen and (max-width: 600px) {
                    .en-flag {
                        position: absolute;
                        right: 100px;
                    }
                    .head-search {
                        width: 99px;
                    }
                }
            </style>
            <div class="en-flag">
                <a title="English" href="/english/index.html">
                    <svg viewBox="0 0 512.002 512.002" style="width: 20px;margin: 10px 0 0 4px;">
                        <path style="fill:#41479B;" d="M503.172,423.725H8.828c-4.875,0-8.828-3.953-8.828-8.828V97.104c0-4.875,3.953-8.828,8.828-8.828  h494.345c4.875,0,8.828,3.953,8.828,8.828v317.793C512,419.772,508.047,423.725,503.172,423.725z"/>
                        <path style="fill:#F5F5F5;" d="M512,97.104c0-4.875-3.953-8.828-8.828-8.828h-39.495l-163.54,107.147V88.276h-88.276v107.147  L48.322,88.276H8.828C3.953,88.276,0,92.229,0,97.104v22.831l140.309,91.927H0v88.276h140.309L0,392.066v22.831  c0,4.875,3.953,8.828,8.828,8.828h39.495l163.54-107.147v107.147h88.276V316.578l163.54,107.147h39.495  c4.875,0,8.828-3.953,8.828-8.828v-22.831l-140.309-91.927H512v-88.276H371.691L512,119.935V97.104z"/>
                        <g>
                            <polygon style="fill:#FF4B55;" points="512,229.518 282.483,229.518 282.483,88.276 229.517,88.276 229.517,229.518 0,229.518    0,282.483 229.517,282.483 229.517,423.725 282.483,423.725 282.483,282.483 512,282.483  "/>
                            <path style="fill:#FF4B55;" d="M178.948,300.138L0.25,416.135c0.625,4.263,4.14,7.59,8.577,7.59h12.159l190.39-123.586h-32.428   V300.138z"/>
                            <path style="fill:#FF4B55;" d="M346.388,300.138H313.96l190.113,123.404c4.431-0.472,7.928-4.09,7.928-8.646v-7.258   L346.388,300.138z"/>
                            <path style="fill:#FF4B55;" d="M0,106.849l161.779,105.014h32.428L5.143,89.137C2.123,90.54,0,93.555,0,97.104V106.849z"/>
                            <path style="fill:#FF4B55;" d="M332.566,211.863L511.693,95.586c-0.744-4.122-4.184-7.309-8.521-7.309h-12.647L300.138,211.863   H332.566z"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="head-search">
                <div class="menu-search">
                    <img class="search-svg" src="https://static.joq-albania.com/assets/images/icons/search.svg">
                </div>
                <div class="toggle_menu">
                    <i class="fa fa-bars"></i>
                </div>
                <div id="sp_social185" class="sp_social icon_size_16  topSocial">
                    <ul>
                        <li><a target='_blank' title="Facebook" href="https://www.facebook.com/joqalbania/"><i class="fa fa-facebook"> </i></a></li>
                        <li><a target="_blank" title="Instagram" href="https://www.instagram.com/joqalbania/"><i class="fa fa-instagram"></i></a></li>
                        <li><a target='_blank' title="Twitter" href="https://twitter.com/JoqAlbania"><i class="fa fa-twitter"></i></a></li>
                        <li><a target='_blank' title="YouTube" href="https://www.youtube.com/joqalbania"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer_menu"></div>
    <div class="hovermenu"></div>

    <div class="full-search">
        <img class="close-search" src="https://static.joq-albania.com/assets/images/icons/close.svg">
        <form action="/kerko.html" method="GET">
            <input type="text" spellcheck="false" name="search" placeholder="K&euml;rko dhe shtyp enter" required>
        </form>
    </div>

    <div class="mobile_slideMenu">
        <ul class="main_menu mobile-toggle-menu">
        	<a href="/kategori/kck.html">
                <li id="kck" class="category_li" data-name="kck">K&Ccedil;K</li>
            </a>
            <a href="/kategori/vec-e-jona.html">
                <li id="tonat" class="category_li1" data-name="tonat">Ve&ccedil; e jona</li>
            </a>
            <a href="/kategori/lajme.html">
                <li id="lajme" class="category_li1" data-name="aktualitet">JOQ News</li>
            </a>
            <a href="/kategori/sondazhe.html">
                <li id="sondazhe" class="category_li1" data-name="sondazhe">Sondazhe</li>
            </a>
            <a href="/kosova/index.html">
                <li id="kosova" class="category_li1" data-name="kosova">Kosova</li>
            </a>
            <a href="/maqedoni/index.html">
                <li id="maqedoni" class="category_li1" data-name="maqedoni">Maqedoni</li>
            </a>
            <a href="/kategori/sport.html">
                <li id="sport" class="category_li1" data-name="perditshmeri">Sport</li>
            </a>
            <!-- <a href="/kategori/argetim.html">
                <li id="argetim" class="category_li" data-name="argetim">Arg&euml;tim<i class="fa fa-caret-down"></i></li>
            </a> -->
            <a href="/kategori/teknologji.html">
                <li id="teknologji" class="category_li1" data-name="shkence">Teknologji</li>
            </a>
            <a href="/kategori/ide.html">
                <li id="ide" class="category_li" data-name="sport">Ide<i class="fa fa-caret-down"></i></li>
            </a>
            <a href="https://dergo.joq-albania.com/">
                <li id="dergo-fv" class="static_subMenu" data-name="dergo">D&euml;rgo<i class="fa fa-caret-down"></i></li>
            </a>
            <a href="/">
                <li id="me-shume" class="static_subMenu" data-name="sport">M&euml; shum&euml;<i class="fa fa-caret-down"></i></li>
            </a>
            <a href="/kategori/hallet-e-popullit.html">
                <li id="hallet-e-popullit" class="category_li2" data-name="hallet-e-popullit">Hallet e Popullit</li>
            </a>
            <a href="/kategori/kuriozitete.html">
                <li id="kuriozitete" class="category_li2" data-name="kuriozitete">Kuriozitete</li>
            </a>
            <a href="/kategori/thashetheme.html">
                <li id="thashetheme" class="category_li2" data-name="thashetheme">Thashetheme</li>
            </a>
            <a href="/kategori/udhetime.html">
                <li id="udhetime" class="category_li2" data-name="udhetime">Udhetime</li>
            </a>
            <a href="/kategori/shendeti.html">
                <li id="shendeti" class="category_li2" data-name="shendeti">Sh&euml;ndeti</li>
            </a>
            <a href="/kategori/si-te.html">
                <li id="si-te" class="category_li2" data-name="si-te">Si t&euml;...</li>
            </a>
            <a href="/faqe/puno-me-ne.html" target="_blank">
                <li class="category_li2 mobile_only">Puno me ne!</li>
            </a>
            <a href="/faqe/reklamo.html" target="_blank">
                <li class="category_li2 mobile_only">Marketing</li>
            </a>
            <a href="/faqe/politika-e-privatesise.html" target="_blank">
                <li class="category_li2 mobile_only">Politikat e Privat&euml;sis&euml;</li>
            </a>
            <a href="/faqe/rreth-nesh.html" target="_blank">
                <li class="category_li2 mobile_only">Rreth Nesh</li>
            </a>
            <a href="/faqe/kushtet-e-perdorimit.html" target="_blank">
                <li class="category_li2 mobile_only">Kushtet e P&euml;rdorimit</li>
            </a>
            <a href="/faqe/kontakto.html" target="_blank">
                <li class="category_li2 mobile_only">Kontakt</li>
            </a>
        </ul>
    </div>

    <a href="https://wa.me/+355699299998" class="mobile_only" style="position: fixed;
    bottom: 33px;
    right: 1px;
    padding: 6px;
    background-color: #eee;
    color: #000!important;
    font-size: 16px;
    line-height: 22px;
    text-transform: uppercase;
    border-radius: 22px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3) !important;
    z-index: 14000;">
        <img width="24px" src="https://static.joq-albania.com/assets/images/whatsapp-logo.svg">
    </a>



    <!-- JOQ APP IOS ANDROID BANNER
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <div class="mobile_only" id="joq-app-banner">
        <style>
            #joq-app-banner {
                position: fixed;
                z-index: 100000;
                width: 90%;
                background: #fff;
                border-radius: 5px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.702), 0 1px 3px 1px rgba(60, 64, 67, 0.449);
            }

            .flex {
                display: -webkit-box;
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
            }

            .app-btn {
                width: calc(50% - 20px);
                max-width: 160px;
                color: #fff;
                margin: 20px 10px;
                text-align: left;
                border-radius: 5px;
                text-decoration: none;
                font-family: "Lucida Grande", sans-serif;
                font-size: 10px;
                text-transform: uppercase;
                height: 50px;
            }

            .app-btn.blu {
                background-color: #101010;
                -webkit-transition: background-color 0.25s linear;
                transition: background-color 0.25s linear;
            }

            .app-btn.blu:hover {
                background-color: #454545;
            }

            .app-btn i {
                width: 20%;
                text-align: center;
                font-size: 28px;
                margin-right: 7px;
            }

            .app-btn .big-txt {
                font-size: 18px;
                text-transform: capitalize;
                color: #fff;
                line-height: 1.2;
            }

            .app-btn p {
                margin: 0;
            }

            .joq-app-banner-title {
                padding: 10px 10px 0;
                font-size: 27px;
                line-height: 1.5;
                text-align: center;
                font-family: joq-title, sans-serif;
            }

            span#close-joq-app-banner {
                position: absolute;
                right: 0;
                top: -2px;
                border-radius: 4px;
                overflow: hidden;
                padding: 5px;
                margin: 0;
                line-height: 1;
                font-size: 22px;
            }

        </style>

        <span id="close-joq-app-banner" onclick="removeAppBanner()"><i class="fa fa-window-close" aria-hidden="true"></i></span>
        <div class="joq-app-banner-title">
            Shkarko aplikacionin <br>
            JOQ ALBANIA
        </div>
        <div class="flex social-btns">
            <a class="app-btn blu flex vert" href="https://apps.apple.com/al/app/joq-al/id1224913299">
                <i class="fab fa-apple"></i>
                <p><span class="big-txt">App Store</span></p>
            </a>
            <a class="app-btn blu flex vert" href="https://play.google.com/store/apps/details?id=com.joqAlbania.al">
                <i class="fab fa-google-play"></i>
                <p><span class="big-txt">Google Play</span></p>
            </a>
        </div>
    </div>
    <script>
        function removeAppBanner() {
            document.getElementById('joq-app-banner').remove();
        }

    </script>
 -->
