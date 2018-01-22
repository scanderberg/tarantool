<?php

if($_POST['url']){

$fp = fopen("/var/www/www-root/data/www/vobber.ru/aaaaaaaa.html", "w");
 
echo $_POST['url'];
 
fwrite($fp, $_POST['url']);
 
fclose($fp);
	
	
	
}


?>