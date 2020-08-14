<?php



class ListenMuz {
  public $usersFolders = __DIR__.'/../usersFolders';

  public function getAllMusic() {        
    $arrFolders = scandir($this->usersFolders);

    foreach($arrFolders as $key => $value) {
      if($value != '.' && $value != '..') {        
        $pathToSingleUser = $this->usersFolders . "/$value" . '/music';        
        $fileMuz = scandir($pathToSingleUser);
               
        foreach($fileMuz as $key => $value) {          
          if($value != '.' && $value != '..') {
            echo("<br>");            
            // echo($value);            
            // echo("$pathToSingleUser/$value");
            echo("<br>");
            echo("<audio src=". "$pathToSingleUser/$value" ." controls preload="."auto"." type=" . "audio/mpeg" . "></audio>");
            // echo("<audio src="."../usersFolders/$usr/music/$value"." controls preload="."auto"." type=" . "audio/mpeg" . "></audio> ");
            // print_r($pathToSingleUser);

          }
          
        }        
        

      } 
    }
  }



}