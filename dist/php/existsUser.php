<?php



function existsUserFunc($login) {
	$file = __DIR__.'/../../db.txt';	
	$arrUsers = file($file);
	$mass = [];
	
	foreach($arrUsers as $key => $value) {		
		$user = explode(": ", $value);			
	}

	var_dump($user);


	// if(in_array($login, $user)) {
	// 	echo("Есть такой логин");
	// } else {
	// 	echo("Логина нет в БД");
	// }		

	

}