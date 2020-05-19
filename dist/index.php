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
              include "./functions.php";
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
      <div class="wrp__f1">
        <span>ax<sup>2</sup> + bx + c = 0</span>
      </div>
      <div class="wrp__f2">
        <span>D = b<sup>2</sup> - 4ac</span>
      </div>
      
      <div class="wrp__f3">
        <div class="wrp__f3x1">
          <span>X1 = </span>
        </div>
        <div class="wrp__fraction">
          <span>-b -&#8730(4*a*c)</span>
          <span>2a</span>
        </div>
      </div>

    </div>




  </section>
  

</body> 
</html>