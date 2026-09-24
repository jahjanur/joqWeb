<?php

ob_start();

global $generateLastNewsSys;

/* Hero posts are queried before <head> so the lead image can be preloaded (LCP). */
$joq_hero_q = new WP_Query( array(
  'post_type'      => 'post',
  'posts_per_page' => 10,
  'post_status'    => 'publish',
  'category_name'  => 'aktualitet',
) );
$joq_hero_lead_img = '';
if ( $joq_hero_q->have_posts() ) {
  $joq_hero_lead_img = fix_post_thumbnail( get_the_post_thumbnail_url( $joq_hero_q->posts[0]->ID, 'full' ) );
}
  
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

    <meta property="fb:pages" content="104916548544422" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="kQ4bP_ZT5Z7QD2vAAheHvCVWxbFH7fRNIB55Ld-rAS8" />
    <meta property="fb:app_id" content="1591048791052134" />

    <?php $joq_home_desc = 'Krijuar më 5 shkurt 2010, joq-albania.com është platforma më e madhe e lajmeve unike, argëtuese dhe sociale në hapësirën shqipfolëse. Nga vijnë materialet? Nga ju dhe komuniteti. Përveç kësaj, ne lundrojmë kudo ku ka shqiptarë dhe ju sjellim nga andej më të mirën duke argëtuar qindra mijëra vizitorë në ditë.'; ?>
    <meta name="description" content="<?php echo esc_attr( $joq_home_desc ); ?>" />
    <link rel="canonical" href="https://joq-albania.com/" />
    <meta name="author" content="JOQ" />
    <?php /* og:image was joq-final2.png at 326x182 -- under Facebook's 600x315
       minimum for a large card, so the homepage shared as a small thumbnail.
       The shared card is 1200x630. */ ?>
    <?php echo joq_social_meta( array(
        'title'       => 'JOQ Albania',
        'description' => $joq_home_desc,
        'url'         => 'https://joq-albania.com/',
    ) ); ?>
    <title>JOQ Albania</title>

  <link rel="shortcut icon" href="https://static.joq-albania.com/assets/images/facivon4.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://joq-albania.com/assets/css/font-awesome.min.css" type="text/css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/swiper-bundle.min.css" type="text/css" />

    <!-- Early hints: CDN handshake, the hero LCP image, the two display weights used above the fold -->
    <link rel="preconnect" href="https://static.joq-albania.com" />
    <link rel="dns-prefetch" href="https://static.joq-albania.com" />
    <?php if ( $joq_hero_lead_img ) : ?>
    <link rel="preload" as="image" href="<?php echo esc_url( $joq_hero_lead_img ); ?>" fetchpriority="high" />
    <?php endif; ?>
    <link rel="preload" as="font" type="font/otf" href="/wp-content/themes/joq/assets/fonts/Hurme4Bold.otf" crossorigin />
    <link rel="preload" as="font" type="font/otf" href="/wp-content/themes/joq/assets/fonts/Hurme4Black.otf" crossorigin />

    
    <link rel="stylesheet" href="https://static.joq-albania.com/assets/css/newstyle.css?v=02" type="text/css" />

    <!-- JOQ design system: must stay last so it wins the cascade -->
    <link rel="stylesheet" href="/wp-content/themes/joq/assets/css/joq-design-system.css?v=6.1" type="text/css" />

    <script src="https://static.joq-albania.com/assets/js/jquery.min.js" type="text/javascript"></script>
  <script async src="https://static.joq-albania.com/assets/js/jquery.dfp.min.js" type="text/javascript"></script>

    <script async type="text/javascript">
        if (window.self !== window.top) {
            window.top.location.href = window.location.href;
        }
        $.ajaxSetup({
            cache: false
        });
        var isNews = false, isHome = true, isCategory = false;
        var isMobile = false;
      if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
          /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
    </script>


    <script async type="text/javascript" src="https://static.joq-albania.com/assets/js/jquery.fancybox.js?v=2.1.5"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.6/postscribe.min.js"></script>

    <script async src='https://www.googletagservices.com/tag/js/gpt.js'></script>
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



    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
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
    <!-- <script async src="https://mediadesk.al/ad/joq/h.js"></script> -->


</head>

<body>

  <div id="smart-mgid"></div>

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

<a class="joq-skip" href="#joq-main">Kalo te p&euml;rmbajtja</a>

