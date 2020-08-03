<?php
  session_start();
  // setcookie($_SESSION['login'], $_SESSION['password'], time() + 86400);

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal page</title>
  <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>
  <section class="lk">
    
    <div class="lk__siteheader">      
      <div class="lk__profile">
        <div class="lk__profilepict">
          <img src="../dist/pict/default_avatar.jpg" alt="avatar">
        </div>
        <div class="lk__profilelogin">
          <span>
            <?php
              echo($_SESSION['login']);
            ?>
          </span>
        </div>
      </div>
      <div class="lk__menu">
        <div class="lk__linkscontent">
          <a href="#">Слушать</a>
          <a href="#">Галерея</a>
        </div>
        <div class="lk__logout">
          <a href="../dist/index.php">Выход</a>
        </div>
      </div>
    </div>

    <div class="lk__upload">
      <form method="POST" enctype="multipart/form-data" class="lk__uploadform">
        <input type="file" name="uploadfield">
        <button type="submit" name="uploadbtn">Загрузить</button>
      </form>      
    </div>

    <div class="lk__msgs">
      <span>
      <?php
        require_once "../controller/createUserFolder.php";
        $res = new CheckAndCreateFolder();
        $res -> checkCreate();
      ?>
      </span>
    </div>   

    <div class="lk__content">      
      <div class="lk__music">
        <?php
          require_once "../controller/showGaleryController.php";
          $out = new ShowGalery();
          $out -> showMusic();
        ?>
      </div>
      <div class="lk__photo">
        <?php
          require_once "../controller/showGaleryController.php";
          $out = new ShowGalery();
          $out -> showPictures();
        ?>
      </div>
    </div>


  </section>
</body>
</html>