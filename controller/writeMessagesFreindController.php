<?php



class WriteMessageToFreindC {
  
  public function writeMsgToFreind() {
    if(isset($_POST['btnwrtmsg'])) {
      echo($_POST['idtowrtmsg']);
      $idtowrtmsg = $_POST['idtowrtmsg'];

      $resWriteMsg = new WriteMessagesToFreindM();
      $res = $resWriteMsg -> getDataTowriteMsg($idtowrtmsg);

      print_r($res);

      foreach($res as $rs) {
        ?>
          <div class="msg__dialog">           
            <img src="pict/avatarka.png" alt="avatar">            
            <span><?php echo($rs['firstname']);?></span>
            <span><?php echo($rs['lastname']);?></span>
          </div>
        <?php
      }


    }
  }
  


}