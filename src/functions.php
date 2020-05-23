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
    $lastSymbol = mb_substr($name, -1);
    $arrwoman = array("а", "у", "е", "c", "э", "з", "и");
    $arrman = array("н", "л", "п", "д", "й");    

    for ($i = 0; $i < count($arrwoman); $i++) {
      if($arrwoman[$i] == $lastSymbol) {
        return "Это женское имя. <br>Пол: женский";
      } 
    }

    for($x = 0; $x < count($arrman); $x++) {
      if($arrman[$x] == $lastSymbol) {
        return "Это мужское имя. <br>Пол: мужской";
      }
    }

    return "Пол не определён";    
  } 

  return "";
}


/*
Женские имена(окончания)
а, у, е, с, э, з,      +"н", +"т", +"р", +"м", +"ь", +"я", +"и"

Мужские имена(окончания)
л, п, д,               +н, +м, +т, +р, +"й", +"ь", +"я", +"и"

Совпадения
+"н" - Жасмин, Ляйсан            Семён, Алан
+"т" - Анаит, Гульшат            Азамат, Ашот
+"р" - Айнур, Дженифер           Виктор, Амир
+"м" - Дилярам, Мариям           Ефим, Артём
+"ь" - Любовь, Гузель            Игорь, Даниэль
+"я" - Аля, Агния                Добрыня, Илья
*/