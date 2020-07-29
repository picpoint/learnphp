<?php



setcookie($_SESSION['login'], session_id(), time() - 86400);
session_destroy();
header('location: ../dist/index.php');