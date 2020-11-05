<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <section class="pp">
    <div class="pp__wrp">
      <div class="pp__topblock">
        
        <div class="pp__profile">
          <div class="pp__logoblock">
            <img src="pict/profileimg.png" alt="profile">
          </div>
          <div class="pp__nameblock">
            <span>
              <?php
                echo($_SESSION['login']);
              ?>
            </span>
          </div>
          <div class="pp__placeblock">
            <span>г. Санкт-Петербург пер. Косыгина 23</span>
          </div>
          <div class="pp__detailblock">
            <a href="#">Показать подробную информацию</a>
          </div>
        </div>

        <div class="pp__topmenu">
          
        </div>

      </div>

      <div class="pp__bottomblock">

      </div>
    </div>
  </section>


</body>
</html>