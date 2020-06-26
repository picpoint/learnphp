<?php



class ReadDB {
       
  public function testQuery() {    
    $dbh = new PDO('mysql:host=localhost; dbname=temp', 'rmtar', '2203');    
    $sth = $dbh -> prepare('SELECT * FROM persons WHERE id=:id');    
    $sth -> execute(['id' => $_GET['id']]);
    $data = $sth -> fetchAll();
    // var_dump($data);

    foreach($data as $key => $value) {      
      echo("<br>");
      foreach($value as $vl) {
        echo("<br>");
        echo($vl);
      }
    }

  }

}