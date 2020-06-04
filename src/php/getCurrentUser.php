<?php

function getCurrentUserFunc() {
  $login = $_SESSION['login'];
  if($login) {
    return $_SESSION['login'];
  } else {
    return null;

  }  
}



