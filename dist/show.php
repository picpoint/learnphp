<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Слушать музыку</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>

<?php
  require_once "../model/showPictModel.php";
?>
  
  <section class="shw">
    <div class="shw__hdr">
      <h3>Галерея</h3>
    </div>
    <div class="shw__pic">      
      <?php
        $out = new ShowPict();
        $out -> getAllPict();
      ?>
    </div>
  </section>

</body>
</html>