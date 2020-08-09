<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poster</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>
<?php
  require_once "../controller/showPostersController.php";
?>

  <section class="pst">
    
    <div class="pst__hdr">
      <h1>Афиша и Билеты</h1>
    </div>
    
    <div class="pst__timetable">
      <div class="pst__tableblock">
        
        <div class="pst__tabledatas">
          <div class="pst__dateblock">      
            <div class="pst__number">
              <span>22</span>
            </div>
            <div class="pst__monthyear">
              <span>Май 2021</span>
            </div>
          </div>
          
          <div class="pst__placeblock">
            <div class="pst__place">
              <span>Лейпциг</span>
              <span>Red Bull Arena</span>
            </div>
          </div>
          <div class="pst__btnblock">
            <button>Выбрать билеты</button>
          </div>
        </div>


        <div class="pst__tabledatas">
          <div class="pst__dateblock">      
            <div class="pst__number">
              <span>22</span>
            </div>
            <div class="pst__monthyear">
              <span>Май 2021</span>
            </div>
          </div>          
          <div class="pst__placeblock">
            <div class="pst__place">
              <span>Лейпциг</span>
              <span>Red Bull Arena</span>
            </div>
          </div>
          <div class="pst__btnblock">
            <button>Выбрать билеты</button>
          </div>
        </div>
        
        
        <?php
          $res = new ShowPost();
          $res -> outputPost();
        ?>



        <!-- <div class="pst__tabledatas">
          <span>
            <?php
              $res = new ShowPost();
              var_dump($res -> outputPost());
            ?>
          </span>
        </div> -->
        

      </div>
    </div>

  </section>
  
</body>
</html>