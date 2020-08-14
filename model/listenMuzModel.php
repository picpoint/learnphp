<?php



class ListenMuz {
  public $usersFolders = __DIR__.'/../usersFolders';

  public function getAllMusic() {        
    $arrFolders = scandir($this->usersFolders);

    foreach($arrFolders as $key => $value) {
      if($value != '.' && $value != '..') {        
        $pathToSingleUser = $this->usersFolders . "/$value" . '/music';        
        $fileMuz = scandir($pathToSingleUser);
        
        echo($pathToSingleUser);

        foreach($fileMuz as $key => $value) {          
          if($value != '.' && $value != '..') {            
            // echo("<audio src=". "$value" ." controls preload="."auto"." type=" . "audio/mpeg" . "></audio>");
            // echo("<audio src=". "../usersFolders/den/music/$value" ." controls="."controls"." ></audio>");
            echo("<audio src=". "$value" . " controls="."controls"." preload="."auto"." type="."audio/mpeg"."></audio>");

          }
          
        }        
        

      } 
    }
  }



}