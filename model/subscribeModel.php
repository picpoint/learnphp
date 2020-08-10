<?php



require_once "../controller/subscribeController.php";


class SubscribeModel {
  
  public function __construct() {
    $this->connct = new PDO('mysql:hostname=localhost;dbname=rammstein', 'rmtar', '2203');
  }


  public function writeUserEmail() {
    $res = new SubcribeController();
    $email = $res -> subscribeMethos();

    $sth = $this->connct -> prepare("SELECT subscribe_email FROM subscribe");
    $sth -> execute();
    $allEmail = $sth -> fetchAll(PDO::FETCH_ASSOC);

    
    foreach($allEmail as $emails) {
      
    }

    // $sth = $this->connct -> prepare("INSERT INTO subscribe (subscribe_email) VALUE('$email')");
    // $sth -> execute();
  }


}