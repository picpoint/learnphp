<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="lk">
    
    <div class="lk__siteheader">      
      <div class="lk__profile">
        <div class="lk__profilepict">
          <img src="pict/default_avatar.jpg" alt="avatar">
        </div>
        <div class="lk__profilelogin">
          <span>noname</span>
        </div>
      </div>
      <div class="lk__menu">
        <div class="lk__linkscontent">
          <a href="#">Слушать</a>
          <a href="#">Галерея</a>
        </div>
        <div class="lk__logout">
          <a href="#">Выход</a>
        </div>
      </div>
    </div>

    <div class="lk__upload">
      <form method="POST" enctype="multipart/form-data" class="lk__uploadform">
        <input type="file" name="uploadfield">
        <button type="submit" name="uploadbtn">Загрузить</button>
      </form>
    </div>

    <div class="lk__content">
      <div class="lk__photo">

      </div>
      <div class="lk__music">
        
      </div>
    </div>


  </section>
</body>
</html>