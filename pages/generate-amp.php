<?php
/* 
    Template Name: Generate AMP
*/

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);


if( !$_GET['post_id'] ) {
 return;
}

$ID = $_GET['post_id'];
$post = get_post($ID);
$text = wp_strip_all_tags($post->post_content);
$title = $post->post_title;
$author = $post->post_author;
$postContent = $post->post_content;

function apmContent($content) {
    $unwanted_array = array( '&lt;'=>'<', '&gt;'=>'>', '&#8221;' => '"', '&#8243;' => '"', '&#8220;' => '"', '&#8230;' => '...', '&#8216;'=>'\'', '&#8217;'=>'\'',
			 '&nbsp;'=> ' ',  '&amp;'=>'&', '<br />'=> '&#xA;', '/r/n'=> '&#xA;', 'iframe' => 'amp-iframe',
			'http://new20.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
			'https://newjoq.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
			'https://new20.joq.al/console/../imagesNew/' => 'https://joq.al/imagesNew/',
			'http://admin.joq.al/console/../imagesNew/' => 'https://joq.al/imagesNew/', 
			'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://joq.al/imagesNew/',
			// '/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/', 
			'http://admin.joq.al/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
			'https://admin.joq-albania.com/cachedWeb/imagesNew/' => 'https://static.joq-albania.com/imagesNew/',
			'https://joq-albania.com/imagesNew' => 'https://static.joq-albania.com/imagesNew',
                            '/<img src="([^"]*)"\s*\/?>/' => '<amp-img src="$1" width="800" height="684" layout="responsive" alt="AMP"></amp-img>'
);
$content = strtr( $content, $unwanted_array );

$string = htmlentities($content, null, 'utf-8');
$content = str_replace("&nbsp;", " ", $string);
$content = html_entity_decode($content);



return($content);
}



function _ampify_img ($html) {
  preg_match_all("#<img(.*?)\\/?>#", $html, $img_matches);

  foreach ($img_matches[1] as $key => $img_tag) {
    preg_match_all('/(alt|src|width|height)=["\'](.*?)["\']/i', $img_tag, $attribute_matches);
    $attributes = array_combine($attribute_matches[1], $attribute_matches[2]);

    if (!array_key_exists('width', $attributes) || !array_key_exists('height', $attributes)) {
      if (array_key_exists('src', $attributes)) {
        list($width, $height) = getimagesize($attributes['src']);
        $attributes['width'] = $width;
        $attributes['height'] = $height;
      }
    }

    $amp_tag = '<amp-img ';
    foreach ($attributes as $attribute => $val) {
      $amp_tag .= $attribute .'="'. $val .'" ';
    }

    $amp_tag .= 'layout="responsive"';
    $amp_tag .= '>';
    $amp_tag .= '</amp-img>';

    $html = str_replace($img_matches[0][$key], $amp_tag, $html);
  }

  return $html;
}

?>


<!doctype html>
<html amp>

