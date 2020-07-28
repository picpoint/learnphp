<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../controller/autorizationController.php";


class AutorizationModel {
  public $arrLog = [];
  public $arrPass = [];
  public $assocArr = [];
  
  public function __construct() {
    $this->cnct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');
  }



  public function autorizationUser() {
    $dataAuth = new AutorizationController();
    $logPass = $dataAuth -> authDatasUser();

    $sth = $this->cnct -> prepare("SELECT login, password FROM users");
    $sth -> execute();
    $queryBD = $sth -> fetchAll(PDO::FETCH_ASSOC);    

    foreach($queryBD as $qdb) {      
      foreach($qdb as $key => $value) {        
        if($key == 'login') {
          $arrLog[] = $value;
        } elseif($key == 'password') {
          $arrPass[] = $value;
        }
        
      }
    }

    $fullArr = array_combine($arrLog, $arrPass);

    foreach($fullArr as $key => $value) {
      echo("$key - $value");
      echo("<br>");

      if(($logPass[0] == $key)  &&  ($logPass[1] == password_verify($logPass[1], $value))) {
        echo("AUTH");
      } else {
        echo('not ...........');
      }
    }


  }
  


}

