<?php



class DatasDB {
  protected $path;
  public $arr = [];
  
  public function __construct($path) {
    $this->path = $path;
  }


  public function readDatas() {
    return file($this->path);
  }


}