<?php

require_once "../models/readNewsDBClass.php";
require_once "../view/newsView.php";



class ReadNewsController {
  public $arrNews = [];
  public $ms = [];

  
  public function readDataNews() {
    $this->arrNews = new ReadNews();
    $mass = $this->arrNews -> readNewsMeth('SELECT * FROM news');
    return $mass;    
  }


  public function outNews() {
    $ms = $this->readDataNews();
    // return $ms;
    // viewTmp();    

    foreach($ms as $datas) {
      // viewTmp($datas);
      foreach($datas as $key => $value) {
        viewTmp($key, $value);
        // echo("$key - $value");
        // echo("<br>");
      }
    }
  }


}