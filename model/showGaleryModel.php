<?php



class GetUserContent {

  public function getContent() {
    $pathToFolder = __DIR__ . '/../usersFolders';
    $usr = $_SESSION['login'];
    $usrFolder = $pathToFolder . '/' . $usr;
    $pict = $usrFolder . '/picture';
    $muz = $usrFolder . '/music';    

    var_dump(scandir($pathToFolder));
    echo("<br>");
    echo($usr);
    echo("<br>");
    var_dump(scandir($usrFolder));

  }


}