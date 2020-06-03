<?php
// session_start();




function сheckPasswordFunc() {
  $login = $_SESSION['login'];
  $passHash = $_SESSION['passHash'];
  $passUsr = $_SESSION['passUsr'];
  
  foreach($passHash as $keyHash => $valueHash) {
    echo("$keyHash - $valueHash");
    echo("<br>");    

    
    
  }
  
}


//checkPasswordFunc($login);



// echo("true / false");	