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
            <form method="post" class="frds__funcblockform">
              <input type="hidden" value="<?php echo($resAll['id_freinds'])?>">
                <!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
              </a>
            </form>
          </div>
        </div>
      <?php
    }
    


  }

}