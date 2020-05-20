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



function discreminant($a, $b, $c) {
  $discrim = $b*$b - 4*$a*$c;
  $x1 = (-$b - sqrt($discrim)) / 2*$a;
  $x2 = (-$b - sqrt($discrim)) / 2*$a;

  return $discrim;
}




