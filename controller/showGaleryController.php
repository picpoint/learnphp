<?php

require_once "../model/showGaleryModel.php";                                            // подключаем модель галереи



class ShowGalery {                                                                      // класс отображения файлов mp3 и картинок на странице

  public function showPictures() {                                                      // метод показа картинок
    $datas = new GetUserContent();                                                      // получаем контент по пользователю
    $usrContent = $datas -> getContent();
    $usr = $_SESSION['login'];                                                          // в $usr записываем имя пользователя
    
    foreach($usrContent as $key => $val) {                                              // перебираем полученный контент(массив массивов)
      $files = scandir($val);                                                           // сканим папку
      foreach($files as $key => $value) {                                               // перебираем полученный массив
        $info = new SplFileInfo($value);                                                // получаем информацию по файлу
        $ext = $info -> getExtension();                                                 // получаем расширение файла
        if($ext == 'png' || $ext == 'jpg') {                                            // если расширение файла картинка
          echo("<img src=" . "../usersFolders/$usr/picture/$value" . ">");              // выводим картинки из папки конкретного пользователя
        }
      }
    }

  }


  public function showMusic() {                                                         // метод показа музыки
    $datas = new GetUserContent();                                                      // получение контента пользователя
    $usrContent = $datas -> getContent();
    $usr = $_SESSION['login'];                                                          // в $usr записываем имя пользователя
    
    foreach($usrContent as $key => $val) {                                              // перебираем массив массивов
      $files = scandir($val);                                                           // сканим папку, получаем содержимое
      
      foreach($files as $key => $value) {                                               // перебираем получившийся массив
        $info = new SplFileInfo($value);                                                // получаем инфу по файлу
        $ext = $info -> getExtension();                                                 // получаем расширение файла
        if($ext == 'mp3' || $ext == 'wav') {                                            // если расширение mp3 || wav 
          echo("<div class="."lk__muz".">");                                            // выводим блок
            echo("<audio src="."../usersFolders/$usr/music/$value"." controls preload="."auto"." type=" . "audio/mpeg" . "></audio> "); // в блоке выводим тег audio 
            echo("<span>$value</span>");                                                // выводим название песни
          echo("</div>");
        }
      }
    }
    
  }




}