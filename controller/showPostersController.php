<?php

require_once "../model/getPostersModel.php";                              // подключаем модель которая отдаёт данные из бд по афише


class ShowPost{                                                           // класс показа записей афиши

  public function outputPost() {                                          // метод вывода на странице всех записей по афише
    $datas = new ReadPosters();                                           // получить данные по записям концертов
    $res = $datas -> readPostersData();
    
    foreach($res as $result) {                                            // перебираем все записи и выводим в блоках
      echo(" <div class="."pst__tabledatas"."> ");
        echo("<div class="."pst__dateblock".">");
          echo("<div class="."pst__number".">");
            foreach($result as $key => $value) {
              if($key == 'concert_date') {                                // дата концерта
                echo("<span>$value</span>");
              }              
            }              
          echo("</div>");
          echo("<div class="."pst__monthyear".">");
            foreach($result as $key => $value) {
              if($key == 'monthyear') {                                   // месяц/год
                echo("<span>$value</span>");
              }              
            }              
          echo("</div>");
        echo("</div>");
        echo("<div class="."pst__placeblock".">");
          echo("<div class="."pst__place".">");
            foreach($result as $key => $value) {
              if($key == 'city') {                                        // место концерта
                echo("<span>$value</span>");
              }              
            }              
            echo("<span>$value</span>");
          echo("</div>");
        echo("</div>");
        echo("<div class="."pst__btnblock".">");
          echo("<button>Выбрать билеты</button>");                        // кнопка "выбрать билеты"
        echo("</div>");
      echo("</div>");
    }
    
  }

  
}