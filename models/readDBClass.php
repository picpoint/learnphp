<?php



class ReadDB {
  protected $host;
  protected $usernamedb;
  protected $passdb;
  protected $db;
  protected $table; 
  
  
  public function __construct() {
    $path = __DIR__.'/../config.txt';            
    $conf = file($path);
    $host = $conf[0];
    $usernamedb = $conf[1];
    $passdb = $conf[2];
    $db = $conf[3];
    $table = $conf[4];

    $dbh = new PDO('mysql:host=localhost;dbname=task8', 'rmtar', '2203');
    var_dump($dbh);
    
  }


  public function executeMet(string $sql) {
    $sth = $dbh->prepare('SELECT * FROM template');
    return $sth->execute();
  }



}