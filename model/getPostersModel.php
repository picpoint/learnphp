<?php



class ReadPosters {
  public function __construct() {
    $this->connct = new PDO('mysql:host=localhost;dbname=rammstein', 'rmtar', '2203');
  }


  public function readPostersData() {
    $sth = $this->connct -> prepare('SELECT * FROM posters');
    $sth -> execute();
    $dataPosters = $sth -> fetchAll(PDO::FETCH_ASSOC);

    return $dataPosters;
  }


}