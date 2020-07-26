<?php



session_destroy();
setcookie($_SESSION['login'], session_id(), time() - 86400);
header('location: ../dist/index.php');