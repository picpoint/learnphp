<?php

function loadFile() {

  if(isset($_POST['actionbtn'])) {
    $path = __DIR__."/pict";
    var_dump($_FILES['loadfield']);
    
    if(0 == $_FILES['loadfield']['error']) {
      $fl = $_FILES['loadfield']['tmp_name'];
      move_uploaded_file($fl, $path);
    } else {
      echo("some error");
    }
  }
}