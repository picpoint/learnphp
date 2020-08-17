<?php



class ShowPict {                                                                // класс показа картинок
  public $usersFolders = __DIR__.'/../usersFolders';                            // путь до папки с пользовательскими папками

  
  public function getAllPict() {                                                // метод получения всех картинок у всех пользователей
    $arrFolders = scandir($this->usersFolders);                                 // сканим все пользовательски папки в папке usersFolders

    foreach($arrFolders as $key => $vl) {                                       // перебираем массив с данными о папках внутри
      if($vl != '.' && $vl != '..') {                                           // если это не . и не ..
        $pathToSingleUser = $this->usersFolders . "/$vl" . '/picture';          // заходим в папку picture
        $fileMuz = scandir($pathToSingleUser);                                  // получаем содержимое данной папки

        foreach($fileMuz as $key => $value) {                                   // перебираем массив с данными о содержимом
          if($value != '.' && $value != '..') {                                 // если это не . и не ..
            echo("<img src=" . "../usersFolders/$vl/picture/$value" ." >");     // выводим картинку
          }          
        }            

      } 
    }

  }

  
}