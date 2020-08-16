<?php

require_once "../model/autoEntranceModel.php";                                              // подключаем модель для получения данных из БД


class AutoEntrance {
  private $arrLog = [];                                                                     // массив для логинов
  private $arrPass = [];                                                                    // массив для паролей
  private $arrAssoc = [];                                                                   // ассоциативный массив для перебора
  
  public function autoEntr() {                                                              // метод автовхода
    $arrUsrs = new getDataUsers();                                                          // получаем данные из модели
    $res = $arrUsrs->getDatasUsr();    
    
    foreach($res as $rs) {                                                                  // перебираем полученный массив массивов
      foreach($rs as $key => $value) {                                                      // перебираем массив как ключ-значение
        if($key == 'login') {                                                               // если ключ == login
          $arrLog[] = $value;                                                               // помещаем в массив $arrLog[] значение
        } elseif($key == 'password') {                                                      // иначе если ключ == password
          $arrPass[] = $value;                                                              // помещаем значение в $arrPass[]
        }
      }
    }
    
    $arrAssoc = array_combine($arrLog, $arrPass);                                           // комбинируем два массива $arrLog[] и $arrPass[] в один

    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {                         // если существует сессия логин и пароль
      foreach($arrAssoc as $key => $value) {                                                // перебираем $arrAssoc
        if($_SESSION['login'] == $key && $_SESSION['password'] == $value) {                 // если логин == ключу и пароль == значению 
          header('location: ../view/userPage.php');                                         // переходим в ЛК
        } 
      }
    } 
    



  }


}