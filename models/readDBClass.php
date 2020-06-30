<?php

require_once "../controllers/readFieldsArr.php";


class ReadDB {
  protected $host;
  protected $usernamedb;
  protected $passdb;
  protected $db;
  protected $table; 
  protected $dbh;
    
  
  public function __construct() {
    $this->path = __DIR__.'/../config.txt';            
    $conf = file($this->path);
    $this->host = trim($conf[0]);
    $this->usernamedb = trim($conf[1]);
    $this->passdb = trim($conf[2]);
    $this->db = trim($conf[3]);
    $this->table = trim($conf[4]);    
    $this->dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.'', $this->usernamedb, $this->passdb);    
  }


  
  public function executeMeth(string $sql) {    
    $sth = $this->dbh -> prepare($sql);
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);    
    
    // foreach($data as $mass) {      
    //   foreach($mass as $key => $value) {
    //     echo("$key - $value");
    //     echo("<br>");
    //   }
    //   echo("<br>");
    //   echo("<br>");
    // }
    
    if(!empty($data)) {
      return true;
    } else {
      return false;
    }
  }



  public function queryMeth(string $sql, array $data) {
    $sth = $this->dbh -> prepare($sql);
    
    if($sth -> execute($data)) {      
      return $data;
    } else {
      return false;
    }
    
    // var_dump($data);

  }

  



}