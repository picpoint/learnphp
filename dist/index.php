<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasks  on php</title>
  <link rel="stylesheet" href="css/style.css">	  
</head>
<body>


  <?php
    require_once "../models/readDBClass.php";
  ?>

  <section class="wrp">        
    <div class="wrp__insertquery">
      <form method="POST" class="wrp__insertform">
        <input type="text" name="firstname" placeholder="Имя">
        <br>
        <input type="text" name="lastname" placeholder="Фамилия">
        <br>
        <input type="text" name="age" placeholder="Возраст">
        <br>
        <input type="text" name="gender" placeholder="пол">
        <br>
        <button type="submit">Отправить</button>
      </form>
    </div>
    <div class="wrp__test">
      <?php
        $out = new ReadDB();
        $out -> executeMeth('SELECT * FROM template');

        $arr = ['Аркадий', 'Аркадьевич', 100,  'мужской'];
        $out -> queryMeth("INSERT INTO template (firstname, lastname, age, gender) VALUES(?, ?, ?, ?)", $arr);
        $echo -> queryMeth();
      ?>
    </div>
  </section>  

</body> 
</html>