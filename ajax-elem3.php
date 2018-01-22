<?php

if($_POST['url']){

$fp = fopen("/var/www/www-root/data/www/vobber.ru/" . $_POST['project'] . ".html", "w");
 
echo $_POST['url'];
 
fwrite($fp, $_POST['url']);
 
fclose($fp);
	
	
	
}


?>