<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <title>News</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  require_once "../controller/showRequestOnAddedFreindController.php";
  require_once "../model/checkForAddingToFreindModel.php";
  require_once "../controller/addFreindController.php";
?>
  
  <section class="nws">
    <div class="nws__wrp">
      <div class="nws__hdr">
        <div class="nws__hdrcontent">
          <div class="nws__logo">
            <a href="personalPage.php">
              <img src="../dist/pict/pinWhite.png" alt="logo">
            </a>
          </div>
        </div>
      </div>
      <div class="nws__allnews">
        <?php
          $showReqOnAdded = new ShowRequestOnAddedFreindC();
          $showReqOnAdded -> getLogin();
          $showReqOnAdded -> showPeopleToFreindship();
        ?>

        
        <!-- <div class="nws__reqfreindsblock">
          <div class="nws__reqimg">
            <img src="pict/avatarka.png" alt="avatar">
          </div>
          <div class="nws__reqcontent">
            <div class="nws__requser">
              <span>Пользователь </span> <span> xxx </span> <span> хочет добавить вас в друзья</span>
            </div>
            <div class="nws__reqbtns">
              <form method="post" class="nws__sendyesno">
                <button type="submit">Добавить</button>
                <button type="submit">Отклонить</button>
              </form>
            </div>
          </div>
        </div> -->

        
      </div>

      <?php
        $addFreinship = new AddFreindC();
        $addFreinship -> addFreindToFreinship();
      ?>


    </div>
  </section>
  
</body>
</html>