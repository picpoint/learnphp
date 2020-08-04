<?php

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);


class AutorizationController {
  public $logAuth;
  public $passAuth;
  public $btnAuth;
  public $arrAuth = [];
  
  
  public function authDatasUser() {
    $this->logAuth = trim($_POST['authlogin']);
    $this->passAuth = trim($_POST['authpass']);
    $this->btnAuth = $_POST['authbth'];

    if(isset($this->btnAuth) && !empty($this->logAuth) && !empty($this->passAuth)) {
      $arrAuth[0] = $this->logAuth;
      $arrAuth[1] = $this->passAuth;

      return $arrAuth;
    }
  }



}


