<?php


function outUser() {			
  if(isset($_POST['outUser'])) {
    setcookie($_SESSION['loginname'], $_SESSION['pass'], time() - 86400); 
    session_destroy();
    header('location: index.php');
  }  
  
}

