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
    require_once "../controllers/readFieldsArr.php";
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
        <button type="submit" name="sendbtn">Отправить</button>
      </form>
    </div>
    <div class="wrp__test">
      <?php
        $out = new ReadDB();
        $mkarr = new ReadFields();       

        $out -> executeMeth('SELECT * FROM template');        
        $out -> queryMeth("INSERT INTO template (firstname, lastname, age, gender) VALUES(?, ?, ?, ?)", $mkarr -> makeArr());
        // var_dump($mkarr -> makeArr());
        
      ?>
    </div>
  </section>  

</body> 
</html>