<?php

SetCookie("mongo","");

?>

<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title>Прото</title>
   
   <meta charset='utf-8'>
   

   
   <link href='css/font-awesome.min.css' rel='stylesheet'>
   <link href='css/jquery-ui.min.css' rel='stylesheet'>
   <link href='css/bootstrap.min.css' rel='stylesheet'>
   <link href='css/style.css' rel='stylesheet'>


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type='text/javascript' src='js/easing.js'></script>
   <script type="text/javascript" src="js/jqueryrotate.2.1.js"></script>
   <script type="text/javascript" src="js/jquery-ui.min.js"></script>
   
 </head>

<body>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div align='center'>

<?php
if (@$_GET['novalid'] === "yes") {
echo "<br><b style='color: red;'>Неверный пароль!</b><br>";
}
?>
<br>
<form action='http://vobber.ru' id='mongo' class='mongo' name='mongo' method='post'>
<input type="password" size="40" id='pass' class='pass' name='pass' placeholder='Пароль' style='padding: 7px; height: 40px; text-align: center'>
<br>
<br>
<input type='submit' value='войти' style='padding: 10px; cursor: pointer'>
</form>
</div>


</body>

</html>
