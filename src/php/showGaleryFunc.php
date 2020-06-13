<?php



function showGalery() {
  $userlogin = $_SESSION["loginname"];    
  $folder = __DIR__."/../pict/$userlogin";

  if(file_exists($folder)) {
    $folderContent = scandir($folder);

    foreach($folderContent as $key => $value) {      
      if($value == '.' || $value == '..') {
        continue;
      } else {
        echo('<img src="pict/' . $userlogin . '/' .  $value . '">');
      }      
    }

  } else {
    echo("Galery dont have image ... :-( ");
  }

}