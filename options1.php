<?php

mysql_query("SET NAMES utf8");

// проекты

class projects {
var $data;
var $rows;
var $res;
function dataProjects() {
// выбираем книги по имени автора
$this->data = @mysql_query("SELECT * FROM projects ORDER BY id DESC");
$this->rows = @mysql_num_rows($this->data)-1;
}
function rowProjects() {
return $this->rows;
}
function resID($number) {
$this->res = @mysql_result($this->data, $number, 0);
return $this->res;
}
function resName($number) {
$this->res = @mysql_result($this->data, $number, 1);
return $this->res;
}
function resTextID($number) {
$this->res = @mysql_result($this->data, $number, 2);
return $this->res;
}
function resUserID($number) {
$this->res = @mysql_result($this->data, $number, 3);
return $this->res;
}
function resTime($number) {
$this->res = @mysql_result($this->data, $number, 4);
return $this->res;
}
function resDates($number) {
$this->res = @mysql_result($this->data, $number, 5);
return $this->res;
}
function resTimeString($number) {
$this->res = @mysql_result($this->data, $number, 6);
return $this->res;
}

function resUrl($number) {
$this->res = @mysql_result($this->data, $number, 7);
return $this->res;
}

function resAllID() {
for ($i=0; $i<=$this->rows; $i++) {
echo $this->resID($i);
if ($i<$this->rows) {
echo ", ";
} 
} 
$i=0;
echo "<br>";
} 

function resAllName($a, $b) {
for ($v=0; $v<=$this->rows; $v++) {
if ($a) {
echo $a;
}
echo $this->resName($v);
if ($b) {
echo $b;
}
} 
$v=0;
echo "<br>";
} 

function resAllTextID($a, $b) {
for ($c=0; $c<=$this->rows; $c++) {
if ($a) {
echo $a;
}
echo $this->resTextID($c);
if ($b) {
echo $b;
}
} 
$c=0;
echo "<br>";
} 

function resAllUserID($a, $b) {
for ($q=0; $q<=$this->rows; $q++) {
if ($a) {
echo $a;
}
echo $this->resUserID($q);
if ($b) {
echo $b;
}
} 
$q=0;
echo "<br>";
} 

function resAlTime($a, $b) {
for ($x=0; $x<=$this->rows; $x++) {
if ($a) {
echo $a;
}
echo $this->resTime($x);
if ($b) {
echo $b;
}
} 
$x=0;
echo "<br>";
} 

function resAlDates($a, $b) {
for ($k=0; $k<=$this->rows; $k++) {
if ($a) {
echo $a;
}
echo $this->resDates($k);
if ($b) {
echo $b;
}
} 
$k=0;
echo "<br>";
} 

function resAlTimeString($a, $b) {
for ($w=0; $w<=$this->rows; $w++) {
if ($a) {
echo $a;
}
echo $this->resTimeString($w);
if ($b) {
echo $b;
}
} 
$w=0;
echo "<br>";
} 

function resAlUrl($a, $b) {
for ($z=0; $z<=$this->rows; $z++) {
if ($a) {
echo $a;
}
echo $this->resUrl($z);
if ($b) {
echo $b;
}
} 
$z=0;
echo "<br>";
} 






}


// текст

class texts {
var $data;
var $rows;
var $res;

function dataTexts() {
// выбираем книги по имени автора
$this->data = @mysql_query("SELECT * FROM texts");
$this->rows = @mysql_num_rows($this->data)-1;
}
function rowTexts() {
return $this->rows;
}
function resID($number) {
$this->res = @mysql_result($this->data, $number, 0);
return $this->res;
}

function resProjectID($number) {
$this->res = @mysql_result($this->data, $number, 1);
return $this->res;
}

function resTime($number) {
$this->res = @mysql_result($this->data, $number, 2);
return $this->res;
}
function resDates($number) {
$this->res = @mysql_result($this->data, $number, 3);
return $this->res;
}
function resTimeString($number) {
$this->res = @mysql_result($this->data, $number, 4);
return $this->res;
}


function resAllID() {
for ($i=0; $i<=$this->rows; $i++) {
echo $this->resID($i);
if ($i<$this->rows) {
echo ", ";
} 
} 
$i=0;
echo "<br>";
} 

function resAllProjectID($a, $b) {
for ($v=0; $v<=$this->rows; $v++) {
if ($a) {
echo $a;
}
echo $this->resProjectID($v);
if ($b) {
echo $b;
}
} 
$v=0;
echo "<br>";
} 


function resAllTime($a, $b) {
for ($x=0; $x<=$this->rows; $x++) {
if ($a) {
echo $a;
}
echo $this->resTime($x);
if ($b) {
echo $b;
}
} 
$x=0;
echo "<br>";
} 

function resAllDates($a, $b) {
for ($k=0; $k<=$this->rows; $k++) {
if ($a) {
echo $a;
}
echo $this->resDates($k);
if ($b) {
echo $b;
}
} 
$k=0;
echo "<br>";
} 

function resAllTimeString($a, $b) {
for ($w=0; $w<=$this->rows; $w++) {
if ($a) {
echo $a;
}
echo $this->resTimeString($w);
if ($b) {
echo $b;
}
} 
$w=0;
echo "<br>";
} 


}

// создание проекта

class create {
var $time;
var $dates;
var $timeString;
var $data;
var $result;

function createProject () {
projects::dataProjects();
$this->result = projects::resID(0) + 1;
$this->time = date("H:i:s");
$this->dates = date("d.m.Y");
$this->timeString = date("YmdHis");
return $this->result;
}

}









?>


