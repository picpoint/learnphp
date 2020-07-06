<?php



class ReadNews {
  
  public function __construct() {
    $this->connct = new PDO('mysql:host=localhost;dbname=task8', 'rmtar', '2203');      
  }


  public function readNewsMeth(string $sql) {
    $sth = $this->connct -> prepare($sql);
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }
  
}