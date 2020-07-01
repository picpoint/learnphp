<?php

require_once "../models/readNewsDBClass.php";



class ReadNewsController {
  public $arrNews = [];


  public function readDataNews() {
    $arrNews = new ReadNews();
    $mass = $arrNews -> readNewsMeth('SELECT * FROM news');
    var_dump($mass);
  }


  



}