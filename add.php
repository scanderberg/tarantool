<?php

require_once 'conf.php';
require_once 'db.php';
require_once 'options.php';

if ($_GET['project']) {
$add = new create;
$add->createNameProject($_GET['project'], $_GET['url']);
header('Location: http://vobber.ru/?project=' . $_GET['url']);

}
else {

header('Location: http://vobber.ru');

}

?>