<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


class RegistrationController {
  public $login;
  public $password;
  public $email;
  public $regbutton;
  public $datasUser = [];



  public function registrationUser() {
    if(isset($_POST['regbtn']) && !empty($_POST['reglogin']) && !empty($_POST['regpass']) && !empty($_POST['regemail'])) {
      $login = trim($_POST['reglogin']);
      $password = trim(password_hash($_POST['regpass'], PASSWORD_DEFAULT));
      $email = trim($_POST['regemail']);

      $datasUser[0] = $login;
      $datasUser[1] = $password;
      $datasUser[2] = $email;

      return $datasUser;
    } 

    echo($login);
    echo("<br>");
    echo($password);
    echo("<br>");
    echo($email);
  }





}