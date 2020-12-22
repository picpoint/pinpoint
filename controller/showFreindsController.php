<?php



class ShowMyFreindsC {

  public function showAllFreinds() {
    $currentLogin = $_SESSION['login'];

    $resShowAllFreinds = new GetAllFreinds();
    $resAllFrnds = $resShowAllFreinds -> getAllFreinds($currentLogin);
    
    foreach($resAllFrnds as $resAll) {
      ?>
        <div class="frds__frnd">
          <div class="frds__avatar">
            <img src="pict/avatarka.png" alt="avatar">
          </div>
          <div class="frds__names">
            <span><?php echo($resAll['firstname'])?></span>
            <span><?php echo($resAll['lastname'])?></span>
            <!-- <span><?php print_r($resAll)?></span> -->
          </div>
          <div class="frds__funcblock">
            <form method="post" action="messages.php" class="frds__funcblockform">
              <input type="hidden" name="idtowrtmsg" value="<?php echo($resAll['id_freinds'])?>">
              <button type="submit" name="btnwrtmsg"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>              
            </form>
          </div>
        </div>
      <?php
    }
    


  }

}