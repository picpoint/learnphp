<?php



class ListenMuz {                                                                       // класс чтения всей музыки пользователя
  public $usersFolders = __DIR__.'/../usersFolders';

  
  public function getAllMusic() {                                                       // метод получения всей музыки
    $arrFolders = scandir($this->usersFolders);                                         // сканим папку пользователя

    foreach($arrFolders as $key => $vl) {                                               // перебираем массив массивов
      if($vl != '.' && $vl != '..') {                                                   // если это не папки . и .. 
        $pathToSingleUser = $this->usersFolders . "/$vl" . '/music';                    // определяем путь до папки конкретного пользователя
        $fileMuz = scandir($pathToSingleUser);                                          // сканим папки 

        foreach($fileMuz as $key => $value) {                                           // перебираем получившийся массив файлов
          if($value != '.' && $value != '..') {                                         // если не . и не .. 
            echo("<div class=" . "ltn__song" . ">");                                    // выводим блок
              echo("<audio src=". "../usersFolders/$vl/music/$value" ." controls="."controls"." ></audio>");  // в блоке выводим тег audio с путём до фала музыки конкретного пользователя
              echo("<span>$value</span>");                                              //  выводим название файла
            echo("</div>");
          }          
        }            

      } 
    }

  }


}