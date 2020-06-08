<?php

function regUser() {
  if(isset($_POST['btnregistration']) && !empty($_POST['usrlogreg'])  && !empty($_POST['usrpassreg']) ) {
    $usrlogreg = $_POST['usrlogreg'];
    $usrpassreg = $_POST['usrpassreg'];

    echo("$usrlogreg  -  $usrpassreg");
    
    $db = __DIR__.'/../../db.txt';
    $fp = fopen($db, "a+");
    $logreg = $usrlogreg . ': ' . $usrpassreg;
    fwrite($fp, $logreg);    
    fclose($fp);

    echo("<br>");
    echo($db);

  } else {
    echo("Не заполнены поля");
  }
}