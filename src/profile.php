<?php
  session_start();
  setcookie('loginname', $_SESSION['loginname'], time() + 86400);
?>

<?php
  require_once "php/autorizationFunc.php";
  require_once "php/exitFunc.php";
  require_once "php/notAutorizeFunc.php";
  notAutorize();
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
  <?php ?>
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
          <a href="index.php" <?php  notAutorize(); ?> >Exit</a>
        </span>
      </div>
			
		</div>

	</section>
</body>
</html>