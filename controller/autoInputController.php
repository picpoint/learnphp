<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../model/autoInputModel.php";


class AutoInput {
  
  public function autoInp() {
    $arrUsrs = new getDataUsers();
    $res = $arrUsrs->getDatasUsr();    

    // return $res;

    foreach($res as $rs) {
      foreach($rs as $key => $value) {
        echo("$key - $value");
        echo("<br>");
      }
    }
  }


}