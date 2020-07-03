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
    $this->ms = $this->readDataNews();

    foreach($this->ms as $datas) {    
      foreach($datas as $key => $value) {
        viewTmp($key, $value);        
      }
    }
  }


}