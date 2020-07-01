<?php

require_once "../models/readNewsDBClass.php";



class ReadNews {
  public $arrNews = [];


  public function readDataNews() {
    $arrNews = new readNewsMeth('SELECT * FROM news');
    var_dump($arrNews);
  }



}