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
      <h3>Task1</h3>
      <div class="wrp__guestblock">        
        
        <div class="wrp__userblock">          
          <?php
            require_once "readGuestBook.php";
            readGuestBook();
          ?>          
        </div>        
        <div class="wrp__addnote">
          <form method="post" class="wrp__addnoteform">
            <input type="text" name="nameuser" placeholder="Login">
            <input type="text" name="messageuser" placeholder="message">
            <button type="submit" name="send">Отправить</button>
          </form>
        </div>

      </div>
    </div>
    <div class="wrp__task2">
      <h3>Task 2</h3>
      <div class="wrp__blockload">
        <form action="index.php" method="POST" enctype="multipart/form-data" class="wrp__formload">
          <input type="file" name="loadfield">
          <button type="submit" name="actionbtn">Load file</button>
        </form>        
      </div>
      <div class="wrp__out">
        <?php
          require_once "loadFiles.php";
          loadFile();
        ?>
      </div>
    </div>
  </section>  

</body> 
</html>