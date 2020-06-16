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
      $str = explode(": ", $value);      

      foreach($str as $key => $value) {        
        if($key == 0) {
          array_push($log, $value);
        } elseif($key == 1) {
          array_push($msg, $value);
        }
      }
    }

    $mass = array_combine($log, $msg);
    var_dump($mass);

    foreach($mass as $key => $value) {      
      echo("<div class="."prf__block".">");
      echo("<div class="."prf__logo"."> $key </div>  ");            
      echo("<div class="."prf__message"."> $value </div>  ");      
      echo("</div>");
    }
  }



  public function append() {
    if(isset($_POST["btnsend"]) && !empty($_POST["writemsg"])) {
      $usr = $_SESSION["loginname"];
      $msg = $_POST["writemsg"];
      echo("$usr - $msg");      

      $file = $this -> pathGuestBook;      
      $usrmsg = $_SESSION["loginname"] . ": " . $msg . "\r\n";

      $data = fopen($file, "a+");
      fwrite($data, $usrmsg);
      fclose($data);      
    }

  }



}