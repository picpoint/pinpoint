<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
  require_once "../controller/registrationUserController.php";

?>

  <section class="reg">
    <div class="reg__wrp">
      
      <div class="reg__hdr">
        <div class="reg__hdrcontent">
          <div class="reg__logo">
            <a href="index.php">
              <img src="../dist/pict/pinWhite.png" alt="logo">
            </a>
          </div>
        </div>
      </div>

      <div class="reg__bdy">
        <div class="reg__bdyhead">
          <h3>Регистрация</h3>
        </div>
        <div class="reg__regform">
          <form method="post" class="reg__form">
            <input type="text" name="regfirstname" placeholder="Имя">
            <input type="text" name="reglastname" placeholder="Фамилия">
            <input type="text" name="reglogin" placeholder="Логин">
            <input type="password" name="regpass" placeholder="Пароль">
            <button type="submit" name="regbtn">Зарегистрироваться</button>
          </form>
          <?php
            $regUser = new RegistrationUserC();
            $regUser -> getDatasUser();
          ?>
        </div>
        
      </div>

    </div>
  </section>


</body>
</html>