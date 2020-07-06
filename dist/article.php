<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">	  
  <title>Article</title>
</head>
<body>

<?php
  require_once "../controllers/readNewsArticle.php";
  require_once "../models/readOneNewsDBClass.php";

?>

  <div class="wrp__articleblock">
    <div class="wrp__backhome">
      <a href="index.php">Home page</a>
    </div>

    <div class="wrp__paginator">
      <?php      
        $dt = new ReadNewsArticle();
        $dt -> outIndx();  
        // var_dump($dt -> outNews());
      ?>
    </div>  

    <div class="wrp__shownews">
      <?php
        $dt -> outNews();
      ?>
    </div>
  </div>
  
</body>
</html>