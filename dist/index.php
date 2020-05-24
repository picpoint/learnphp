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
      
      <form action="functions" method="GET" class="wrp__formtask1">
        <div class="wrp__calculator">
          <input type="text" name="onenumber">
          <select name="operations" id="oprt">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
          <input type="text" name="twonumber">
          <span>=</span>
          <span>
            <?php
              echo("result");
            ?>
          </span>
        </div>
        <div class="wrp__result">
          <input type="submit" value="Вычислить">
        </div>
        
      </form>

    </div>
  </section>  

</body> 
</html>