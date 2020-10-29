<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pinpoint</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section class="indx">
    <div class="indx__wrp">
      
      <div class="indx__hdr">
        <div class="indx__hdrcontent">
          <div class="indx__logo">
            <a href="#">
              <img src="../dist/pict/pinWhite.png" alt="logo">
            </a>
          </div>
          <div class="indx__reg">
            <a href="#">Регистрация</a>
          </div>
        </div>
      </div>

      <div class="indx__bdy">
        <div class="indx__auth">
          <form method="post" class="indx__authblock">
            <input type="text" name="authlogin" placeholder="Логин">
            <input type="password" name="authpass" placeholder="Пароль">
            <button type="submit">Войти</button>
          </form>
        </div>
      </div>

      <div class="indx__ftr">
        <div class="indx__about">
          <a href="#">О нас</a>
        </div>
      </div>

    </div>
  </section>

</body> 
</html>