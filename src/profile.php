<?php
  session_start();  
  setcookie($_SESSION['loginname'], $_SESSION["pass"], time() + 86400);     
?>

<?php
  require_once "php/autorizationFunc.php";    
  require_once "php/exitUserFunc.php";
  require_once "php/saveAutorizeFunc.php";
  require_once "php/uploadImgFunc.php";
  require_once "php/showGaleryFunc.php";
  require_once "../classes/GuestBookClass.php";
  $pathGuestBook = __DIR__.'/../guestBook.txt';
?>

<?php
  saveAutoriz();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">	
	<title>Document</title>
</head>
<body>
  	
  <section class="prf">
		
		<div class="prf__header">		
			<div class="prf__menu">
				<h3>Добро пожаловать!</h3>
			</div>					
			<div class="prf__profilename">
				<span>					
					<?php             
						echo($_SESSION['loginname']);
					?>
				</span>
			</div>
      <div class="prf__exit">
        <span>
          <form method="POST">            
            <button type="submit" name="btnExit">EXIT</button>
          </form>
          <?php exitUser(); ?>
        </span>
      </div>			
		</div>

    <div class="prf__uploadblock">
      <form action="" method="POST" class="prf__uploadform" enctype="multipart/form-data">
        <input type="file" name="uploadFile">
        <button type="submit" name="upload">Загрузить</button>
      </form>
    </div>

    <div class="prf__galeryblock">
      <?php 
        uploadImg();         
        showGalery();
      ?>      
    </div>

    <div class="prf__guestbook">
      <div class="prf__sendmgs">
        <div class="prf__usr">
          <?php 
            echo($_SESSION['loginname']);
          ?>
        </div>
        <div class="prf__writemsg">
          <input type="text" name="writemsg">
        </div>
      </div>
      <?php
        $out = new GuestBook($pathGuestBook);
        $out->getData();
      ?>
    </div>

	</section>

</body>
</html>