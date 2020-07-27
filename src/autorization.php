<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autorization</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php 
    require_once "../controller/autorizationController.php";
    require_once "../model/autorizationModel.php";
  ?>
  <section class="auth">
    <form method="POST" class="auth__authform">
      <input type="text" name="authlogin" placeholder="логин">
      <input type="password" name="authpass" placeholder="пароль">
      <button type="submit" name="authbth">ВОЙТИ</button>
    </form>
  </section>

  <?php
    // $out = new AutorizationController();
    // $out->findUser();

    $out = new AutorizationModel();
    var_dump($out -> autorizationUser());

  ?>


</body>
</html>