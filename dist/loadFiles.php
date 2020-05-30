<?php

function loadFile() {
  if(isset($_POST["actionbtn"])) {    

    if(0 == $_FILES["loadfield"]["error"]) {
      if($_FILES["loadfield"]["type"] == "image/jpg" || $_FILES["loadfield"]["type"] == "image/jpeg" || $_FILES["loadfield"]["type"] == "image/png") {
        $fl = $_FILES["loadfield"]["tmp_name"];
        $path = __DIR__.'/pict/'.$_FILES["loadfield"]["name"];
        move_uploaded_file($fl, $path);
      } else {
        echo("Тип файла не соответствует");
      }
    }

  }
}