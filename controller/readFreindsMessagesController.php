<?php



class ReadFreindsMessagesC {

  public function readFrndMessg() {
    $login = $_SESSION['login'];    
    $selectFreinds = new ReadFreindsMessagesM($login);    
    $frndWithMsg = $selectFreinds -> selectAllFreinds();    

    foreach($frndWithMsg as $fwm) {                                    // перебираем массив для вывода блока с другом
      ?>
        <div class="msg__dialog">           
          <img src="pict/avatarka.png" alt="avatar">            
          <span><?php echo($fwm['firstname']);?></span>
          <span><?php echo($fwm['lastname']);?></span>
          <input type="hidden" name="hideid" value="<?php echo($fwm['id_freinds']);?>">
        </div>
      <?php
    }   

  }



  public function showMessagesSelectedFreind() {
    $login = $_SESSION['login'];
    $idFreinds = $_GET;

    foreach($idFreinds as $key => $value) {
      $readMsgDB = new ReadFreindsMessagesM($login);
      return json_encode($readMsgDB -> readFreindsMsg($value), JSON_UNESCAPED_UNICODE);
    }

    

  }







}