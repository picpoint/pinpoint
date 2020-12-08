<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freinds</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
  require_once "../controller/findFreindsController.php";
  require_once "../model/findFreindsModel.php";
  require_once "../controller/sendRequestFreindController.php";
  require_once "../model/addRequestFreindModel.php";
?>

  <section class="frds">
    <div class="frds__wrp">
      <div class="frds__hdr">
        <div class="frds__hdrcontent">
        <div class="frds__logo">
          <a href="personalPage.php">
            <img src="../dist/pict/pinWhite.png" alt="logo">
          </a>
        </div>
        </div>
      </div>

      <div class="frds__find">
        
        <div class="frds__allfreinds">
          <div class="frds__allfreindshdr">
            <span>Все друзья: </span>
            <span>0</span>
            <?php
              $sendReq = new sendRequestFreindC();
              $sendReq -> getDatasAboutAddFreind();
            ?>
          </div>
          <div class="frds__allfreindsresult">
            <?php
              $resFind = new FindFreindsC();
              print_r($resFind -> findAllFreinds());
            ?>
          </div>
        </div>

        <div class="frds__searchparam">
          <div class="frds__searchparamhdr">
            <span>Параметры поиска</span>
          </div>
          <div class="frds__searchparamblock">
            <form method="post" class="frds__searchform">
              <input type="text" name="searchlastname" placeholder="Фамилия">
              <input type="text" name="searchfirstname" placeholder="Имя">
              <input type="text" name="searchlogin" placeholder="Логин">
              <button type="submit" name="searchbtn">Найти</button>
            </form>
          </div>
        </div>
      </div>


    </div>
  </section>

<script src="js/test.js"></script> 
</body>
</html>