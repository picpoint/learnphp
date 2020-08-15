<?php
session_start();


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
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
  require_once "../model/listenMuzModel.php";
?>
  
  <section class="ltn">
    <div class="ltn__hdr">
      <h3>Слушать музыку</h3>
    </div>
    <div class="ltn__muz">      
        <?php
          $res = new ListenMuz();
          $res -> getAllMusic();
        ?>
    </div>
  </section>

</body>
</html>