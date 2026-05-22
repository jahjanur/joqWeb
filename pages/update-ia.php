<?php
/* 
    Template Name: UPDATE IA
*/


// JOQ.AL //
$xml = file_get_contents('https://8wfrttgeecxwtmuenew.joq-albania.com/feed/instant-articles');

// Write final string to file
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/cachedWeb/feed/instant-article.xml', $xml);


// ORIGINALS //
$main_domain = '/'.preg_quote('<link>https://joq.al/</link>', '/').'/';
$domain = '/'.preg_quote('https://joq.al/artikull', '/').'/';
$placement = '/'.preg_quote('396266784252993_396266807586324', '/').'/';


// JOQALBANIA //
$joqalbania_xml = preg_replace($domain, 'https://joq-albania.com/artikull', $xml);
$joqalbania_xml = preg_replace($main_domain, '<link>https://joq-albania.com/</link>', $joqalbania_xml);
//$joqalbania_xml = preg_replace($placement, '412546756148306_412546782814970', $joqalbania_xml);
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/feed/instant-article.xml', $joqalbania_xml);




// JETAOSHQEF.CO //
$jetaoshqefco_xml = preg_replace($domain, 'https://jetaoshqef.co/artikull', $xml);
$jetaoshqefco_xml = preg_replace($main_domain, '<link>https://jetaoshqef.co/</link>', $jetaoshqefco_xml);
//$jetaoshqefco_xml = preg_replace($placement, '412546756148306_412546782814970', $jetaoshqefco_xml);
gliterin_optimizer_legacy_file_put_contents('/var/www/html/joq.al/wordpress/multipleWeb/jetaoshqef-co/feed/instant-article.xml', $jetaoshqefco_xml);


?>
