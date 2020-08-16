<?php


require_once "../controller/autorizationController.php";                                        // подключаем контроллер который передаёт введённые данные при авторизации


class AutorizationModel {                                                                       // класс для проверки авторизации
  public $arrLog = [];                                                                          // массив для логинов
  public $arrPass = [];                                                                         // массив для паролей
  public $assocArr = [];                                                                        // ассоциативный массив для перебора
  
  public function __construct() {
    $this->cnct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');            // автоконнект к бд
  }



  public function autorizationUser() {                                                          // метод авторизации
    $dataAuth = new AutorizationController();                                                   // получаем из контроллера введённые данные из полей "логин-пароль" 
    $logPass = $dataAuth -> authDatasUser();                                                    // |- на странице авторизации

    $sth = $this->cnct -> prepare("SELECT login, password FROM users");                         // делаем запрос к бд по логинам и паролям
    $sth -> execute();                                                                          // выполняем запрос
    $queryBD = $sth -> fetchAll(PDO::FETCH_ASSOC);                                              // получаем данные в виде ассоциативного массива массивов

    foreach($queryBD as $qdb) {                                                                 // перебираем массив массивов
      foreach($qdb as $key => $value) {                                                         // перебираем полученный массив
        if($key == 'login') {                                                                   // если ключ == login
          $arrLog[] = $value;                                                                   // помещаем в массив все логины
        } elseif($key == 'password') {                                                          // иначе если ключ == password
          $arrPass[] = $value;                                                                  // помещаем в массив все пароли
        }
        
      }
    }

    $fullArr = array_combine($arrLog, $arrPass);                                                // делаем комбинированный массив логинов и паролей    

    foreach($fullArr as $key => $value) {                                                       // перебираем массив логинов-паролей
      if($logPass[0] == $key && $logPass[1] == password_verify($logPass[1], $value)) {          // если введённый логин из поля на странице соответствует логину из массива из БД и введённый пароль == проверенному значению из БД
        $_SESSION['login'] = $logPass[0];                                                       // в сессию(логин) записываем логин
        $_SESSION['password'] = $value;                                                         // в сессию(пароль) записываем хеш пароля
        header('location: ../view/userPage.php');                                               // перебрасываем на страницу ЛК
      }      
    }


  }
  


}

