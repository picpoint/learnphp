<?php 
  

function getUsersListFunc() {
	$db = __DIR__.'/../../db.txt';
	return file_get_contents($db);
}