<?php

include_once "index.php";
// include_once "index.php";
// require "index.php";
// require_once "index.php";

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
  $discrim = "";
  $x1 = "";
  $x2 = "";

  if(isset($_POST["task2"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    if(empty($a) || empty($b) || empty($c)) {
      $discrim = " ";
      $x1 = " ";
      $x2 = " ";
    } else {
      $discrim = $b*$b - 4*$a*$c;
      if($discrim < 0) {
        $x1 = $x2 = "Нет корней уравнения";
      } else {
        $x1 = (-$b - sqrt($discrim)) / (2*$a);
        $x2 = (-$b + sqrt($discrim)) / (2*$a);
      }      
    }    
    return array($discrim, $x1, $x2);
  }


  return array($discrim, $x1, $x2);
}

// assert(true == discreminant(2, 5, -7));
// assert(false == empty(discreminant()));
// assert('Не имеет решения' == discreminant(0, 0, 0)[0]);
// assert(0 > discreminant(5, 5, 5)[0]);





function genderDefination() {
  if(isset($_POST["task4"])) {
    $name = mb_strtolower($_POST["inpname"]);
    $arrwooman = array("а", "я", "ь", "у", "е", "и", "с", "э", "з");
    $arrman = array("л", "п", "и", "д");

    if(empty($name)) {
      return "Введите имя";
    } elseif(mb_strrpos($name, "а") || mb_strrpos($name, "я") || mb_strrpos($name, "ь") || mb_strrpos($name, "у")) {
      return "Это женское имя";
    } else {
      return "Скорее всего мужское имя";
    }
  
    //return $_POST["inpname"];
  } else {
    return " ";
  }  
}


/*
Женские имена(окончания)
а, я, ь, у, е, и, с, э, з,      +"н", +"т", +"р", +"м", +"й"

Мужские имена(окончания)
л, п, и, д,                      +н, +м, +т, +р, +"й"

сходство букв - т, н, м, р, 

*/