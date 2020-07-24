<?php
include_once "../controller/registrationController.php";


class RegistrationModel {
  protected $cnct;

  public function __construct() {
    // $this->cnct = $cnct;
    $this->cnct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');
  } 


  public function writeUserToDB() {
    $dt = new RegistrationController();
    $datasUser = $dt -> registrationUser();

    //return $datasUser;
    
    $sth = $this->cnct -> prepare( "INSERT INTO users (login, password, email) VALUES(0, 1, 2) " );
    $sth -> execute();

  }
  
  

}