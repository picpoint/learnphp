<?php

require_once "../model/getPostersModel.php";


class ShowPost{

  public function outputPost() {
    $datas = new ReadPosters();
    $res = $datas -> readPostersData();

    // return $res;

    foreach($res as $result) {      
      foreach($result as $key => $value) {
        echo("$key - $value");
        echo("<br>");

        
        // echo(" <div class="."pst__tabledatas"."> ");
        //   echo("<div class="."pst__dateblock".">");
        //     echo("<div class="."pst__number".">");
        //       if($key == 'concert_date') {
        //         echo("<span>$value</span>");
        //       }              
        //     echo("</div>");
        //     echo("<div class="."pst__monthyear".">");
        //       if($key == 'monthyear') {
        //         echo("<span>$value</span>");
        //       }              
        //     echo("</div>");
        //   echo("</div>");
        //   echo("<div class="."pst__placeblock".">");
        //     echo("<div class="."pst__place".">");
        //       if($key == 'city') {
        //         echo("<span>$value</span>");
        //       }              
        //       echo("<span>$value</span>");
        //     echo("</div>");
        //   echo("</div>");
        //   echo("<div class="."pst__btnblock".">");
        //     echo("<button>Выбрать билеты</button>");
        //   echo("</div>");
        // echo("</div>");


      }
    }
  }


  
}