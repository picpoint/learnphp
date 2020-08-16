<?php



class AutorizationController {                                                            // контроллер авторизации
  public $logAuth;                                                                        // поле - логин 
  public $passAuth;                                                                       // поле - пароль
  public $btnAuth;                                                                        // кнопка при нажатии на которую будет произведена операция авторизации
  public $arrAuth = [];
  
  
  public function authDatasUser() {                                                       // метод авторизации
    $this->logAuth = trim($_POST['authlogin']);                                           // в переменную $this->logAuth помещаем данные из поля пришедшие постом
    $this->passAuth = trim($_POST['authpass']);                                           // в переменную $this->passAuth помещаем данные из поля пришедшие постом 
    $this->btnAuth = $_POST['authbth'];                                                   // данные по нажатой кнопке $this->btnAuth

    if(isset($this->btnAuth) && !empty($this->logAuth) && !empty($this->passAuth)) {      // если нажата кнопка и не пустые поля логин и пароль
      $arrAuth[0] = $this->logAuth;                                                       // в массив помещаем логин и пароль
      $arrAuth[1] = $this->passAuth;
      return $arrAuth;                                                                    // возвращаем массив
    }
  }



}


