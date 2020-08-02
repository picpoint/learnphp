<?php



class ShowGalery {

  public function showPictures() {
    $usersFolder = __DIR__.'../usersFolder';
    $usr = $_SESSION['login'];

    echo($usersFolder);
    echo "<br>";
    echo($usr);
  }
}