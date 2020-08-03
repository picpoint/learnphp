<?php



class GetUserContent {

  public function getContent() {
    $pathToFolder = __DIR__ . '/../usersFolders';
    $usr = $_SESSION['login'];
    $usrFolder = $pathToFolder . '/' . $usr;
    $pict = $usrFolder . '/picture';
    $muz = $usrFolder . '/music';    
    $usrContent = [];
    $usrContent[] = $pict;
    $usrContent[] = $muz;
    return $usrContent;    
  }


}