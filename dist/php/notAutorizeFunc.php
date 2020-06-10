<?php


function notAutorize() {
	// session_destroy();
	setcookie('', '', time() - 86400);
	header('location: index.php');
}