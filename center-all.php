<div aligh="center" class="content" style="width: 100%;">

<div aligh="center">

<?php

$allProject = new projects;
$allProject->dataProjects();
echo "<div align='center'>";
for ($r=0; $r<=$allProject->rowProjects(); $r++) {
?><a class="list" href="http://vobber.ru/?project=<?php echo $allProject->resUrl($r); ?>"><div class="list"><?php
echo $allProject->resName($r);
?></div><?php

} 
echo "</div></a>";





?>

</div>

</div>