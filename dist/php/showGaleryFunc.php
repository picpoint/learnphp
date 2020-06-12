<?php



function showGalery() {
  $userlogin = $_SESSION["loginname"];    
  $folder = __DIR__."/../pict/$userlogin";

  if(file_exists($folder)) {
    echo("<br>");
    var_dump(scandir($folder));

    $folderContent = scandir($folder);

    foreach($folderContent as $key => $value) {
      echo("<br>");
      echo("$key - $value");      
      echo("<br>");
      echo(' <img src=" ' . $value . ' "> ');            
    }

  } else {
    echo("Galery dont have image ... :-( ");
  }
 


}