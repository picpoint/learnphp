<?php

function conuction($x, $y) {
  $z = $x && $y;
  if($z == true) {
    echo(1);
  } else {
    echo(0);
  }
}


function disunction($x, $y) {
  $z = $x || $y;
  if($z == true) {
    echo(1);
  } else {
    echo(0);
  }
}


function exor($x, $y) {
  $z = $x ^ $y;
  if($z == true) {
    echo(1);
  } else {
    echo(0);
  }
}



function discreminant() {
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c']; 
  
    if(empty($a) || empty($b) || empty($c)) {
      $a = $b = $c = 0; 
      $discrim = $b*$b - 4*$a*$c;
      $x1 = (-$b - sqrt($discrim)) / 2*$a;
      $x2 = (-$b - sqrt($discrim)) / 2*$a;
    } else {
      $discrim = $b*$b - 4*$a*$c;
      $x1 = (-$b - sqrt($discrim)) / 2*$a;
      $x2 = (-$b - sqrt($discrim)) / 2*$a;
    }    

    return $discrim;
  }  

}




