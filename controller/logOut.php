<?php



setcookie($_SESSION['login'], $_SESSION['password'], time() - 604800);
session_destroy();
header('location: ../dist/index.php');