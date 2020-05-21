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
    $discrim = $b*$b - 4*$a*$c;

    if(empty($a) || empty($b) || empty($c)) {
      $a = $b = $c = 0; 
      $discrim = 'Не имеет решения';
      $x1 = 'Не имеет корня уровнения';
      $x2 = 'Не имеет корня уровнения';      
    } elseif($discrim < 0) {
      $x1 = 'x1 не имеет решений...';
      $x2 = 'x2 не имеет решений...';
    } else {
      $discrim = $b*$b - 4*$a*$c;
      $x1 = (-$b - sqrt($discrim)) / (2*$a);
      $x2 = (-$b + sqrt($discrim)) / (2*$a);
    }    

    return array($discrim, $x1, $x2);
  }  

}




