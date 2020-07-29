<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


class AutoInput {
  
  public function autoInp() {
    if(isset($_COOKIE["name"]) ) {
      header('location: ../view/userPage.php');
    } else {
      echo("................pffffffffff.......................");
    }
  }


}