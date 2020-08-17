<?php



require_once "../controller/subscribeController.php";                                       // контроллер получения данных о информации о введённом email для подписке


class SubscribeModel {                                                                      // класс подписаться на рассылку
  
  public function __construct() {                                                           // конструктор для подключения к БД
    $this->connct = new PDO('mysql:hostname=localhost;dbname=rammstein', 'rmtar', '2203');
  }


  public function writeUserEmail() {                                                        // метод записать пользовательски email
    $mass = [];
    $res = new SubcribeController();                                                        // получить данные из контроллера о введённом email
    $email = $res -> subscribeMethos();

    $sth = $this->connct -> prepare("SELECT subscribe_email FROM subscribe");               // получить все адреса почт
    $sth -> execute();                                                                      // выполнить запрос
    $allEmail = $sth -> fetchAll(PDO::FETCH_ASSOC);                                         // получить все данные в ассоциативном массиве

    foreach($allEmail as $emails) {                                                         // перебираем массив массивов
      foreach($emails as $key => $value) {                                                  // перебираем массив как ключ-значение
        $mass[] = $value;                                                                   // в пустой массив записываем все почты
      }
    }    
    
    if(isset($email)) {                                                                     // если есть почта
      if(in_array($email, $mass)) {                                                         // если в списке из БД есть уже такая почта из введённого поля
        echo("Такой email уже подписан на рассылку");
      } else if(!empty($email)) {                                                           // иначе если не пустое поле
        $sth = $this->connct -> prepare("INSERT INTO subscribe (subscribe_email) VALUE('$email')"); // записываем в БД новый email
        $sth -> execute();                                                                  // выпоняем запрос
        echo("Вы успешно подписанны на рассылку");                                          // информируем пользователя о подписке
      } 
    } else {
      echo('');
    }

    
    
  }


}