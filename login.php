<?php

SetCookie("mongo","");

?>

<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title>VOBBER | Прототипы для сайтов</title>
   
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
<img src="http://vobber.ru/img/logo2.png" />
<br><br>
<form align="center" action='http://vobber.ru' id='mongo' class='mongo' name='mongo' method='post'>
<div align="center">
<div align="center" class="input-group" style="width: 250px;">

  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input style="width: 200px;" class="form-control" type="password" placeholder="Пароль" name='pass'>
</div>
</div>
<br>
<input type='submit' value='войти' class="btn btn-primary" style='cursor: pointer'>
</form>
</div>


</body>

</html>
