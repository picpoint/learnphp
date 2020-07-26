<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


class RegistrationController {                                                                        // класс контроллер регистрации пользователя
  public $login;
  public $password;
  public $email;
  public $regbutton;
  public $datasUser = [];



  public function registrationUser() {                                                                // метод для регистрации пользователей
    if(isset($_POST['regbtn']) && !empty($_POST['reglogin']) && !empty($_POST['regpass']) && !empty($_POST['regemail'])) { // если кнопка "Зарегистрироваться" нажата и поля не пустые
      $login = trim($_POST['reglogin']);                                                              // в $login присваиваем что пришло постом из поля reglogin
      $password = trim(password_hash($_POST['regpass'], PASSWORD_DEFAULT));                           // в $password присваиваем хешированное значение из поля regpass
      $email = trim($_POST['regemail']);                                                              // в $email присваиваем значение из поля regemail

      $datasUser[0] = $login;                                                                         // в массив $datasUser записываем $login
      $datasUser[1] = $password;                                                                      // -||- записываем $password
      $datasUser[2] = $email;                                                                         // -||- записываем $email

      return $datasUser;
    }
  }





}