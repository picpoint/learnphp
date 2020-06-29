<?php



class ReadDB {
  protected $host;
  protected $usernamedb;
  protected $passdb;
  protected $db;
  protected $table; 
  public $dbh;
    
  
  public function __construct() {
    $path = __DIR__.'/../config.txt';            
    $conf = file($path);
    $host = trim($conf[0]);
    $usernamedb = trim($conf[1]);
    $passdb = trim($conf[2]);
    $db = trim($conf[3]);
    $table = trim($conf[4]);
    
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $usernamedb, $passdb);
    var_dump($dbh);    
        
    
  }


  public function executeMeth(string $sql) {
    $sth = $dbh -> prepare($sql);
    $sth -> execute();
    $data = $sth -> fetchAll();
    var_dump($data);
  }


  



}