<?php

include_once "../controller/registrationController.php";                                                // подключаем контроллер регистрации пользователей


class RegistrationModel {                                                                               // класс модель для записи данных регистрации в БД
  public $issetUsr;                                                                                     // переменная для проверки, зареган ли юзер
  
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
      $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                                                       // получаем массив данных логинов

      foreach($data as $dt) {                                                                           // пробегаемся по массиву логинов
        if(in_array($log, $dt)) {                                                                       // если введённый логин совпадает с логином из БД          
          $issetUsr = true;                                                                             // переменной присваиваем true
        }  
      }
                 
      if($issetUsr == true) {                                                                           // если переменная true, пользователь существует
        echo("Такой пользователь уже существует");         
        return false;
      } else {
        $sth = $this->cnct -> prepare("INSERT INTO users (login, password, email) VALUES('$log', '$pass', '$email');"); // подготавливаем запрос для записи в БД
        $sth -> execute();                                                                               // выполняем запись данных о пользователе
        header('location: ../view/userPage.php');                                                        // перенапрявляем его на личную страницу ЛК
        $_SESSION['login'] = $log;                                                                       // в сессию записываем логин под которым он регается
        // $_SESSION['password'] = $pass;
      }      

    } else {
      return false;
    }    

  }
  
  

}