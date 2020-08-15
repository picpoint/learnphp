<?php



class ShowPict {
  public $usersFolders = __DIR__.'/../usersFolders';

  
  public function getAllPict() {        
    $arrFolders = scandir($this->usersFolders);

    foreach($arrFolders as $key => $vl) {
      if($vl != '.' && $vl != '..') {        
        $pathToSingleUser = $this->usersFolders . "/$vl" . '/picture';
        $fileMuz = scandir($pathToSingleUser);               

        foreach($fileMuz as $key => $value) {          
          if($value != '.' && $value != '..') {                   
            echo("<img src=" . "../usersFolders/$vl/picture/$value" ." >");
          }          
        }            

      } 
    }

  }

  
}