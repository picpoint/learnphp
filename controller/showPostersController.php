<?php

require_once "../model/getPostersModel.php";


class ShowPost{

  public function outputPost() {
    $datas = new ReadPosters();
    $res = $datas -> readPostersData();
    
    foreach($res as $result) {              
      echo(" <div class="."pst__tabledatas"."> ");
        echo("<div class="."pst__dateblock".">");
          echo("<div class="."pst__number".">");
            foreach($result as $key => $value) {
              if($key == 'concert_date') {
                echo("<span>$value</span>");
              }              
            }              
          echo("</div>");
          echo("<div class="."pst__monthyear".">");
            foreach($result as $key => $value) {
              if($key == 'monthyear') {
                echo("<span>$value</span>");
              }              
            }              
          echo("</div>");
        echo("</div>");
        echo("<div class="."pst__placeblock".">");
          echo("<div class="."pst__place".">");
            foreach($result as $key => $value) {
              if($key == 'city') {
                echo("<span>$value</span>");
              }              
            }              
            echo("<span>$value</span>");
          echo("</div>");
        echo("</div>");
        echo("<div class="."pst__btnblock".">");
          echo("<button>Выбрать билеты</button>");
        echo("</div>");
      echo("</div>");
    }
    
  }

  
}