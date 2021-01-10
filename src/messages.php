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
  require_once "../controller/writeMessagesFreindController.php";
  require_once "../model/writeMessageFreindModel.php";
  require_once "../controller/sendMessagesToFreindController.php";
  require_once "../model/writeToDBmessagesModel.php";
  require_once "../controller/readFreindsMessagesController.php";
  require_once "../model/readFreindsMessagesModel.php";
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
          <?php
            $wrtMsgFrnd = new WriteMessageToFreindC();
            $wrtMsgFrnd -> writeMsgToFreind();
          ?>

          <?php
            $idFrndToMsg = new SendMessageToOneFreindC();
            $idFrndToMsg -> sendMessage();
          ?>

          <?php
            $readMsgs = new ReadFreindsMessagesC();
            $readMsgs -> readFrndMessg();
          ?>

          
        </div>
        <div class="msg__msgcurrentuser">
          <div class="msg__correspondence">
          </div>
          <div class="msg__sendmsg">
            <form method="post" name="sendmsgform" class="msg__sendmsgform">
              <input type="text" name="sendmsgfield" placeholder="Введите сообщение ...">
              <button type="submit" name="sendmsgbtn">Отправить</button>
              <input type="hidden" name="msgtofrnd" class="msg__msgtofrnd" value="">
            </form>
          </div>
        </div>
      </div>


    </div>
  </section>

<script src="js/selectFreindToMessages.js"></script>
<script src="js/ajaxReadFreindsMessages.js"></script>
</body>
</html>