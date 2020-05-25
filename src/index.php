<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasks  on php</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>

  <section class="wrp">        
    <div class="wrp__task1">
      <h3>Task 1</h3>
      
      <form method="GET" class="wrp__formtask1">
        <div class="wrp__calculator">
          <input type="text" name="onenumber" class="onenumber" value="<?= !empty($_GET['onenumber']) ? $_GET['onenumber'] : ''?>">
          <select name="operations" id="oprt" class="operations">
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
          <input type="text" name="twonumber" class="twonumber" value="<?= !empty($_GET['twonumber']) ? $_GET['twonumber'] : ''?>">
          <span>=</span>
          <span class="wrp__outres">
            <?php
              require_once "functions.php";
              echo(calculate());
            ?>
          </span>
        </div>
        <div class="wrp__result">
          <input type="submit" name="calc" class="btncalc" value="Вычислить">
        </div>        
      </form>

    </div>

    <div class="wrp__task2">
      <h3>Task 2</h3>
      <div class="wrp__galery">
        <?php
          galeryImg();
        ?>
      </div>
    </div>
    
  </section>  

<script src="js/calculate.js"></script>
</body> 
</html>