<?php

function regUser() {
  $db = __DIR__.'/../../db.txt';
  $arrlogins = [];
  $loginisset = "Логин существует";
  $emptyfields = "Не заполнены поля";
  $userisreg = "Вы зарегистрированны !";

  if(isset($_POST['btnregistration']) && !empty($_POST['usrlogreg'])  && !empty($_POST['usrpassreg']) ) {    
    $usrlogreg = $_POST['usrlogreg'];
    $usrpassreg = $_POST['usrpassreg'];

    $file = file($db);
    
    foreach($file as $key => $value) {      
      $res = explode(": ", $value);      
      foreach($res as $key => $value) {
        if($key == 0) {          
          array_push($arrlogins, $value);
        }
      }      
    }
    
    if(in_array($usrlogreg, $arrlogins)) {      
      echo($loginisset);
    } else {
      $fp = fopen($db, "a+");
      $logreg = $usrlogreg . ': ' . $usrpassreg . "\n";
      fwrite($fp, $logreg);    
      fclose($fp);
      echo($userisreg);
    }

  } else {
    echo($emptyfields);    
  }

}