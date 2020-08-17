<?php

require_once "../model/subscribeModel.php";                                 // подключаем модель получения данных о адресах почт



class SubcribeController {                                                  // класс подписаться на рассылку
  public $email;
  public $btn;


  public function subscribeMethos() {                                       // метод подписаться
    $this->email = trim($_POST['email']);                                   // в переменную $this->email - присваиваем значение из поля email пришедшее постом
    $this->btn = $_POST['btnsubscribe'];                                    // определяем кнопку ОК

    if(isset($this->btn) && !empty($this->email)) {                         // если кнопка ОК нажата и поле input не пустое
      return $this->email;                                                  // возвращаем адрес почты
    }
  }


}