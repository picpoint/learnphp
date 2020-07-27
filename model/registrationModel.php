<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once "../controller/registrationController.php";                                                // подключаем контроллер регистрации пользователей


class RegistrationModel {                                                                               // класс модель для записи данных регистрации в БД
  
  public function __construct() {
    $this->cnct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');                    // автоматическое подключение к бд в конструкторе
  } 


  public function writeUserToDB() {                                                                     // метод для записи данных о пользователе в БД
    $dt = new RegistrationController();                                                                 // создаём объект класса контроллера
    $datasUser = $dt -> registrationUser();                                                             // вызываем метод класса 
    
    $log = trim(mb_strtolower($datasUser[0]));                                                          // присваиваем в логин пароль и email данные из массива
    $pass = trim($datasUser[1]);
    $email = trim($datasUser[2]);

    if(!empty($log) && !empty($pass) && !empty($email)) {                                               // если переменные пришедшего массива из контроллера не пустые      
      $sth = $this->cnct -> prepare("SELECT login FROM users");                                         // делаем запрос в БД по всем логинам
      $sth -> execute();
      $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                                                       // получаем массив данных

      foreach($data as $dt) {                                                                           
        foreach($dt as $key => $value) {          
          if($log == $value) {
            echo("Такой пользователь уже существует");                                                  // ***********************************
            return false;
          } else {
            $sth = $this->cnct -> prepare("INSERT INTO users (login, password, email) VALUES('$log', '$pass', '$email');");   // подготавливаем запрос для записи
            $sth -> execute();                                                                                  // выполняем запись данных о пользователе
            header('location: ../view/userPage.php');
            $_SESSION['login'] = $log;
          }
        }

      }

    } else {
      return false;
    }
    

  }
  
  

}