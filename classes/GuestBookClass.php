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
      echo("<br>");      
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

    foreach($mass as $key => $value) {      
      echo("<div class="."prf__block".">");
      echo("<div class="."prf__logo"."> $key </div>  ");            
      echo("<div class="."prf__message"."> $value </div>  ");      
      echo("</div>");
    }
  }



  public function append($text) {

  }

 





}