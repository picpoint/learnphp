<?php 
  

function getUsersListFunc() {
	$db = __DIR__.'/../../db.txt';
  $content = file($db);
  $users = [];
  $pass = [];
  	
	foreach($content as $key => $value) {
    echo("<br>");
    $res = explode(": ", $value);
    
    foreach($res as $key => $value) {
      if($key == 0) {
        array_push($users, $value);
      } elseif($key == 1) {
        array_push($pass, $value);
      }
    }

  }
   
  $result = array_combine($users, $pass);
  
  foreach($result as $key => $value) {
    echo("$key - $value" . "HASH =>" . password_hash($value, PASSWORD_DEFAULT));
    echo("<br>");
  }
    
  
}