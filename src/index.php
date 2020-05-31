<?php 
  session_start();
  setcookie("new_coocki", "new value", time() + 86400);
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
    <?php
      $pass = '123';
      echo(password_hash($pass, PASSWORD_DEFAULT));
    ?>

    <a href="php/test.php">Test page</a>
  </section>  

</body> 
</html>