<?php 


function showImages() {
	$folderGalery = realpath(__DIR__.'/pict');
	$arrPict = scandir($folderGalery);
	// return $arrPict;
	foreach($arrPict as $key => $value) {
		echo("key - $key  ---- value - $value");
		echo("<br>");
		echo("<img src=$value>");

	}
}