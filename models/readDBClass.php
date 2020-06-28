<?php



class ReadDB {
  protected $config;
  
  
  public function __construct() {
    $path = __DIR__.'/../config.txt';            
    var_dump(file($path));
  }



}