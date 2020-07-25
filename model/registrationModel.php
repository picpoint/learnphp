<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once "../controller/registrationController.php";


class RegistrationModel {
  protected $cnct;

  public function __construct() {    
    $this->cnct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');
  } 


  public function writeUserToDB() {
    $dt = new RegistrationController();
    $datasUser = $dt -> registrationUser();

    //return $datasUser[1];
    $log = trim($datasUser[0]);
    $pass = trim($datasUser[1]);
    $email = trim($datasUser[2]);
        
    $sth = $this->cnct -> prepare("INSERT INTO users (login, password, email) VALUES('$log', '$pass', '$email');");    
    $sth -> execute();

  }
  
  

}