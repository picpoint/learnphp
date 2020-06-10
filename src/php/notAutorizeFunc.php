<?php

session_destroy();
setcookie('logname', $_SESSION['loginname'], time() - 86400);


function notAutorize() {
	if(empty($_SESSION['loginname'])) {		
		header('location: index.php');
	}	
}