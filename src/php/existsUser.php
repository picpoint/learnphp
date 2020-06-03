<?php



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
    return $login;
  } else {
    echo("<br>");
    echo("логина нет в БД...  Введённое значение - $login");
    echo("<br>");
    return false;
  }
  
}

echo(existsUserFunc("kadabra"));