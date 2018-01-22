<div class="content">

<div aligh="center">

<?php


if ($_GET['project']) {
$project = new searchURL;
$project->search($_GET['project']);
if ($_GET['project'] === $project->result()) {
$selectProject = $project->result();
$idProject = $project->id();
$block = new textSearch;
$block->search($idProject);
$blockID = $block->searchID(0);
include_once $project->result() . ".html";
}
else {
?>
Нет такого проекта
<?php
}
}
else {
$noProject = new projects;
$noProject->dataProjects();
$selectProject = $noProject->resUrl(0);
$idProject = $project->resID(0);
$block = new textSearch;
$block->search($idProject);
$blockID = $block->searchID(0);
include_once $noProject->resUrl(0) . ".html";
}




?>

</div>

</div>