<?php


function readGuestBook() {
  $file = __DIR__."\..\guestbook.txt";

  if(file_exists($file)) {
    $arr = file($file, FILE_IGNORE_NEW_LINES);    

    foreach($arr as $key => $value) {      
      $res = explode(":", $value);      
      $name = $res[0];
      $message = $res[1];
      $mass[$name] = $message;

      echo($name);
      echo($message);            
      echo("<br>");
    }    


  } else {
    echo("file not exists ...");
  }  
  
}