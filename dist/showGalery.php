<?php 


function showImages() {
	$folderGalery = realpath(__DIR__.'/pict');
	$arrPict = scandir($folderGalery);	
  
  foreach($arrPict as $key => $value) {		
		echo('<img src="pict/' . $value . '">');
	}
}