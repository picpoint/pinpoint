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
  require_once "../model/addFreindModel.php";
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
      </div>

      <?php
        $addFreinship = new AddFreindC();
        $addFreinship -> addFreindToFreinship();
      ?>


    </div>
  </section>
  
</body>
</html>