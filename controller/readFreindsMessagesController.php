<?php



class ReadFreindsMessagesC {

  public function readFrndMessg() {
    $login = $_SESSION['login'];    
    $selectFreinds = new ReadFreindsMessagesM();    
    $frndWithMsg = $selectFreinds -> selectAllFreinds($login);    

    foreach($frndWithMsg as $fwm) {                                    // перебираем массив для вывода блока с другом
      ?>
        <div class="msg__dialog">           
          <img src="pict/avatarka.png" alt="avatar">            
          <span><?php echo($fwm['firstname']);?></span>
          <span><?php echo($fwm['lastname']);?></span>
          <input type="text" name="hideid" value="<?php echo($fwm['id_freinds']);?>">
        </div>
      <?php
    }   

  }



  public function showMessagesSelectedFreind() {        
    print_r($_GET);
    print_r($_POST);

    // $data_json = json_encode($_POST, JSON_UNESCAPED_UNICODE);
    // echo $data_json;
  }







}