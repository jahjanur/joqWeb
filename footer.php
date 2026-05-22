<?php get_template_part( './templates/theFooter' ); ?>


<?php

if(is_home() || is_single() || is_category() ){

    global $post;

    $content = ob_get_contents();
    ob_end_clean();

    $nameANDfolder = '';
    // decide the name and folder

    if(is_home()){
        $nameANDfolder = 'index.html';
    }

    else if (is_single()){
        $nameANDfolder = 'artikull/' . $post->ID . '.html';
    }

    else if(is_category()){

        $thiscat = $wp_query->get_queried_object();
        // var_dump();

        if ($thiscat->slug == 'maqedoni' || $thiscat->slug == 'kosova' || $thiscat->slug == 'english') {
            $nameANDfolder = $thiscat->slug . '/index.html'; 
        } else {
            $nameANDfolder = 'kategori/' . $thiscat->slug . '.html';
        }
        
    }
    else {

        $nameANDfolder = 'other.html';

    }


    if($nameANDfolder){


        if( is_home() ){

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
            // $co_content = preg_replace($domain, 'https://jetaoshqef.co/', $content, 2);
            // //$co_content = preg_replace($fbpage, '1413297348940786', $co_content);
            // gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/' . $nameANDfolder,  $co_content);


        } else {

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
            // $co_content = preg_replace($domain, 'https://jetaoshqef.co/', $content, 2);
            // //$co_content = preg_replace($fbpage, '1413297348940786', $co_content);
            // gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/' . $nameANDfolder,  $co_content);
            

        }


    }
    

}

?>
