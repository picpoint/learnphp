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

  // $arrwooman = array("а", "я", "ь", "у", "е", "и", "с", "э", "з");
  // $arrman = array("л", "п", "и", "д");  

  if(isset($_POST["task4"])) {
    $name = mb_strtolower($_POST["inpname"]);

    if(empty($name)) {
      return "Введите имя";
    } elseif(mb_strrpos($name, "а") || mb_strrpos($name, "у") || mb_strrpos($name, "е") || mb_strrpos($name, "и")) {
      return "Это женское имя";
    } elseif(mb_strrpos($name, "л") || mb_strrpos($name, "п") || mb_strrpos($name, "д") || mb_strrpos($name, "н")) {
      return "Это мужское имя";
    } else {
      return "Пол не определён";
    }    
  }  

}


/*
Женские имена(окончания)
а, у, е, с, э, з,      +"н", +"т", +"р", +"м", +"й", +"ь", +"я", +"и"

Мужские имена(окончания)
л, п, д,                      +н, +м, +т, +р, +"й", +"ь", +"я", +"и"

сходство букв - +"н", +"т", +"р", +"м", +"й", +"ь", +"я", +"и"

*/