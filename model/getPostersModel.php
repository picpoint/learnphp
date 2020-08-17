<?php



class ReadPosters {                                                                     // класс получения всех записей о концертах из БД
  public function __construct() {
    $this->connct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');  // конструктор для автоподключения к БД
  }


  public function readPostersData() {                                                   // метод получения всех данных о концертах
    $sth = $this->connct -> prepare('SELECT * FROM posters');                           // выбираем всё из таблицы posters
    $sth -> execute();                                                                  // выполняем запрос
    $dataPosters = $sth -> fetchAll(PDO::FETCH_ASSOC);                                  // получаем ассоциативный массив

    return $dataPosters;                                                                // возвращаем данные
  }


}