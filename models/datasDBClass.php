<?php



class DatasDB {
  protected $path;
  public $arr = [];
  
  public function __construct($path) {
    $this->path = $path;
  }


  public function readDatas() {
    $fl = file($this->path);
    
    return $fl;
  }


}