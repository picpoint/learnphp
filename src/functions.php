<?php

function readGuestbook() {
  $file = __DIR__.'/../guestbook.txt';
  
  if(file_exists($file)) {    
    $res = file($file, FILE_IGNORE_NEW_LINES);
    
    foreach($res as $key => $value) {
      echo($value);
      echo("<br>");
    }
    
  } else {
    echo('file not exists ...');
  }
}
