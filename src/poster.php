<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poster</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>
<?php
  require_once "../controller/showPostersController.php";
?>

  <section class="pst">
    
    <div class="pst__hdr">
      <h1>Афиша и Билеты</h1>
    </div>
    
    <div class="pst__timetable">
      <div class="pst__tableblock">
        <?php
          $res = new ShowPost();
          $res -> outputPost();
        ?>
      </div>
    </div>

  </section>
  
</body>
</html>