<?php
/* 
    Template Name: Country
*/


/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

header('Access-Control-Allow-Origin: https://joq-albania.com');

date_default_timezone_set('Europe/Tirane');
$userCountry = '';
//Check to see if HTTP_CF_IPCOUNTRY exists
if(isset($_SERVER["HTTP_CF_IPCOUNTRY"])){
    //If it is exists, use it.
    $userCountry = $_SERVER["HTTP_CF_IPCOUNTRY"];
}

$date = date('Y-m-d;;;H:i:s');


echo '{"country":"'.$userCountry.'","theDate":"'.$date.'"}';



?>