<?php get_template_part( 'templates/joqHeader' ); ?>

    <h1 class="sr-only">JOQ Albania &mdash; lajme nga Shqip&euml;ria, Kosova, Maqedonia dhe bota</h1>

    <?php
      $joq_theme_uri = '/wp-content/themes/joq';
      $joq_excluded  = array( 63551, 37958, 47302, 64190 );
      /* IDs already rendered further up the page. Later sections pass this to
         post__not_in so the same story is not shown two or three times. */
      $joq_shown     = array();
      $joq_hero_ids  = array();
    ?>

    <!-- Latest ticker -->
    <?php
      $tickerQ = new WP_Query( array(
        'post_type'        => 'post',
        'posts_per_page'   => 8,
        'post_status'      => 'publish',
        'category__not_in' => $joq_excluded,
      ) );
      $tickerItems = '';
      $tickerCount = 0;
      while ( $tickerQ->have_posts() ) : $tickerQ->the_post();
        $tickerCount++;
        $tickerItems .= '<a class="joq-ticker__item" href="' . get_permalink() . '"><strong>' . get_the_date( 'H:i' ) . '</strong>&nbsp; ' . esc_html( get_the_title() ) . '</a>';
      endwhile; wp_reset_postdata();
    ?>
    <?php if ( $tickerItems ) : ?>
    <div class="joq-ticker" role="region" aria-label="Lajmet e fundit">
      <div class="joq-ticker__inner">
        <span class="joq-ticker__badge">E fundit</span>
        <div class="joq-ticker__scroll">
          <?php /* track is duplicated so the -50% translate loops seamlessly;
                   --n scales the animation duration to the number of items */ ?>
          <div class="joq-ticker__track" style="--n: <?php echo $tickerCount; ?>"><?php echo $tickerItems . $tickerItems; ?></div>
        </div>
        <button type="button" class="joq-ticker__toggle" aria-pressed="false" aria-label="Ndalo l&euml;vizjen">
          <svg class="joq-ticker__ico-pause" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><rect x="6" y="4" width="4" height="16" rx="1"/><rect x="14" y="4" width="4" height="16" rx="1"/></svg>
          <svg class="joq-ticker__ico-play" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="7 4 20 12 7 20 7 4"/></svg>
        </button>
      </div>
    </div>
    <?php endif; ?>
    <!-- End Latest ticker -->

    <!-- Home Headline -->
    <div class="joq-hero">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
      <?php
        while( $joq_hero_q->have_posts() ): $joq_hero_q->the_post();
          $joq_shown[]    = get_the_ID();
          $joq_hero_ids[] = get_the_ID();
          $heroCat = get_the_category();
      ?>
          <div class="swiper-slide">
            <a class="joq-hero__slide"
               title="<?php echo esc_attr( get_the_title() ); ?>"
               target="_self"
               style="background-image: url('<?php echo fix_post_thumbnail(get_the_post_thumbnail_url( get_the_ID(),'full' )) ?>')"
               href="<?php echo get_permalink() ?>">
              <span class="joq-hero__overlay"></span>
              <div class="joq-hero__content">
                <?php if ( ! empty( $heroCat ) ) : ?>
                  <span class="joq-hero__cat"><?php echo $heroCat[0]->cat_name; ?></span>
                <?php endif; ?>
                <h2 class="joq-hero__title"><?php echo get_the_title(); ?></h2>
                <p class="joq-hero__excerpt"><?php echo wp_trim_words( wp_strip_all_tags( get_the_content() ), 22, '...' ); ?></p>
                <div class="joq-hero__meta">
                  <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date( 'd.m.Y, H:i' ); ?></time>
                  <span class="joq-hero__read">Lexo m&euml; shum&euml; &rarr;</span>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- End Home Headline -->

    <main class="joq-main" id="joq-main">

      <div class="fixed-left-banner pc-only">
        <div class="adunit-1" data-adunit="joq__floating-left" data-dimensions="160x600" style="width:160px; height:600px;"></div>
      </div>
      <div class="fixed-right-banner pc-only">
        <div class="adunit-1" data-adunit="joq__floating-right" data-dimensions="160x600" style="width:160px; height:600px;"></div>
      </div>

      <!-- Category tiles -->
      <?php
        /* label, href, icon file (144px WebP in assets/images/icons/), inline SVG fallback used if the file is missing */
        $joq_tiles = array(
          array( 'Shqip&euml;ri',        '/kategori/aktualitet.html',           'albania-joq.webp',         '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/>' ),
          array( 'News',                 '/kategori/lajme.html',                'News-glass-joq.webp',      '<path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0V6h4"/><path d="M18 14h-8M15 18h-5M10 6h8v4h-8V6Z"/>' ),
          array( 'Kosova',               '/kosova/index.html',                  'Kosovo-glass-joq.webp',    '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/>' ),
          array( 'Maqedoni',             '/maqedoni/index.html',                'Macedonia-glass-joq.webp', '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/>' ),
          array( 'Sport',                '/kategori/sport.html',                'ball-joq.webp',            '<circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20"/>' ),
          array( 'Ve&ccedil; e jona',    '/kategori/vec-e-jona.html',           'vip-joq.webp',             '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>' ),
          array( 'Persekutimi ndaj JOQ', '/kategori/persekutimi-ndaj-joq.html', 'preskeutim-joq.webp',      '<path d="M3 11l18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/>' ),
          array( 'Arg&euml;tim',         '/kategori/argetim.html',              'argetimm-joq.webp',        '<rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"/><line x1="7" y1="2" x2="7" y2="22"/><line x1="17" y1="2" x2="17" y2="22"/><line x1="2" y1="12" x2="22" y2="12"/><line x1="2" y1="7" x2="7" y2="7"/><line x1="2" y1="17" x2="7" y2="17"/><line x1="17" y1="17" x2="22" y2="17"/><line x1="17" y1="7" x2="22" y2="7"/>' ),
          array( 'Teknologji',           '/kategori/teknologji.html',           'teknologji-joq.webp',      '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>' ),
        );
        $joq_tile_dir = get_template_directory() . '/assets/images/icons/';
      ?>
      <nav class="joq-tiles" data-animate aria-label="Kategorit&euml;">
        <?php foreach ( $joq_tiles as $t ) : ?>
        <a class="joq-tile" href="<?php echo $t[1]; ?>">
          <span class="joq-tile__icon">
            <?php if ( file_exists( $joq_tile_dir . $t[2] ) ) : ?>
              <img src="<?php echo $joq_theme_uri; ?>/assets/images/icons/<?php echo $t[2]; ?>?v=<?php echo JOQ_ICON_VER; ?>" alt="" width="72" height="72" loading="lazy" decoding="async" />
            <?php else : ?>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?php echo $t[3]; ?></svg>
            <?php endif; ?>
          </span>
          <span class="joq-tile__label"><?php echo $t[0]; ?></span>
        </a>
        <?php endforeach; ?>
      </nav>
      <!-- End Category tiles -->

      <!-- Aktualitet + Të fundit -->
      <section class="joq-section joq-section--feed" data-animate>
        <div class="joq-home-split">

          <div class="joq-home-split__main">

            <?php
              /* Category blocks, in the order they appear down the page. Edit
                 this list to add, drop or reorder them — each entry renders one
                 block, preceded by three stories from the general news stream. */
              $joq_home_cats = array(
                array( 'Kosova',               'kosova' ),
                array( 'Maqedoni',             'maqedoni' ),
                array( 'Sport',                'sport' ),
                array( 'Ve&ccedil; e jona',    'vec-e-jona' ),
                array( 'Persekutimi ndaj JOQ', 'persekutimi-ndaj-joq' ),
                array( 'Arg&euml;tim',         'argetim' ),
                array( 'Teknologji',           'teknologji' ),
              );

              /* Blocks are resolved first so each one keeps the freshest posts of
                 its own category; the stream below is then filled from whatever
                 is left, which is what keeps a story from appearing twice. */
              /* The four mobile 300x100 units. On a phone the rail stacks below the
                 whole feed, so left in the rail every mobile ad landed ~70% down the
                 page in one clump. Same units, spread through the feed instead; on
                 desktop they stay hidden and the rail's 300x250s serve. */
              $joq_mobile_ads = array( 'app_joq__10', 'app_joq__6', 'app_joq__3', 'app_joq__16' );
              $joq_ad_i       = 0;

              $joq_blocks = array();
              foreach ( $joq_home_cats as $joq_cat ) {
                $catQ = new WP_Query( array(
                  'post_type'      => 'post',
                  'posts_per_page' => 4,
                  'post_status'    => 'publish',
                  'category_name'  => $joq_cat[1],
                  'post__not_in'   => $joq_shown,
                ) );
                if ( ! $catQ->have_posts() ) { wp_reset_postdata(); continue; }

                $catPosts = $catQ->posts;
                foreach ( $catPosts as $catPost ) { $joq_shown[] = $catPost->ID; }
                wp_reset_postdata();

                $joq_blocks[] = array(
                  'label' => $joq_cat[0],
                  'slug'  => $joq_cat[1],
                  'lead'  => array_shift( $catPosts ),
                  'items' => $catPosts,
                );
              }

              /* One query for every group of three, sliced per cycle below. */
              $joq_stream = array();
              if ( $joq_blocks ) {
                $streamQ = new WP_Query( array(
                  'post_type'        => 'post',
                  'posts_per_page'   => 3 * count( $joq_blocks ),
                  'post_status'      => 'publish',
                  'category__not_in' => $joq_excluded,
                  'post__not_in'     => $joq_shown,
                ) );
                $joq_stream = $streamQ->posts;
                foreach ( $joq_stream as $streamPost ) { $joq_shown[] = $streamPost->ID; }
                wp_reset_postdata();
              }

              /* The rail only needs to avoid what sits beside it. Excluding the
                 whole feed would push it onto days-old posts, which defeats
                 a list called "Të fundit". */
              $joq_rail_exclude = $joq_hero_ids;
              for ( $c = 0; $c < 2 && $c < count( $joq_blocks ); $c++ ) {
                foreach ( array_slice( $joq_stream, $c * 3, 3 ) as $nearPost ) {
                  $joq_rail_exclude[] = $nearPost->ID;
                }
                $joq_rail_exclude[] = $joq_blocks[ $c ]['lead']->ID;
                foreach ( $joq_blocks[ $c ]['items'] as $nearPost ) {
                  $joq_rail_exclude[] = $nearPost->ID;
                }
              }
            ?>

            <div class="joq-section__header">
              <h2 class="joq-section__title"><?php echo joq_cat_icon_img( 'lajme', 'joq-section__title-icon' ); ?>Lajmet e fundit</h2>
              <a class="joq-section__more" href="/kategori/lajme.html">Shiko t&euml; gjitha &rarr;</a>
            </div>

            <?php /* One cycle = three stories + its category block = one page. */ ?>
            <?php foreach ( $joq_blocks as $joq_bi => $joq_block ) : ?>
            <div class="joq-cycle<?php echo $joq_bi === 0 ? ' is-active' : ''; ?>" data-cycle="<?php echo $joq_bi; ?>">

            <div class="joq-stories">
              <?php foreach ( array_slice( $joq_stream, $joq_bi * 3, 3 ) as $sp ) :
                $spCat = get_the_category( $sp->ID );
                $spImg = fix_post_thumbnail( get_the_post_thumbnail_url( $sp->ID, 'img2' ) );
              ?>
              <article class="joq-story">
                <a href="<?php echo get_permalink( $sp->ID ); ?>">
                  <div class="joq-story__body">
                    <?php if ( ! empty( $spCat ) ) :
                      $spIcon = joq_cat_icon_img( $spCat[0]->slug, 'joq-story__kicker-icon' );
                    ?>
                      <span class="joq-story__kicker">
                        <?php echo $spIcon; ?><?php echo $spCat[0]->cat_name; ?>
                      </span>
                    <?php endif; ?>
                    <h3 class="joq-story__title"><?php echo get_the_title( $sp->ID ); ?></h3>
                    <p class="joq-story__excerpt"><?php echo wp_trim_words( wp_strip_all_tags( $sp->post_content ), 26, '...' ); ?></p>
                    <div class="joq-story__meta">
                      <time datetime="<?php echo get_the_date( 'c', $sp->ID ); ?>"><?php echo joq_time_ago( $sp ); ?></time>
                      &middot; <?php echo joq_read_time( $sp ); ?> min lexim
                    </div>
                  </div>
                  <?php /* box always renders; with no thumbnail its fallback mark shows */ ?>
                  <div class="joq-story__media">
                    <?php if ( $spImg ) : ?>
                    <img src="<?php echo $spImg; ?>" alt="" width="527" height="375" loading="lazy" decoding="async" />
                    <?php endif; ?>
                  </div>
                </a>
              </article>
              <?php endforeach; ?>
            </div>

            <?php
              $rowLead = $joq_block['lead'];
              $leadImg = fix_post_thumbnail( get_the_post_thumbnail_url( $rowLead->ID, 'img2' ) );
            ?>
            <section class="joq-catblock">
              <div class="joq-section__header">
                <h2 class="joq-section__title"><?php echo joq_cat_icon_img( $joq_block['slug'], 'joq-section__title-icon' ); ?><?php echo $joq_block['label']; ?></h2>
                <a class="joq-section__more" href="/kategori/<?php echo $joq_block['slug']; ?>.html">Shiko t&euml; gjitha &rarr;</a>
              </div>
              <div class="joq-catblock__inner">

                <a class="joq-catblock__lead" href="<?php echo get_permalink( $rowLead->ID ); ?>">
                  <h3 class="joq-catblock__lead-title"><?php echo get_the_title( $rowLead->ID ); ?></h3>
                  <p class="joq-catblock__lead-excerpt"><?php echo wp_trim_words( wp_strip_all_tags( $rowLead->post_content ), 24, '...' ); ?></p>
                  <div class="joq-catblock__lead-media">
                    <?php if ( $leadImg ) : ?>
                    <img src="<?php echo $leadImg; ?>" alt="" width="527" height="375" loading="lazy" decoding="async" />
                    <?php endif; ?>
                  </div>
                  <div class="joq-catblock__meta">
                    <time datetime="<?php echo get_the_date( 'c', $rowLead->ID ); ?>"><?php echo joq_time_ago( $rowLead ); ?></time>
                    &middot; <?php echo joq_read_time( $rowLead ); ?> min lexim
                  </div>
                </a>

                <div class="joq-catblock__list">
                  <?php foreach ( $joq_block['items'] as $rowPost ) : ?>
                  <a class="joq-catblock__item" href="<?php echo get_permalink( $rowPost->ID ); ?>">
                    <?php /* box always renders; with no thumbnail its fallback mark shows */ ?>
                    <div class="joq-catblock__item-media"><?php echo joq_thumb_img( $rowPost->ID ); ?></div>
                    <div class="joq-catblock__item-body">
                    <h3 class="joq-catblock__item-title"><?php echo get_the_title( $rowPost->ID ); ?></h3>
                    <div class="joq-catblock__meta">
                      <time datetime="<?php echo get_the_date( 'c', $rowPost->ID ); ?>"><?php echo joq_time_ago( $rowPost ); ?></time>
                      &middot; <?php echo joq_read_time( $rowPost ); ?> min lexim
                    </div>
                    </div>
                  </a>
                  <?php endforeach; ?>
                </div>

              </div>
            </section>

            <?php
              /* one mobile slot after every second block; see $joq_mobile_ads above */
              if ( $joq_ad_i < count( $joq_mobile_ads ) && $joq_bi % 2 === 0 ) :
            ?>
            <div class="joq-feed-ad mobile-only">
              <span class="joq-feed-ad__label">Reklam&euml;</span>
              <div class="adunit-1" data-adunit="<?php echo $joq_mobile_ads[ $joq_ad_i ]; ?>" data-dimensions="300x100"></div>
            </div>
            <?php $joq_ad_i++; endif; ?>

            </div><?php /* .joq-cycle */ ?>
            <?php endforeach; ?>

            <?php if ( count( $joq_blocks ) > 1 ) : ?>
            <div class="joq-feed__more">
              <button type="button" class="joq-category__load-btn joq-feed__more-btn">M&euml; shum&euml;</button>
            </div>
            <?php endif; ?>

            <?php /* too few categories to space them all out: keep the rest so the page still carries every unit */ ?>
            <?php while ( $joq_ad_i < count( $joq_mobile_ads ) ) : ?>
            <div class="joq-feed-ad mobile-only">
              <span class="joq-feed-ad__label">Reklam&euml;</span>
              <div class="adunit-1" data-adunit="<?php echo $joq_mobile_ads[ $joq_ad_i ]; ?>" data-dimensions="300x100"></div>
            </div>
            <?php $joq_ad_i++; endwhile; ?>

            <?php
              /* The load-more endpoint serves the "aktualitet" category by
                 offset, so start past however many of those the page already
                 used. The click handler also drops any repeat it still gets. */
              $joq_akt_used = 0;
              foreach ( $joq_shown as $shownId ) {
                if ( has_category( 'aktualitet', $shownId ) ) { $joq_akt_used++; }
              }
            ?>

            <!-- Load more appends here; shown only while the last page is open -->
            <div class="joq-feed__tail">
            <div class="joq-stories" id="joq-more-stories"></div>
            <div class="joq-load-more">
              <button type="button" class="joq-category__load-btn load-more-home-button"
                      data-label="M&euml; shum&euml;" data-loading="Duke ngarkuar&hellip;">M&euml; shum&euml;</button>
            </div>
            <script type="text/javascript">
              (function () {
                var btn = document.querySelector('.load-more-home-button');
                if (!btn) { return; }
                var featuredOffset = <?php echo (int) $joq_akt_used; ?>, topOffset = 4, lastOffset = 11;
                var label   = btn.getAttribute('data-label');
                var loading = btn.getAttribute('data-loading');

                /* The endpoint returns a category name, not a slug, so match the
                   icon by name. Keys are lower-cased because the name's casing is
                   whatever the editor typed. */
                var catIcons = <?php
                  $joq_icon_map = array();
                  foreach ( get_categories( array( 'hide_empty' => false ) ) as $joq_term ) {
                    $joq_icon_url = joq_cat_icon( $joq_term->slug );
                    if ( $joq_icon_url ) {
                      $joq_icon_map[ mb_strtolower( $joq_term->name ) ] = $joq_icon_url;
                    }
                  }
                  echo wp_json_encode( $joq_icon_map );
                ?>;

                /* An endpoint that hands back a story with no picture must not
                   produce <img src="">: that re-requests the page and paints the
                   browser's broken glyph. No src, no img -- the wrapper's
                   fallback mark shows through instead. */
                function thumb(url) {
                  return url ? '<img src="' + url + '" alt="" width="527" height="375" loading="lazy" decoding="async">' : '';
                }

                /* Every permalink already on the page, so a story the endpoint
                   hands back a second time is skipped instead of repeated. */
                var seen = {};
                Array.prototype.forEach.call(document.querySelectorAll('.joq-home-split__main a[href], .joq-hero a[href]'), function (a) {
                  seen[a.getAttribute('href')] = true;
                });

                function reset() {
                  btn.disabled = false;
                  btn.classList.remove('is-loading');
                  btn.innerHTML = label;
                }

                btn.addEventListener('click', function () {
                  btn.disabled = true;
                  btn.classList.add('is-loading');
                  btn.innerHTML = loading;

                  $.get('https://admin.joq-albania.com/more-home?featuredOffset=' + featuredOffset + '&topOffset=' + topOffset + '&lastOffset=' + lastOffset, function (data) {
                    featuredOffset += 6;
                    topOffset += 4;
                    lastOffset += 14;

                    try {
                      /* jQuery already parses the body when the endpoint sends a JSON content type */
                      var items = (typeof data === 'string') ? JSON.parse(data) : data;

                      (items.featured || []).forEach(function (article) {
                        if (seen[article.link]) { return; }
                        seen[article.link] = true;
                        var catIcon = article.cat ? catIcons[String(article.cat).toLowerCase()] : '';
                        var kicker = article.cat
                          ? '<span class="joq-story__kicker">' +
                              (catIcon ? '<img class="joq-story__kicker-icon" src="' + catIcon +
                                         '" alt="" width="144" height="144" loading="lazy" decoding="async">' : '') +
                              article.cat + '</span>' : '';
                        var excerpt = article.excerpt
                          ? '<p class="joq-story__excerpt">' + article.excerpt + '</p>' : '';
                        var meta = [article.time_ago || article.post_date || '',
                                    article.read_time ? article.read_time + ' min lexim' : '']
                                   .filter(Boolean).join(' · ');
                        $('#joq-more-stories').append('<article class="joq-story">' +
                          '<a href="' + article.link + '">' +
                            '<div class="joq-story__body">' + kicker +
                              '<h3 class="joq-story__title">' + article.title + '</h3>' + excerpt +
                              '<div class="joq-story__meta">' + meta + '</div>' +
                            '</div>' +
                            '<div class="joq-story__media">' + thumb(article.image) + '</div>' +
                          '</a></article>');
                      });

                      var n = $('.loadTopNews .joq-trending__item').length;
                      (items.top || []).forEach(function (article) {
                        n++;
                        $('.loadTopNews').append('<article class="joq-trending__item">' +
                          '<a href="' + article.link + '">' +
                            '<div class="joq-trending__top">' +
                              '<span class="joq-trending__num">' + String(n).padStart(2, '0') + '</span>' +
                              '<div class="joq-trending__img">' + thumb(article.image) + '</div>' +
                            '</div>' +
                            '<div class="joq-trending__title">' + article.title + '</div>' +
                          '</a></article>');
                      });

                      (items.last || []).forEach(function (article) {
                        $('#joq-last-list').append('<a class="joq-post__sidebar-article" href="' + article.link + '">' +
                          '<div class="joq-post__sidebar-img">' + thumb(article.image) + '</div>' +
                          '<div class="joq-post__sidebar-body">' +
                            '<div class="joq-post__sidebar-title">' + article.title + '</div>' +
                            '<div class="joq-post__sidebar-time">' + (article.time_ago || article.cat || '') + '</div>' +
                          '</div></a>');
                      });
                    } catch (e) {
                      console.log(e);
                      btn.remove();
                      return;
                    }

                    if (topOffset > 9) { btn.remove(); return; }
                    reset();
                  }).fail(function () { btn.remove(); });
                });
              })();
            </script>
            </div><?php /* .joq-feed__tail */ ?>

          </div>

          <?php /* One cycle is on screen at a time now, so the rail is sized to sit
                   beside it: just "Të fundit". Most-read and the remaining 300x250s
                   moved to the full-width band below, where they no longer stretch
                   this row far past the column next to it. */ ?>
          <aside class="joq-rail">

          <div class="joq-latest">
            <div class="joq-section__header">
              <h2 class="joq-section__title">T&euml; fundit</h2>
              <a class="joq-section__more" href="/kategori/lajme.html">Shiko t&euml; gjitha &rarr;</a>
            </div>
            <div id="joq-last-list">
            <?php
                $i = 0;
                $argsQuery = array(
                  'post_type'        => 'post',
                  'posts_per_page'   => 7,
                  'post_status'      => 'publish',
                  'category__not_in' => $joq_excluded,
                  'post__not_in'     => $joq_rail_exclude,
                );
              $lastHeadlines = new WP_Query( $argsQuery );
                while( $lastHeadlines->have_posts() ): $lastHeadlines->the_post();
                  $i++;
                  $joq_shown[] = get_the_ID();

                  if($i === 3) { ?>
                    <div class="joq-latest__ad pc-only">
                        <div class="adunit-1" data-adunit="joq__300x250-8" data-dimensions="300x250" style="width:300px;"></div>
                    </div>
                  <?php
                  }

                  if($i === 4) {
                  ?>
                    <div class="joq-latest__ad pc-only">
                        <div class="adunit-1" data-adunit="joq__300x250-4" data-dimensions="300x250" style="width:300px;"></div>
                    </div>
                  <?php
                  }

                  if($i === 6) {
                  ?>
                  <div class="joq-latest__ad mob-pc-banner-wrapper">
                      <a href="https://aleancaetike.media/decent-invest-offer-easily/" target="_blank">
                          <img style="width: 100%; max-width:300px;" src="/b/ame/300x260/2020-27-10.jpg" alt="Reklam&euml;: Decent Invest" loading="lazy" decoding="async" />
                      </a>
                  </div>
                  <?php
                  }
              ?>
              <a class="joq-post__sidebar-article" href="<?php echo get_permalink(); ?>">
                <?php $railImg = fix_post_thumbnail( get_the_post_thumbnail_url( get_the_ID(), 'img2' ) ); ?>
                <div class="joq-post__sidebar-img">
                  <?php if ( $railImg ) : ?>
                  <img src="<?php echo $railImg; ?>" alt="" width="527" height="375" loading="lazy" decoding="async" />
                  <?php endif; ?>
                </div>
                <div class="joq-post__sidebar-body">
                  <div class="joq-post__sidebar-title"><?php echo get_the_title(); ?></div>
                  <div class="joq-post__sidebar-time">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-1px;margin-right:4px" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><?php echo joq_time_ago(); ?>
                  </div>
                </div>
              </a>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>

          <?php /* Sticky: the feed grows as the reader presses "Më shumë", so this
                   follows them down instead of letting the column run dry. */ ?>
          <div class="joq-rail__sticky pc-only">
            <div class="adunit-1" data-adunit="joq__300x250-bottomRight" data-dimensions="300x250"></div>
          </div>

          </aside>

        </div>
      </section>
      <!-- End Aktualitet + Të fundit -->

      <?php
        /* Argëtim row: a light closing note so the page does not fade out after
           the feed, and so the ad band below sits between two content sections
           instead of floating on its own. Skipped entirely when the category is
           empty rather than rendering a heading over nothing. */
        $joq_row_q = new WP_Query( array(
          'post_type'           => 'post',
          'post_status'         => 'publish',
          'category_name'       => 'argetim',
          'posts_per_page'      => 4,
          'post__not_in'        => $joq_shown,
          'ignore_sticky_posts' => true,
          'no_found_rows'       => true,
        ) );
        foreach ( $joq_row_q->posts as $rowP ) { $joq_shown[] = $rowP->ID; }
      ?>
      <?php if ( $joq_row_q->have_posts() ) : ?>
      <!-- Argëtim row -->
      <section class="joq-section joq-home-row" data-animate>
        <div class="joq-section__header">
          <h2 class="joq-section__title"><?php echo joq_cat_icon_img( 'argetim', 'joq-section__title-icon' ); ?>Arg&euml;tim</h2>
          <a class="joq-section__more" href="/kategori/argetim.html">Shiko t&euml; gjitha &rarr;</a>
        </div>
        <div class="joq-grid">
          <?php foreach ( $joq_row_q->posts as $rowP ) : ?>
          <article class="joq-card">
            <a class="joq-card__link" href="<?php echo get_permalink( $rowP->ID ); ?>">
              <div class="joq-card__img"><?php echo joq_thumb_img( $rowP->ID ); ?></div>
              <div class="joq-card__body">
                <h3 class="joq-card__title"><?php echo get_the_title( $rowP->ID ); ?></h3>
                <div class="joq-card__time"><time datetime="<?php echo get_the_date( 'c', $rowP->ID ); ?>"><?php echo joq_time_ago( $rowP ); ?></time></div>
              </div>
            </a>
          </article>
          <?php endforeach; ?>
        </div>
      </section>
      <!-- End Argëtim row -->
      <?php endif; ?>

      <!-- Ad band -->
      <div class="joq-adrow pc-only">
        <span class="joq-adrow__label">Reklam&euml;</span>
        <div class="adunit-1" data-adunit="joq__PC-300x250-11" data-dimensions="300x250"></div>
        <div class="adunit-1" data-adunit="joq__300x250-9" data-dimensions="300x250"></div>
      </div>

      <?php
        /* Most read, rendered here rather than fetched. The old AJAX fragment had
           no failure path, so a missing file left four shimmering skeletons on
           the page for good. The readership ranking comes from the same API,
           and any shortfall (API down, quiet day) is topped up with the latest
           stories not already on the page, so the strip is never empty or fake. */
        $joq_top_ids = joq_popular_post_ids();
        $joq_top     = array();
        if ( $joq_top_ids ) {
          $joq_top_q = new WP_Query( array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'post__in'            => $joq_top_ids,
            'orderby'             => 'post__in',
            'posts_per_page'      => 5,
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
          ) );
          $joq_top = $joq_top_q->posts;
        }
        if ( count( $joq_top ) < 5 ) {
          $joq_fill_q = new WP_Query( array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 5 - count( $joq_top ),
            'post__not_in'        => array_merge( $joq_shown, wp_list_pluck( $joq_top, 'ID' ) ),
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
          ) );
          $joq_top = array_merge( $joq_top, $joq_fill_q->posts );
        }
        /* Veç e jona renders below this and should not repeat what is already
           sitting in the most-read strip. */
        foreach ( $joq_top as $topShown ) { $joq_shown[] = $topShown->ID; }
      ?>
      <?php if ( $joq_top ) : ?>
      <!-- Most read -->
      <section class="joq-section" data-animate>
        <div class="joq-section__header">
          <h2 class="joq-section__title">M&euml; t&euml; lexuarat</h2>
        </div>
        <div class="loadTopNews joq-trending">
          <?php foreach ( $joq_top as $rank => $topP ) : ?>
          <article class="joq-trending__item">
            <a href="<?php echo get_permalink( $topP->ID ); ?>">
              <div class="joq-trending__top">
                <span class="joq-trending__num"><?php echo str_pad( $rank + 1, 2, '0', STR_PAD_LEFT ); ?></span>
                <div class="joq-trending__img"><?php echo joq_thumb_img( $topP->ID ); ?></div>
              </div>
              <div class="joq-trending__title"><?php echo get_the_title( $topP->ID ); ?></div>
            </a>
          </article>
          <?php endforeach; ?>
        </div>
      </section>
      <!-- End Most read -->
      <?php endif; ?>

      <!-- Report CTA -->
      <section class="joq-report" data-animate>
        <span class="joq-report__icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        </span>
        <div class="joq-report__text">
          <div class="joq-report__title">Ke nj&euml; lajm? Na shkruaj!</div>
          <div class="joq-report__sub">D&euml;rgo foto, video ose denoncimin t&euml;nd direkt n&euml; redaksi. Z&euml;ri yt ka r&euml;nd&euml;si.</div>
        </div>
        <a class="joq-report__btn" href="https://wa.me/+355699299998" target="_blank" rel="noopener">
          D&euml;rgo tani
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <div class="joq-report__badges">
          <div class="joq-report__badge">
            <span class="joq-report__badge-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
            Anonimitet i sigurt
          </div>
          <div class="joq-report__badge">
            <span class="joq-report__badge-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></span>
            Raportim i shpejt&euml;
          </div>
          <div class="joq-report__badge">
            <span class="joq-report__badge-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
            N&euml; sh&euml;rbim t&euml; qytetar&euml;ve
          </div>
        </div>
      </section>
      <!-- End Report CTA -->

      <?php
        /* Queried before the section opens, the way Argëtim and Më të lexuarat
           are. The heading used to print unconditionally with the loop inside,
           so when post__not_in starved the query the page was left with a
           titled, empty accent band -- the exact empty box this redesign
           removed everywhere else.

           post__not_in: the Veç e jona category block higher up already shows
           four of these, and the page should not repeat itself. */
        $lastHeadlines = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5, 'post_status' => 'publish', 'category_name' => 'vec-e-jona', 'post__not_in' => $joq_shown, 'ignore_sticky_posts' => true ) );
      ?>
      <?php if ( $lastHeadlines->have_posts() ) : ?>
      <!-- Home Vec e Jona -->
      <section class="joq-section joq-section--accent" data-animate>
        <div class="joq-section__header">
          <h2 class="joq-section__title"><?php echo joq_cat_icon_img( 'vec-e-jona', 'joq-section__title-icon' ); ?>Ve&ccedil; e jona</h2>
          <a class="joq-section__more" href="/kategori/vec-e-jona.html">T&euml; gjitha &rarr;</a>
        </div>

        <div>
        <?php
          $vecNum = 0;
          while( $lastHeadlines->have_posts() ): $lastHeadlines->the_post();
            $vecNum++;
        ?>
          <article class="joq-list__item">
            <a href="<?php echo get_permalink(); ?>">
              <span class="joq-list__num"><?php echo $vecNum; ?></span>
              <div class="joq-list__img"><?php echo joq_thumb_img( get_the_ID() ); ?></div>
              <div class="joq-list__body">
                <h3 class="joq-list__title"><?php echo get_the_title(); ?></h3>
                <p class="joq-list__excerpt"><?php $text = wp_strip_all_tags( get_the_content() ); echo wp_trim_words( $text, 40, '...' ); ?></p>
                <div class="joq-list__meta">
                  <?php $vecAuthor = joq_author_line(); if ( $vecAuthor ) : ?>Shkruar nga: <?php echo esc_html( $vecAuthor ); ?> | <?php endif; ?>Publikuar m&euml;: <?php echo get_the_date( 'd.m.Y, H:i' );?>
                </div>
              </div>
            </a>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </section>
      <!-- End Home Vec e Jona -->
      <?php endif; ?>

    </main>

