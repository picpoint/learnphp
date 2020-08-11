<?php

require_once "../model/showGaleryModel.php";



class ShowGalery {

  public function showPictures() {
    $datas = new GetUserContent();
    $usrContent = $datas -> getContent();
    $usr = $_SESSION['login'];
    
    foreach($usrContent as $key => $val) {
      $files = scandir($val);
      foreach($files as $key => $value) {        
        $info = new SplFileInfo($value);
        $ext = $info -> getExtension();        
        if($ext == 'png' || $ext == 'jpg') {          
          echo("<img src=" . "../usersFolders/$usr/picture/$value" . ">");          
        }
      }
    }

  }


  public function showMusic() {
    $datas = new GetUserContent();
    $usrContent = $datas -> getContent();
    $usr = $_SESSION['login'];
    
    foreach($usrContent as $key => $val) {      
      $files = scandir($val);
      
      foreach($files as $key => $value) {        
        $info = new SplFileInfo($value);
        $ext = $info -> getExtension();        
        if($ext == 'mp3' || $ext == 'wav') {                    
          echo("<div class="."lk__muz".">");
            echo("<audio src="."../usersFolders/$usr/music/$value"." controls preload="."auto"." type=" . "audio/mpeg" . "></audio> ");
            echo("<span>$value</span>");
          echo("</div>");
        }
      }
    }
    
  }




}