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
          </div>
        </div>
      <?php
    }
    


  }

}