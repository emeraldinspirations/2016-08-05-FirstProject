<?php

include "class.php";

if(isset($argv[1]) && isset($argv[2])) {
  
  $gTest = new test($argv[1],$argv[2]);
  
  echo $gTest->getSum()."\n";
  
} else {
  
  echo "usage: ".$argv[0]." <NumberA> <NumberB>\n";
  
}
