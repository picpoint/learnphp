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
    require_once "../models/readDBClass.php";
  ?>

  <section class="wrp">        
    <div class="wrp__test">
      <?php
        $out = new ReadDB();
        $out -> executeMeth('SELECT * FROM template');

        $arr = ['Александр', 'Сергеевич', 83,  'мужской'];
        $out -> queryMeth("INSERT INTO templare (firstname, lastname, age, gender) VALUES(?, ?, ?, ?)", $arr);
      ?>
    </div>
  </section>  

</body> 
</html>