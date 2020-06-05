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

  <section class="wrp">        
    <div class="wrp__imgblock">
      <img src="pict/cookie-monster.png" alt="cookie-monster">
    </div>  

    <div class="wrp__entryblock">
      <div class="wrp__formsblock">
        <div class="wrp__entry">
          <form method="POST">
            <input type="text" name="usrlogin" placeholder="Login">
            <input type="password" name="usrpass" placeholder="password">
            <button type=sumbit>Войти</button>
          </form>
        </div>
      </div>
    </div>
  </section>  

</body> 
</html>