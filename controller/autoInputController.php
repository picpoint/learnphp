<?php

require_once "../model/autoInputModel.php";


class AutoInput {
  private $arrLog = [];
  private $arrPass = [];
  private $arrAssoc = [];
  
  public function autoInp() {
    $arrUsrs = new getDataUsers();
    $res = $arrUsrs->getDatasUsr();    
    
    foreach($res as $rs) {
      foreach($rs as $key => $value) {        
        if($key == 'login') {
          $arrLog[] = $value;
        } elseif($key == 'password') {
          $arrPass[] = $value;
        }
      }
    }
    
    $arrAssoc = array_combine($arrLog, $arrPass);

    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
      foreach($arrAssoc as $key => $value) {            
        if($_SESSION['login'] == $key && $_SESSION['password'] == $value) {
          header('location: ../view/userPage.php');
        } 
      }
    } 
    



  }


}