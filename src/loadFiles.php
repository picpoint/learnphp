<?php

function loadFile() {
  if(isset($_POST["actionbtn"])) {    
    var_dump($_FILES["loadfield"]);            

    if(0 == $_FILES["loadfield"]["error"]) {
      $fl = $_FILES["loadfield"]["tmp_name"];
      $path = __DIR__.'/pict/'.$_FILES["loadfield"]["name"];
      move_uploaded_file($fl, $path);
    }


  }
}