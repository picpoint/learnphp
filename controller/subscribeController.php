<?php

require_once "../model/subscribeModel.php";



class SubcribeController {
  public $email;
  public $btn;


  public function subscribeMethos() {
    $this->email = trim($_POST['email']);
    $this->btn = $_POST['btnsubscribe'];

    if(isset($this->btn) && !empty($this->email)) {
      return $this->email;
    }
  }


}