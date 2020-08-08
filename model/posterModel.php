<?php



class ReadPosters {
  public function __construct() {
    $this->connct = new PDO('mysql:host=localhost;dbname=posters', 'rmtar', '2203');
  }


  public function readPostersData() {
    
  }


}