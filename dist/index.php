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
    <div class="wrp__task1">
      <h3>Task1</h3>
      <div class="wrp__guestblock">
        <?php
          require_once 'functions.php';
          readGuestBook();
        ?>
      </div>
    </div>
  </section>  

</body> 
</html>