<?php


print_r($_FILES["upload"]);

if(0 == $_FILES['upload']['error']) {
  move_uploaded_file($_FILES['upload']['tmp_name'], __DIR__."picture.jpg");
} 

