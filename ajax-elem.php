<?php

require_once 'conf.php';
require_once 'db.php';
require_once 'options.php';

if($_POST['url']){

$fp = fopen("/var/www/www-root/data/www/vobber.ru/" . $_POST['project'] . ".html", "w");
 
echo $_POST['url'];
 
fwrite($fp, $_POST['url']);
 
fclose($fp);
	
}

if($_POST['block']){

$addBlocks = new newBlock;
$addBlocks->createBlock($_POST['block'], $_POST['projectID']);

}

if($_POST['delete']){

$delBlock = new textDelete;
$delBlock->delete($_POST['delete'], $_POST['projectID']);

}

?>