<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../controller/autorizationController.php";


class AutorizationModel {
  
  public function __construct() {
    $this->cnct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');
  }



  public function autorizationUser() {
    $dataAuth = new AutorizationController();
    $logPass = $dataAuth -> authDatasUser();

    $sth = $this->cnct -> prepare("SELECT login, password FROM users");
    $sth -> execute();
    $queryBD = $sth -> fetchAll(PDO::FETCH_ASSOC);
    
    return $queryBD;
  }
  


}