<?php get_template_part( 'templates/joqFooter' ); ?>

    <a href="https://wa.me/+355699299998" id="whatsapp-button" class="mobile-only">
        <img width="24px" height="24" src="https://static.joq-albania.com/assets/images/whatsapp-logo.svg" alt="D&euml;rgo denoncim n&euml; WhatsApp" decoding="async">
    </a>


  <!-- Swiper JS -->
  <script src="https://static.joq-albania.com/assets/js/swiper-bundle.min.js" type="text/javascript"></script>
  <script async type="text/javascript">
      var swiper = new Swiper(".mySwiper", {
          spaceBetween: 0,
          loop: true,
          centeredSlides: true,
          autoplay: {
            delay: 10000,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
      });
    </script>

<script src="https://static.joq-albania.com/assets/js/joq-poll3.js?v12.39" type="text/javascript"></script>
  <script async src="https://static.joq-albania.com/assets/js/newscript.js" type="text/javascript"></script>
  <script async src="https://static.joq-albania.com/assets/js/bannersys.js?v=2.05" type="text/javascript"></script>


    <script src="/wp-content/themes/joq/assets/js/joq-design-system.js?v=3.8"></script>
</body>

</html>

<?php



$content = ob_get_contents();
ob_end_clean();

$nameANDfolder = 'index.html';
// decide the name and folder


// Get the content that is in the buffer and put it in your file //
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/' . $nameANDfolder,  $content);

// is used for the app
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/mobile/' . $nameANDfolder,  $content);


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
