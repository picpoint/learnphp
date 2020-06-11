<?php
  session_start();  
  setcookie($_SESSION['loginname'], $_SESSION["pass"], time() + 86400);     
?>

<?php
  require_once "php/autorizationFunc.php";    
  require_once "php/exitUserFunc.php";
  require_once "php/saveAutorizeFunc.php";
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
          <form method="POST">            
            <button type="submit" name="btnExit">EXIT</button>
          </form>
          <?php exitUser(); ?>
        </span>
      </div>
			
		</div>

	</section>
</body>
</html>