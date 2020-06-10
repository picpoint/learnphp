<?php


function autorizUser() {
	$db = __DIR__.'/../../db.txt';
	$file = file($db);
	$usrlogin = $_POST['usrlogin'];
	$usrpass = $_POST['usrpass'];
	$massLogin = [];
	$massPass = [];
	$mass = [];
	
	foreach($file as $key => $value) {		
		echo("<br>");
		$line = explode(": ", $value);
				
		foreach($line as $key => $value) {			
			if($key == 0) {
				array_push($massLogin, trim($value));
			} elseif($key == 1) {
				array_push($massPass, trim($value));
			}
		}

	}	

	$mass = array_combine($massLogin, $massPass);

	foreach($mass as $key => $value) {		
		echo("<br>");
		if($key !== $usrlogin) {
			echo("Такого логина нет ...");
			echo("<br>");
		} elseif($key === $usrlogin && password_verify($usrpass, $value)) {
      echo("Вы авторизованны");      
      $_SESSION['loginname'] = $usrlogin;
      header('location: profile.php');
		} else {
			echo("Неправильный логин или пароль");
			echo("<br>");
		}
  }
  	
}