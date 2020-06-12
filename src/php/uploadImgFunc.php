<?php



function uploadImg() {    
  $userlogin = $_SESSION["loginname"];
  $folderUser = __DIR__.'/../pict/' . $userlogin;

  if(isset($_POST["upload"])) {
    if(!file_exists($folderUser)) {    
      mkdir($folderUser, 0777);      
    } 
    move_uploaded_file($_FILES["uploadFile"]["tmp_name"], __DIR__. '/../pict/' . $userlogin . '/' . $_FILES["uploadFile"]["name"]);
  }    
  
}