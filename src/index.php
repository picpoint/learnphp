<?php
  session_start();
  // setcookie($_SESSION['login'], $_SESSION['password'], time() - 604800);

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rammstein</title>
  <link rel="stylesheet" href="css/style.css">	  
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
  
  <section class="wrp">    

    <div class="wrp__menu">
      <div class="wrp__logo">
        <a href="#">
          <img src="pict/logo.png" alt="logo">
        </a>
      </div>
      
      <div class="wrp__burger">
        <div class="wrp__linesblock">
          <div class="wrp__lineone"></div>
          <div class="wrp__linetwo"></div>
          <div class="wrp__linethree"></div>
        </div>
      </div>

      <div class="wrp__list">
        <a href="about.php" class="wrp__link">О ГРУППЕ</a>
        <a href="#" class="wrp__link">СЛУШАТЬ</a>
        <a href="#" class="wrp__link">АФИША</a>
        <a href="#" class="wrp__link">ГАЛЕРЕЯ</a>
      </div>
      <div class="wrp__enter">
        <div class="wrp__registration">
          <i class="fa fa-registered" aria-hidden="true"></i>
          <a href="registration.php">РЕГИСТРАЦИЯ</a>
        </div>
        <div class="wrp__autorization">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          <a href="autorization.php">АВТОРИЗАЦИЯ</a>
        </div>
      </div>
    </div>

    <div class="wrp__base">
      <h3>RAMMSTEIN</h3>
    </div>

    <div class="wrp__footer">
      <div class="wrp__mailcont">
        
        <div class="wrp__mcblock">        
          <div class="wrp__mailing">
            <span>Подписаться на рассылку</span>
            <input type="text" placeholder="Добавьте эл.почту*">
            <button>OK</button>
          </div>
        
          <div class="wrp__contacts">
            <span>Менеджмент и билеты</span>
            <span>Email info@myemail.com | Тел.: +7(495)-000-00-00</span>
          </div>
        </div>

      </div>
      
      <div class="wrp__copyright">
        <span>&#169 rmtar</span>
      </div>
    </div>

  </section>  

<script src="js/burger.js"></script>
</body> 
</html>