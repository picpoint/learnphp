<?php



class ListenMuz {
  public $usersFolders = __DIR__.'/../usersFolders';

  
  public function getAllMusic() {        
    $arrFolders = scandir($this->usersFolders);

    foreach($arrFolders as $key => $vl) {
      if($vl != '.' && $vl != '..') {        
        $pathToSingleUser = $this->usersFolders . "/$vl" . '/music';
        $fileMuz = scandir($pathToSingleUser);               

        foreach($fileMuz as $key => $value) {          
          if($value != '.' && $value != '..') {       
            echo("<div class=" . "ltn__song" . ">");
              echo("<audio src=". "../usersFolders/$vl/music/$value" ." controls="."controls"." ></audio>");
              echo("<span>$value</span>");
            echo("</div>");
          }          
        }            

      } 
    }

  }


}