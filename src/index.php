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
      
      require "php/getUsersList.php";
      echo(getUsersListFunc());
      
    ?>
    
  </section>  

</body> 
</html>