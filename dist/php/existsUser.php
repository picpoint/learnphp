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

  var_dump($mass);

  if(in_array($login, $mass)) {
    echo("<br>");
    echo("Логин соответствует - $login");
    return $login;
  } else {
    echo("<br>");
    echo("логина нет в БД...  Введённое значение - $login");
    echo("<br>");
    return 'not';
  }
  



}