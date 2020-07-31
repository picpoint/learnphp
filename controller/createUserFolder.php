<?php


class CheckAndCreateFolder {
  public $pathToRoot = __DIR__ . '/../usersFolders';  
  
  
  public function checkCreate() {    
    $userLogin = $_SESSION['login'];
        
    if(isset($_POST['uploadbtn'])) {
      if(!file_exists($this->pathToRoot.'/'.$userLogin)) {        
        mkdir($this->pathToRoot.'/'.$userLogin, 0777);
        mkdir($this->pathToRoot.'/'.$userLogin.'/music', 0777);
        mkdir($this->pathToRoot.'/'.$userLogin.'/picture', 0777);
      }

      if(isset($_FILES['uploadfield']['name'])) {
        if($_FILES['uploadfield']['type'] == 'image/jpeg' || $_FILES['uploadfield']['type'] == 'image/jpg' || $_FILES['uploadfield']['type'] == 'image/png') {
          move_uploaded_file($_FILES['uploadfield']['tmp_name'], $this->pathToRoot . '/' . $userLogin . '/picture/' . $_FILES['uploadfield']['name']);
          echo('Картинка загружена');
        } elseif($_FILES['uploadfield']['type'] == 'audio/mpeg') {
          move_uploaded_file($_FILES['uploadfield']['tmp_name'], $this->pathToRoot . '/' . $userLogin . '/music/' . $_FILES['uploadfield']['name']);
          echo('Музыка загружена');
        } else {
          echo("Вы можете загружать только mp3 и картинки");
        }
      }

    }

  }


}