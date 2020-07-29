<?php



class getDataUsers {
  
  public function __construct() {
    $this->cnct = new PDO('mysql:hostname=localhost;dbname=rammstein', 'rmtar', '2203');
  }


  
  public function getDatasUsr() {
    $sth = $this->cnct -> prepare('SELECT login, password FROM users');
    $sth -> execute();
    $arr = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $arr;
  }

  

}