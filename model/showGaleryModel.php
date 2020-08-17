<?php



class GetUserContent {                                              // класс получения контента пользователя

  public function getContent() {                                    //  метод для получения контента
    $pathToFolder = __DIR__ . '/../usersFolders';                   // путь до каталога с пользовательскими папками
    $usr = $_SESSION['login'];                                      // имя конкретного пользователя
    $usrFolder = $pathToFolder . '/' . $usr;                        // путь до папки конкретного пользователя
    $pict = $usrFolder . '/picture';                                // путь до папки picture конкретного пользователя
    $muz = $usrFolder . '/music';                                   // путь до папки music конкретного пользователя
    $usrContent = [];                                               // массив $usrContent с инфой о контенте
    $usrContent[] = $pict;                                          // в массив $usrContent помещаем инфу о картинках
    $usrContent[] = $muz;                                           // в массив $usrContent помещаем инфу о музыке
    return $usrContent;                                             // возвращаем данный массив
  }
  

}