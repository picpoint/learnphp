<?php



class ListenMuz {
  public $usersFolders = __DIR__.'/../usersFolders';

  public function getAllMusic() {        
    $arrFolders = scandir($this->usersFolders);

    foreach($arrFolders as $key => $value) {
      if($value != '.' && $value != '..') {
        // echo($value);
        // echo("<br>");
        $pathToSingleUser = $this->usersFolders . "/$value" . '/music';
        // print_r(scandir($pathToSingleUser));
        // echo("<br>");                
        $fileMuz = scandir($pathToSingleUser);
        // print_r($fileMuz);
        
        foreach($fileMuz as $key => $value) {
          // echo("$key - $value");
          // echo("<br>");
          // echo($pathToSingleUser);

          // echo("$pathToSingleUser" . "/$value");
          // echo("<br>");
          
          if($value != '.' && $value != '..') {
            echo("<br>");            
            echo($value);
            // echo("<audio src=". "$pathToSingleUser" . "/$value" ." controls preload="."auto"." type=" . "audio/mpeg" . "></audio>");
            echo("<audio src=". "gaullin_-_op_opa.mp3" ."></audio>");
          }
          
        }
        
        // if($fileMuz != '.' && $fileMuz != '..') {
        //   print_r("$fileMuz");
        //   // echo("<audio src="."../usersFolders/$usr/music/$value"." controls preload="."auto"." type=" . "audio/mpeg" . "></audio> ");
        // }

      } 
    }
  }



}