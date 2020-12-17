<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <title>Messages</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  
?>
  
  <section class="msg">
    <div class="msg__wrp">

      <div class="msg__hdr">
        <div class="msg__hdrcontent">
          <div class="msg__logo">
            <a href="personalPage.php">
              <img src="../dist/pict/pinWhite.png" alt="logo">
            </a>
          </div>
        </div>
      </div>      

      <div class="msg__content">
        <div class="msg__allusrs">

        </div>
        <div class="msg__msgcurrentuser">
          <div class="msg__correspondence">
          </div>
          <div class="msg__sendmsg">
            <form method="post" name="sendmsgform" class="msg__sendmsgform">
              <input type="text" name="sendmsgfield" placeholder="Введите сообщение ...">
              <button type="submit" name="sendmsgbtn">Отправить</button>
            </form>
          </div>
        </div>
      </div>


    </div>
  </section>
  
</body>
</html>