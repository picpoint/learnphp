<?php


session_destroy();
setcookie($_SESSION['login'], $_SESSION['password'], time() - 604800);
header('location: ../dist/index.php');