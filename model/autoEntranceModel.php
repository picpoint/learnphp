<?php



class getDataUsers {                                                                                // класс для сбора инфы о логинах и паролях зареганных пользователях
  
  public function __construct() {
    $this->cnct = new PDO('mysql:hostname=localhost;dbname=rammstein', 'rmtar', '2203');            // создание автосоединения с БД
  }

  
  public function getDatasUsr() {                                                                   // метод получения данных о пользователях
    $sth = $this->cnct -> prepare('SELECT login, password FROM users');                             // выбрать все логины и пароли из таблицы users
    $sth -> execute();
    $arr = $sth -> fetchAll(PDO::FETCH_ASSOC);                                                      // получить всё в виде ассоциативного массива
    return $arr;                                                                                    // вернуть данный массив
  }
  

}