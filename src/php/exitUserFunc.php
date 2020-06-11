<?php


function exitUser() {			    
  if(isset($_POST['btnExit'])) {
    setcookie($_SESSION['loginname'], $_SESSION['pass'], time() - 86400); 
    session_destroy();
    header('location: index.php');    
  }   
}

