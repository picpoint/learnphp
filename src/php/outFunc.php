<?php 


function outUser() {
	if(empty($_COOKIE['loginname'])) {
		session_destroy();
		setcookie('', '', time() - 86400);
		header('location: index.php');
	}	
}