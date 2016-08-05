<?php

include "class.php";

$gOutput = "";

if(!isset($_GET['NumberA'])) {
  $gOutput .= "<strong>NumberA Parameter Not Set</strong><br />";
}

if(!isset($_GET['NumberB'])) {
  $gOutput .= "<strong>NumberB Parameter Not Set</strong><br />";
}

if($gOutput != "") {
  die($gOutput);
}

$gTest = new test($_GET['NumberA'],$_GET['NumberB']);

echo $gTest->getSum();
