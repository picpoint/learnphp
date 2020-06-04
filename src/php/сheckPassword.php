<?php
// session_start();




function сheckPasswordFunc() {
  $login = $_SESSION['login'];
  $passHash = $_SESSION['passHash'];
  $passUsr = $_SESSION['passUsr'];
  $result = $_SESSION['result'];

  echo("$login***********");
  echo("<br>");
  echo("<br>");
  var_dump($result);
  echo("<br>");
  echo("<br>");
  
  foreach($passHash as $keyHash => $valueHash) {
    echo("$keyHash - $valueHash");
    echo("<br>");       

    foreach($result as $keyRes => $valueRes) {
      echo("$keyRes - $valueRes");
      echo("<br>");

      if($login == $keyRes) {
        if(password_verify($valueRes, $valueHash)) {
          echo("ВЫ АВТОРИЗОВАННЫ");
          // return true;
          header('location: autoriz.php');
        } else {
          echo("ЛОГИН ИЛИ ПАРОЛЬ НЕПРАВЕЛЬНЫ .....");
          // return false;
        }
      } else {
        echo("такого логина нет....");
        // return false;
      }
      
    }
    
  }
  
}


//checkPasswordFunc($login);



// echo("true / false");	