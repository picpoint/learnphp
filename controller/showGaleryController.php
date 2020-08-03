<?php

require_once "../model/showGaleryModel.php";



class ShowGalery {

  public function showPictures() {
    $datas = new GetUserContent();
    $usrContent = $datas -> getContent();
    
    foreach($usrContent as $key => $val) {      
      // echo("$key - $val");      
      // echo("<br>");
      // echo("<br>");
      
      $files = scandir($val);

      foreach($files as $key => $value) {
        // echo("$key - $value");      
        // echo("<br>");
        // echo("<br>");
        $info = new SplFileInfo($value);
        $ext = $info -> getExtension();
        // echo($ext);
        if($ext == 'png' || $ext == 'jpg') {
          echo($value);
          echo("<br>");
        }
      }

    }
  }


  public function showMusic() {
    $datas = new GetUserContent();
    $usrContent = $datas -> getContent();
    
    foreach($usrContent as $key => $val) {      
      $files = scandir($val);
      
      foreach($files as $key => $value) {        
        $info = new SplFileInfo($value);
        $ext = $info -> getExtension();        
        if($ext == 'mp3' || $ext == 'wav') {
          echo($value);
          echo("<br>");
        }
      }

    }
  }




}