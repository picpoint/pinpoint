<?php



class ShowMyFreindsC {                                                    // класс контроллер вывода всех друзей под поиском

  public function showAllFreinds() {                                      // метод показа
    $currentLogin = $_SESSION['login'];                                   // получаем текущий логин юзера

    $resShowAllFreinds = new GetAllFreinds();                             // вызываем метод выборки из БД
    $resAllFrnds = $resShowAllFreinds -> getAllFreinds($currentLogin);    // передаём текущий логин
    
    foreach($resAllFrnds as $resAll) {                                    // перебираем полученный результат
      ?>
        <div class="frds__frnd">
          <div class="frds__avatar">
            <img src="pict/avatarka.png" alt="avatar">
          </div>
          <div class="frds__names">
            <span><?php echo($resAll['firstname'])?></span>                <!-- выводим имя пользователя -->
            <span><?php echo($resAll['lastname'])?></span>                 <!-- выводим фамилию пользователя -->
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