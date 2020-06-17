<?php



class Uploader {
  public $fieldUpload;

  
  public function __construct($fieldUpload, $btnupload) {
    $this -> fieldUpload = $fieldUpload;    
    $this -> btnupload = $btnupload;
  }  


  public function isUploaded() {
    $userlogin = $_SESSION["loginname"];
    $folderUser = __DIR__.'/../dist/pict/' . $userlogin;

    if(isset($_POST[$this -> btnupload])) {      
      if($_FILES[$this -> fieldUpload]["error"] == 0) {
        if($_FILES[$this -> fieldUpload]["type"] == "image/jpeg" || $_FILES[$this -> fieldUpload]["type"] == "image/jpg" || $_FILES[$this -> fieldUpload]["type"] == "image/png") {
          if(!file_exists($folderUser)) {    
            mkdir($folderUser, 0777);      
          } 
          move_uploaded_file($_FILES[$this -> fieldUpload]["tmp_name"], __DIR__. '/../dist/pict/' . $_SESSION["loginname"] . '/' . $_FILES[$this -> fieldUpload]["name"]);
        }
      }
    } 
  }
    
}