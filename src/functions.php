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




function galeryImg() {
  $mass = [1=>'01.jpg', 2=>'02.jpg', 3=>'03.jpg', 4=>'04.jpg'];
  
  foreach($mass as $key => $value) {    
    echo(" <a href='#'> <img src=pict/".$value."> </a> ");
  }
  
}