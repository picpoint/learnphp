<?php

function loadFile() {
  if(isset($_POST['actionbtn'])) {    
    var_dump($_FILES["loadfield"]);        
    var_dump($_FILES["loadfield"]["name"]);        

    if(0 == $_FILES["loadfield"]["error"]) {
      $fl = $_FILES["loadfield"]["tmp_name"];
      $path = __DIR__."pict";
      move_uploaded_file($fl, $path);
    }


  }
}