<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasks  on php</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>

<?php
  require_once "php/registrationFunc.php";  
?>

  <section class="wrp">        
    <div class="wrp__imgblock">
      <img src="pict/cookie-monster.png" alt="cookie-monster">
    </div>  

    <div class="wrp__entryblock">
      <div class="wrp__formsblock">
        
        <div class="wrp__entry">
          <form method="POST" class="wrp__enteruser">
            <h3>Войти</h3>
            <input type="text" name="usrlogin" placeholder="Login">
            <input type="password" name="usrpass" placeholder="password">
            <button type=sumbit name="btnsingin">Войти</button>
          </form>
        </div>

        <div class="wrp__registration">
          <form method="POST" class="wrp__registrationuser">
            <h3>Регистрация</h3>
            <h3><?php regUser(); ?></h3>
            <input type="text" name="usrlogreg" placeholder="login">
            <input type="password" name="usrpassreg" placeholder="password">
            <button type="submit" name="btnregistration">Регистрация</button>
          </form>
        </div>

      </div>
    </div>

  </section>  

</body> 
</html>