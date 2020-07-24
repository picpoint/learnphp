<?php



class RegistrationController {
  public $login;
  public $password;
  public $email;
  public $regbutton;


  public function __construct() {
    
  }


  public function registrationUser() {
    if(isset($_POST['regbtn']) && !empty($_POST['reglogin']) && !empty($_POST['regpass']) && !empty($_POST['regemail'])) {
      $login = $_POST['reglogin'];
      $password = password_hash($_POST['regpass'], PASSWORD_DEFAULT);
      $email = $_POST['regemail'];
    } 

    echo($login);
    echo("<br>");
    echo($password);
    echo("<br>");
    echo($email);
  }





}