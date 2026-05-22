<?php


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//start cache system



if(is_home() || is_single() || is_category() ){
     ob_start();
}

?>

<?php get_template_part( './templates/theHeader' ); ?>





