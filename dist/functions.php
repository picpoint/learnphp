<?php


function readGuestBook() {
  
  if(isset($_POST['send'])) {
    if(!empty($_POST['nameuser']) && !empty($_POST['messageuser'])) {
      $nameuser = $_POST['nameuser'];
      $messageuser = $_POST['messageuser'];

      echo($nameuser);
      echo("<br>");
      echo($messageuser);
    } else {
      echo('Fields is empty');
    }
    

    
  }
  

  
  
  // $file = __DIR__."/../guestbook.txt";

  // if(file_exists($file)) {
  //   $arr = file($file, FILE_IGNORE_NEW_LINES);    

  //   foreach($arr as $key => $value) {      
  //     $res = explode(":", $value);      
  //     $name = $res[0];
  //     $message = $res[1];
  //     $mass[$name] = $message;
      
  //     echo("<div class='wrp__block'>");      
  //     echo('<span class="wrp__usr"><img src="pict/noname.jpg">'.$name.'</span>');
  //     echo('<span class="wrp__msg">'.$message.'</span>');                        
  //     echo("</div>");
  //   }    

    
  // } else {
  //   echo("file not exists ...");
  // }  
  
}