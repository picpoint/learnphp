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
