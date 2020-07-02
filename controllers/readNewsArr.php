<?php

require_once "../models/readNewsDBClass.php";



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
    return $ms;
  }


}