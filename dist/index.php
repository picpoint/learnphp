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
      
      require_once "php/getUsersList.php";
      require_once "php/existsUser.php";
      require_once "php/сheckPassword.php";
      
      echo(getUsersListFunc());
      echo("<br>");
      echo("<br>");
      echo(existsUserFunc("Abrakadabra"));
      echo("<br>");
      echo("<br>");
      echo(сheckPasswordFunc($login));
      
      
    ?>
    
  </section>  

</body> 
</html>