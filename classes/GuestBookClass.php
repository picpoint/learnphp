<?php



class GuestBook {
  protected $pathGuestBook;
    
  public function __construct($pathGuestBook) {
    $this -> pathGuestBook = $pathGuestBook;        
    
  }
  
  
  public function getData() {
    $log = [];
    $msg = [];
    $mass = [];
    $file = $this -> pathGuestBook;
    $data = file($file);            

    foreach($data as $key => $value) {      
      $tmp = explode(": ", $value);      

      foreach($tmp as $key => $value) {
        if($key == 0) {
          echo("<div class="."prf__login"."> $value </div>  ");
        } elseif($key == 1) {
          echo("<div class="."prf__message"."> $value </div>  ");      
        }
      }
    }

  }



  public function append() {
    if(isset($_POST["btnsend"]) && !empty($_POST["writemsg"])) {
      $usr = $_SESSION["loginname"];
      $msg = $_POST["writemsg"];
      
      $file = $this -> pathGuestBook;      
      $usrmsg = $_SESSION["loginname"] . ": " . $msg . "\r\n";

      $data = fopen($file, "a+");
      fwrite($data, $usrmsg);
      fclose($data);      
    }

  }



}