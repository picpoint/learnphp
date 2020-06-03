<?php
// session_start();


function existsUserFunc($login) {
	$file = __DIR__.'/../../db.txt';	
  $arrUsers = file($file);
  $mass = [];
		
	foreach($arrUsers as $key => $value) {		
    $user = explode(": ", $value);			

    foreach($user as $key => $value) {
      if($key == 0) {
        array_push($mass, $value);
      }
    }
  }  

  if(in_array($login, $mass)) {
    echo("<br>");
    echo("Логин соответствует - $login ");
    echo("<br>");
    $_SESSION['login'] = $login;
    // return $login;
  } else {
    echo("<br>");
    echo("логина нет в БД...  Введённое значение - $login");
    echo("<br>");
    $_SESSION['login'] = 'false';
    // return false;
  }
  
}

// echo(existsUserFunc("kadabra"));