<head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://joq-albania.com/artikull/<?php echo $ID ?>.html">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    

    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }

        </style>
    </noscript>

    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": "https://joq-albania.com/artikull/<?php echo $ID ?>.html",
            "articleSection": "Lajme",
            "headline": "<?php echo esc_attr($title); ?>",
            "author": {
                "@type": "Person",
                "name": "<?php echo the_author_meta( 'first_name' , $author ); ?>.<?php echo the_author_meta( 'last_name' , $author ); ?>"
            },
            "datePublished": "<?php echo  get_the_date( 'd/m/Y G:i' );?>",
            "publisher": {
                "logo": {
                    "width": 109,
                    "height": 60,
                    "@type": "ImageObject",
                    "url": "https://static.joq-albania.com/assets/images/joq-final2.png"
                },
                "@type": "Organization",
                "url": "https://joq-albania.com",
                "name": "Joq Albania"
            },
            "image": {
                "width": 1080,
                "height": 608,
                "@type": "ImageObject",
                "url": "<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( $ID,'full' )); ?>"
            }
        }

    </script>

    <style amp-custom>
        * {
            box-sizing: border-box;
        }

        html {
            color: rgba(0, 0, 0, .87)
        }

        ::-moz-selection {
            background: #b3d4fc;
            text-shadow: none
        }

        ::selection {
            background: #b3d4fc;
            text-shadow: none
        }

        .hidden {
            display: none
        }

        @media print {

            *,
            *:before,
            *:after {
                background: transparent;
                color: #000;
                box-shadow: none
            }

            tr {
                page-break-inside: avoid
            }

            p {
                orphans: 3;
                widows: 3
            }
        }

        .mdl-button {
            -webkit-tap-highlight-color: transparent;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0)
        }

        html {
            width: 100%;
            height: 100%;
            -ms-touch-action: manipulation;
            touch-action: manipulation
        }

        body {
            width: 100%;
            min-height: 100%
        }

        html,
        body {
            font-family: "Helvetica", "Arial", sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px
        }

        h5,
        h6,
        p {
            padding: 0
        }

        h5 {
            font-size: 20px;
            font-weight: 500;
            line-height: 1;
            letter-spacing: .02em
        }

        h5,
        h6 {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            margin: 24px 0 16px
        }

        h6 {
            font-size: 16px;
            letter-spacing: .04em
        }

        h6,
        p {
            font-weight: 400;
            line-height: 24px
        }

        .mdl-color-text--red {
            color: #f44336
        }

        .mdl-color-text--blue {
            color: #2196f3
        }

        .mdl-color-text--grey {
            color: #9e9e9e
        }

        .mdl-color--black {
            background-color: #000
        }

        .mdl-color-text--white {
            color: #fff
        }

        .mdl-button {
            background: 0 0;
            border: none;
            border-radius: 2px;
            color: #000;
            position: relative;
            height: 36px;
            margin: 0;
            min-width: 64px;
            padding: 0 16px;
            display: inline-block;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            overflow: hidden;
            will-change: box-shadow;
            transition: box-shadow .2s cubic-bezier(.4, 0, 1, 1), background-color .2s cubic-bezier(.4, 0, .2, 1), color .2s cubic-bezier(.4, 0, .2, 1);
            outline: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            line-height: 36px;
            vertical-align: middle
        }

        .mdl-button::-moz-focus-inner {
            border: 0
        }

        .mdl-button:hover {
            background-color: rgba(158, 158, 158, .2)
        }

        .mdl-button:focus:not(:active) {
            background-color: rgba(0, 0, 0, .12)
        }

        .mdl-button:active {
            background-color: rgba(158, 158, 158, .4)
        }

        .mdl-button.mdl-button--colored:focus:not(:active) {
            background-color: rgba(0, 0, 0, .12)
        }

        .mdl-button--raised {
            background: rgba(158, 158, 158, .2);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12)
        }

        .mdl-button--raised:active {
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2);
            background-color: rgba(158, 158, 158, .4)
        }

        .mdl-button--raised:focus:not(:active) {
            box-shadow: 0 0 8px rgba(0, 0, 0, .18), 0 8px 16px rgba(0, 0, 0, .36);
            background-color: rgba(158, 158, 158, .4)
        }

        .mdl-button--raised.mdl-button--colored:focus:not(:active) {
            background-color: rgb(63, 81, 181)
        }

        .mdl-button--fab:focus:not(:active) {
            box-shadow: 0 0 8px rgba(0, 0, 0, .18), 0 8px 16px rgba(0, 0, 0, .36);
            background-color: rgba(158, 158, 158, .4)
        }

        .mdl-button--fab.mdl-button--colored:focus:not(:active) {
            background-color: rgb(255, 64, 129)
        }

        .mdl-button--accent.mdl-button--accent {
            color: rgb(255, 64, 129)
        }

        .mdl-button--accent.mdl-button--accent.mdl-button--raised {
            color: rgb(255, 255, 255);
            background-color: rgb(255, 64, 129)
        }

        .mdl-button[disabled][disabled] {
            color: rgba(0, 0, 0, .26);
            cursor: default;
            background-color: transparent
        }

        .mdl-button--raised[disabled][disabled] {
            background-color: rgba(0, 0, 0, .12);
            color: rgba(0, 0, 0, .26);
            box-shadow: none
        }

        @supports (-webkit-appearance:none) {}

        @supports (pointer-events:auto) {}

        .mdl-slider.is-upgraded:focus:not(:active)::-webkit-slider-thumb {
            box-shadow: 0 0 0 10px rgba(63, 81, 181, .26)
        }

        .mdl-slider.is-upgraded:focus:not(:active)::-moz-range-thumb {
            box-shadow: 0 0 0 10px rgba(63, 81, 181, .26)
        }

        .mdl-slider.is-upgraded:focus:not(:active)::-ms-thumb {
            background: radial-gradient(circle closest-side, rgb(63, 81, 181)0%, rgb(63, 81, 181)37.5%, rgba(63, 81, 181, .26)37.5%, rgba(63, 81, 181, .26)100%);
            transform: scale(1)
        }

        .mdl-slider.is-upgraded.is-lowest-value:focus:not(:active)::-webkit-slider-thumb {
            box-shadow: 0 0 0 10px rgba(0, 0, 0, .12);
            background: rgba(0, 0, 0, .12)
        }

        .mdl-slider.is-upgraded.is-lowest-value:focus:not(:active)::-moz-range-thumb {
            box-shadow: 0 0 0 10px rgba(0, 0, 0, .12);
            background: rgba(0, 0, 0, .12)
        }

        .mdl-slider.is-upgraded.is-lowest-value:focus:not(:active)::-ms-thumb {
            background: radial-gradient(circle closest-side, rgba(0, 0, 0, .12)0%, rgba(0, 0, 0, .12)25%, rgba(0, 0, 0, .26)25%, rgba(0, 0, 0, .26)37.5%, rgba(0, 0, 0, .12)37.5%, rgba(0, 0, 0, .12)100%);
            transform: scale(1)
        }

        body {
            margin: 0
        }

        #header-page {
            position: absolute;
            width: 100%;
            background: #000000;
            height: 60px;
            overflow: hidden;
            z-index: 99999;
        }

        .logo-div {
            left: calc(50% - 55px);
            position: relative;
            float: left;
        }

        .head-action {
            position: relative;
            top: 6px;
            width: 170px;
            float: right;
            right: -10px;
        }

        .search-div {
            position: absolute;
            font-size: 16px;
            color: #fff;
            padding: 13px;
            right: 55px;
        }

        .menu-div {
            display: block;
            position: absolute;
            right: 14px;
            top: 0px;
            font-size: 22px;
            color: #fff;
            padding: 14px;
        }

        .space-menu {
            width: 100%;
            height: 60px;
        }

        .container {
            padding: 0 18px;
            max-width: 600px;
            margin: auto;
        }

        .article-header {
            padding: 18px 0;
            border-bottom: 1px solid #dddddd
        }

        .article-title {
            padding: 5px 0 10px 0;
            margin: 0 0 10px;
            font-family: 'joq-title-v2', 'joq-title';
            font-weight: normal !important;
            color: #111;
            font-size: 32px;
            line-height: 36px;
        }

        .article-info {
            font-size: 14px;
            font-family: arial, sans-serif;
            color: #888888;
            font-weight: 100;
            font-style: normal;
            margin-bottom: -12px;
        }

        .article-body {
            padding: 8px 0;
            margin: 0;
        }

        .article-content p {
            font-family: 'LatoWeb', 'joq-n-thin', 'joq-n-light';
            color: #000;
            font-size: 19px;
            line-height: 28px;
            margin-bottom: 1em;
        }

        .sidebar-menu {
            width: 100%;
            height: 902px;
            background: rgba(0, 0, 0, .6);
            position: absolute;
            left: 0;
            z-index: 999;
        }

        amp-sidebar {
            width: 270px;
            top: calc(60px) !important;
        }

        .sidebar-menu ul {
            display: block;
            position: absolute;
            border-bottom: 1px solid #ddd;
            top: 0;
            left: 0;
            z-index: 1011;
            width: 270px;
            background: #000;
            padding: 10px 0 80px !important;
            overflow: hidden;
            height: 903px;
            margin: 0;
        }

        .sidebar-menu ul li {
            font-size: 16px;
            color: #ddd;
            font-weight: lighter;
            font-family: Roboto, sans-serif;
            display: block;
            padding: 10px 20px;
            border-bottom: 1px solid #222;
            width: 100%;
            left: 0;
            position: relative;
            text-align: left;
            text-transform: initial;
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

        .back-home amp-img {
            width: 20px;
            position: relative;
            left: 0;
            top: 4px;
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        #content {
            margin-top: 5px;
        }

        .banner-container {
            text-align: center;
            height: auto;
            margin: 0 auto 5px;
        }

    </style>

<body>
    <div id="page">
        <header id="header-page">
            <div class="back-home mobile_only">
                <amp-img src="https://static.joq-albania.com//assets/images/back.svg" width="20" height="20"></amp-img> Home
            </div>
            <div class="logo-div">
                <amp-img width="109" height="60" src="https://static.joq-albania.com/assets/images/joq-final2.png" alt="JOQ Albania"></amp-img>
            </div>

            <div class="head-action">
                <div class="search-div">
                    <amp-img width="19" height="19" src="https://static.joq-albania.com/assets/images/icons/search.svg"></amp-img>
                </div>
                <div class="menu-div">
                    <amp-img on="tap:primaryNavigation.toggle" width="19" height="19" src="images/layout.svg"></amp-img>
                </div>

            </div>

        </header>

        <div class="space-menu"></div>
        <main id="content">

            <div class="banner-container">
                <amp-ad width="300" height="100" type="doubleclick" data-slot="/197741849/app_joq__1">
                </amp-ad>
            </div>

            <div class="banner-container">
                <amp-ad width="300" height="100" type="doubleclick" data-slot="/197741849/app_joq__2">
                </amp-ad>
            </div>

            <div class="container">

                <div class="article-header">
                    <h2 class="article-title"><?php echo the_title(); ?></h2>
                    <div class="article-info">Shkruar nga: <?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?> | Publikuar më: <?php echo  get_the_date( 'd/m/Y G:i' );?></div>
                </div>

                <div class="article-body">

                    <div class="article-content">
                        <?php echo _ampify_img(apmContent($postContent));?>
                    </div>

                </div>
            </div>
        </main>

    </div>

    <amp-sidebar id="primaryNavigation" layout="nodisplay" side="left" role="menu">

        <div class="sidebar-menu">
            <ul class="main_menu mobile-toggle-menu" style="display: block;">
                <a>
                    <li id="tonat" class="category_li1" data-name="tonat">Veç e jona</li>
                </a>
                <a>
                    <li id="lajme" class="category_li1" data-name="aktualitet">Lajme</li>
                </a>
                <a>
                    <li id="kosova" class="category_li1" data-name="kosova">Kosova</li>
                </a>
                <a>
                    <li id="sport" class="category_li1" data-name="perditshmeri">Sport</li>
                </a>
                <a>
                    <li id="argetim" class="category_li" data-name="argetim">Argëtim<i class="fa fa-caret-down"></i></li>
                </a>
                <a>
                    <li id="teknologji" class="category_li1" data-name="shkence">Teknologji</li>
                </a>
                <a>
                    <li id="ide" class="category_li" data-name="sport">Ide<i class="fa fa-caret-down"></i></li>
                </a>
                <a>
                    <li id="dergo-fv" class="static_subMenu" data-name="dergo">Dërgo<i class="fa fa-caret-down"></i></li>
                </a>
                <a>
                    <li id="me-shume" class="static_subMenu" data-name="sport">Më shumë<i class="fa fa-caret-down"></i></li>
                </a>
                <a>
                    <li id="hallet-e-popullit" class="category_li2" data-name="hallet-e-popullit">Hallet e Popullit</li>
                </a>
                <a>
                    <li id="kuriozitete" class="category_li2" data-name="kuriozitete">Kuriozitete</li>
                </a>
                <a>
                    <li id="thashetheme" class="category_li2" data-name="thashetheme">Thashetheme</li>
                </a>
                <a>
                    <li id="udhetime" class="category_li2" data-name="udhetime">Udhetime</li>
                </a>
                <a>
                    <li id="shendeti" class="category_li2" data-name="shendeti">Shëndeti</li>
                </a>
                <a>
                    <li id="si-te" class="category_li2" data-name="si-te">Si të...</li>
                </a>
                <a target="_blank">
                    <li class="category_li2 mobile_only">Puno me ne!</li>
                </a>
                <a target="_blank">
                    <li class="category_li2 mobile_only">Marketing</li>
                </a>
                <a target="_blank">
                    <li class="category_li2 mobile_only">Politikat e Privatësisë</li>
                </a>
                <a target="_blank">
                    <li class="category_li2 mobile_only">Rreth Nesh</li>
                </a>
                <a target="_blank">
                    <li class="category_li2 mobile_only">Kushtet e Përdorimit</li>
                </a>
                <a target="_blank">
                    <li class="category_li2 mobile_only">Kontakt</li>
                </a>
            </ul>
        </div>
    </amp-sidebar>




</body>

</html>

<?php

    
    

$ob_content = ob_get_contents();
ob_end_clean();


gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/amp/' . $post->ID . '.html',  $ob_content);


?>
