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
			// echo("$key - $value");					
			if($key == 0) {
				array_push($massLogin, $value);
			} elseif($key == 1) {
				array_push($massPass, $value);
			}
		}

	}	

	$mass = array_combine($massLogin, $massPass);

	foreach($mass as $key => $value) {
		echo("$key - $value");
		echo("<br>");
		if($key !== $usrlogin) {
			echo("Такого логина нет ...");
			echo("<br>");
		} elseif($key === $usrlogin && password_verify($usrpass, $value)) {
			echo("*******************Вы авторизованны*********************");
		} else {
			echo("Неправильный логин или пароль");
			echo("<br>");
		}
	}
	


}