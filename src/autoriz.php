<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<section class="wrpaut">
		<div class="hdr">
			<h3>AUTORIZ</h3>
      <span>Login</span>
      <span>
        <?php
        require_once "php/getCurrentUser.php";
          echo(getCurrentUserFunc());
        ?>
      </span>
		</div>
	</section>
</body>
</html>