<?php


class CheckAndCreateFolder {                                                                // класс создания пользовательских папок и загружки файлов
  public $pathToRoot = __DIR__ . '/../usersFolders';                                        // путь до корневой папки пользователей
  
  
  public function checkCreate() {                                                           // метод проверки и загружки файлов
    $userLogin = $_SESSION['login'];                                                        // логин пользователя из сессии
        
    if(isset($_POST['uploadbtn'])) {                                                        // если нажата кнопка загрузки файлов
      if(!file_exists($this->pathToRoot.'/'.$userLogin)) {                                  // если не существует пользовательской папки с именем пользователя
        mkdir($this->pathToRoot.'/'.$userLogin, 0777);                                      // создать папку с именем пользователя
        mkdir($this->pathToRoot.'/'.$userLogin.'/music', 0777);                             // в папке пользователя создать папку music
        mkdir($this->pathToRoot.'/'.$userLogin.'/picture', 0777);                           // -||-  picture
      }

      if(isset($_FILES['uploadfield']['name'])) {                                           // если загружен файл
        if($_FILES['uploadfield']['type'] == 'image/jpeg' || $_FILES['uploadfield']['type'] == 'image/jpg' || $_FILES['uploadfield']['type'] == 'image/png') {  // если загруженный файл это jpg/png
          move_uploaded_file($_FILES['uploadfield']['tmp_name'], $this->pathToRoot . '/' . $userLogin . '/picture/' . $_FILES['uploadfield']['name']);  // переместить загруженный файл в папку picture с исходным именем файла
          echo('Картинка загружена');
        } elseif($_FILES['uploadfield']['type'] == 'audio/mpeg') {                          // иначе если загруженный файл это mp3
          move_uploaded_file($_FILES['uploadfield']['tmp_name'], $this->pathToRoot . '/' . $userLogin . '/music/' . $_FILES['uploadfield']['name']);  // // переместить загруженный файл в папку music с исходным именем файла
          echo('Музыка загружена');
        } else {
          echo("Вы можете загружать только mp3 и картинки");                                // иначе выдать предупреждение о типе загружаемых файлов
        }
      }

    }

  }


}