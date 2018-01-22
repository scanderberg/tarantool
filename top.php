<?php

require_once 'conf.php';
require_once 'db.php';
require_once 'options.php';

if ($_GET['project']) {
$project = new searchURL;
$project->search($_GET['project']);
if ($_GET['project'] === $project->result()) {
$selectProject = $project->result();
$name = $project->name();
}
}
else {
$noProject = new projects;
$noProject->dataProjects();
$selectProject = $noProject->resUrl(0);
$name = $noProject->resName(0);
}

?>

<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title><?php echo $name; ?> | VOBBER - Прототипы для сайтов</title>
   
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

<div class="modal bs-example-modal-sm">
<form align="center" action='http://vobber.ru/add.php' id='mongo' class='mongo' name='addproject' method='get'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  id="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Новый проект</h4>
      </div>
<div class="input-group margin-bottom-sm" style="margin: 20px;">
  <span class="input-group-addon"><i class="fa fa-window-maximize fa-fw"></i></span>
  <input class="form-control" type="text" name="project" placeholder="Название проекта">
  <input type="hidden" name="url" value="<?php echo genString(10); ?>">
</div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <input type='submit' value='Создать' class="btn btn-primary" style='cursor: pointer'>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </form>
</div><!-- /.modal -->

<div class="header">
<div aligh="left" class="logo"></div>
<div aligh="right" class="action">
<button type="button" class="btn btn-success" id="savenow">Сохранить</button>

<a href="http://vobber.ru/preview.php?project=<?php 
if ($_GET['project']) {
echo $_GET['project'];
}
else {
$preview = new projects;
$preview->dataProjects();
echo $preview->resUrl(0);
}
?>"><button type="button" class="btn btn-default">Предпросмотр</button></a>
<div class="btn-group" style="display: inline-block; margin-right: 15px;">
  <a class="btn btn-default" href="#"><i class="fa fa-cog fa-fw"></i> Настройки</a>
  <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li id="modal" style='cursor: pointer'><a><i class="fa fa-plus fa-fw"></i> Новый проект</a></li>
    <li><a href="http://vobber.ru/all.php"><i class="fa fa-object-group"></i> Все проекты</a></li>
    <li class="divider"></li>
    <li><a href="http://vobber.ru/pofile.php"><i class="fa fa-user fa-fw"></i> Профиль</a></li>
    <li><a href="http://vobber.ru/login.php"><i class="fa fa-power-off fa-fw"></i> Выйти</a></li>
  </ul>
</div>

</div>

</div>