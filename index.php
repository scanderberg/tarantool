<?php

require_once 'conf.php';
require_once 'db.php';
require_once 'options.php';

if (@$_POST['pass']) {
if (@$_POST['pass'] === "vewubuiv7547") {

setcookie("mongo","vewubuiv7547",time()+36000);
header('Location: http://vobber.ru');

require_once 'top.php';
require_once 'left.php';
require_once 'center.php';
require_once 'bottom.php';

?>



<?php

}
else {
$novalid = "yes";
header('Location: http://vobber.ru/login.php?novalid=yes');
}
}


if (@$_COOKIE['mongo'] === "vewubuiv7547") {

require_once 'top.php';
require_once 'left.php';
require_once 'center.php';
require_once 'bottom.php';

?>

<?php

}
else {
if (@$_POST['pass'] !== "vewubuiv7547") {
header('Location: http://vobber.ru/login.php');
}
}

?>