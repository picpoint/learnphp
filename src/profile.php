<?php
  session_start();
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
						require_once "php/autorizationFunc.php";
						echo($_SESSION['loginname']);
					?>
				</span>
			</div>
			
		</div>

	</section>
</body>
</html>