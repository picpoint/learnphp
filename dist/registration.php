<?php
  session_start();

  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  include_once "../controller/registrationController.php";
  include_once "../model/registrationModel.php";
?>
  
  <section class="reg">
    <form method="POST" class="reg__regform">
      <div class="reg__fields">
        <input type="text" name="reglogin" placeholder="логин">
        <input type="password" name="regpass" placeholder="пароль">
        <input type="email" name="regemail" placeholder="Email">
        <button type="submit" name="regbtn">Зарегистрироваться</button>
      </div>
    </form>
  </section>

<?php
  // $out = new RegistrationController();
  // $out -> registrationUser();

  $dts = new RegistrationModel();
  $dts -> writeUserToDB();

?>
</body>
</html>