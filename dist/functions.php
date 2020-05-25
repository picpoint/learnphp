<?php


function calculate() {
  if(isset($_GET["calc"])) {
    if(!empty($_GET["onenumber"]) && !empty($_GET["twonumber"])) {
      $a = $_GET["onenumber"];
      $b = $_GET["twonumber"];
      $operations = $_GET["operations"];    
      
      if($operations == "+") {
        return $a + $b;
      } elseif($operations == "-") {
        return $a - $b;
      } elseif($operations == "*") {
        return $a * $b;
      } elseif($operations == "/") {
        return $a / $b;
      }
    }
  }

}