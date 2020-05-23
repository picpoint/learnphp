<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Friendsfilter</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>

  <section class="wrp">        
    <h3>Task 1</h3>
    <div class="wrp__task1">            
      <div class="wrp__and">        
        <div class="wrp__frststr">
          <span>a</span>
          <span>b</span>
          <span>a && b</span>
        </div>

        <div class="wrp__scndtstr">
          <span>0</span>
          <span>0</span>
          <span>
            <?php
              include "functions.php";
              conuction(false, false);
            ?>
          </span>
        </div>

        <div class="wrp__thrdstr">
          <span>1</span>
          <span>0</span>
          <span>
            <?php            
              conuction(true, false);
            ?>
          </span>
        </div>

        <div class="wrp__frtstr">
          <span>0</span>
          <span>1</span>
          <span>
            <?php            
              conuction(false, true);
            ?>
          </span>
        </div>

        <div class="wrp__fvstr">
          <span>1</span>
          <span>1</span>
          <span>
            <?php            
              conuction(true, true);
            ?>
          </span>
        </div>
      </div>

      <div class="wrp__or">
        <div class="wrp__frststr">
          <span>a</span>
          <span>b</span>
          <span>a || b</span>
        </div>
        
        <div class="wrp__scndtstr">
          <span>0</span>
          <span>0</span>
          <span>
            <?php
              disunction(false, false);
            ?>
          </span>
        </div>

        <div class="wrp__thrdstr">
          <span>1</span>
          <span>0</span>
          <span>
            <?php            
              disunction(true, false);
            ?>
          </span>
        </div>

        <div class="wrp__frtstr">
          <span>0</span>
          <span>1</span>
          <span>
            <?php            
              disunction(false, true);
            ?>
          </span>
        </div>

        <div class="wrp__fvstr">
          <span>1</span>
          <span>1</span>
          <span>
            <?php            
              disunction(true, true);
            ?>
          </span>
        </div>
      </div>

      <div class="wrp__xor">
        <div class="wrp__frststr">
          <span>a</span>
          <span>b</span>
          <span>a xor b</span>
        </div>
          
        <div class="wrp__scndtstr">
          <span>0</span>
          <span>0</span>
          <span>
            <?php
              exor(false, false);
            ?>
          </span>
        </div>

        <div class="wrp__thrdstr">
          <span>1</span>
          <span>0</span>
          <span>
            <?php            
              exor(true, false);
            ?>
          </span>
        </div>

        <div class="wrp__frtstr">
          <span>0</span>
          <span>1</span>
          <span>
            <?php            
              exor(false, true);
            ?>
          </span>
        </div>

        <div class="wrp__fvstr">
          <span>1</span>
          <span>1</span>
          <span>
            <?php            
              exor(true, true);
            ?>
          </span>
        </div>      
      </div>
    </div>    

    <div class="wrp__task2">
      <h3>Task 2</h3>
      <form method="POST" class="wrp__formsend">
        <div class="wrp__f1">        
          <span>
            <input type="text" name="a" placeholder="a">x<sup>2</sup> + 
            <input type="text" name="b" placeholder="b">x + 
            <input type="text" name="c" placeholder="c"> = 0
          </span>            
        </div>
        <div class="wrp__f2">
          <span>D = b<sup>2</sup> - 4ac =</span> <span class="outdisc">
            <?php                                          
              echo(discreminant()[0]);
            ?>
          </span>
        </div>
        
        <div class="wrp__f3">
          <div class="wrp__f3x1">
            <span>X1 = </span>
          </div>
          <div class="wrp__fraction">
            <span> -b -&#8730D</span>
            <span>2a</span>
          </div>
          <div class="wrp__f3x1out">
            <span>=</span>
            <span>
              <?php
                echo(discreminant()[1]);
              ?>
            </span>
          </div>
        </div>

        <div class="wrp__f4">
          <div class="wrp__f3x2">
            <span>X2 = </span>
          </div>
          <div class="wrp__fraction">
            <span> -b +&#8730D</span>
            <span>2a</span>
          </div>
          <div class="wrp__f3x2out">
            <span>=</span>
            <span>
              <?php
                echo(discreminant()[2]);
              ?>
            </span>
          </div>
        </div>

        <input type="submit" name="task2" value="Вычислить"></input>
      </form>

    </div>

    <div class="wrp__task4">
      <h3>* Task 4</h3>
      <div class="wrp__namesblock">
        <form method="POST" class="wrp__namesform">
          <input type="text" name="inpname" placeholder="Введите имя">        
          <input type="submit" name="task4" value="Определить"></input>
          <div class="wrp__namesout">
            <span>
              <?php                
                echo(genderDefination());
              ?>
            </span>
          </div>
        </form>
      </div>
    </div>




  </section>
  

</body> 
</html>