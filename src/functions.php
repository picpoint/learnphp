<?php


// print_r($_FILES["upload"]);
// var_dump($_FILES["upload"]["name"]);


if(0 == $_FILES['upload']['error']) {
  move_uploaded_file($_FILES['upload']['tmp_name'], "pict/".$_FILES['upload']['name']);
  header("location: index.php");
} 





/*
array(1) 
{ ["upload"]=> array(5) 
  { ["name"]=> string(6) "01.jpg" 
    ["type"]=> string(10) "image/jpeg" 
    ["tmp_name"]=> string(25) "/opt/lampp/temp/phpfOXlYr" 
    ["error"]=> int(0) ["size"]=> int(52488) 
  } 
}

*/