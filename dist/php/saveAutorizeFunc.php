<?php



function saveAutoriz() {	
	$massLog = [];

	foreach($_SESSION as $key => $value) {
		array_push($massLog, $value);		
	}	

	if(!in_array($_SESSION['loginname'], $massLog)) {		
		header('location: index.php');
	} 
	
}