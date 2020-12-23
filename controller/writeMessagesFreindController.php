<?php



class WriteMessageToFreindC {                                   // класс контроллер для написания сообщения другу
  
  public function writeMsgToFreind() {                          // метод для вывода конкретного пользователя для написания сообщения
    if(isset($_POST['btnwrtmsg'])) {                            // если нажата кнопка "написать сообщение - конвертик"
      $idtowrtmsg = $_POST['idtowrtmsg'];                       // в переменную записываем значение конкретного id которому будет адресованно сообщение

      $resWriteMsg = new WriteMessagesToFreindM();              // вызываем класс для передачи 
      $res = $resWriteMsg -> getDataTowriteMsg($idtowrtmsg);    // ы=вызов метода и передача id      

      // print_r($res);

      foreach($res as $rs) {                                    // перебираем массив для вывода блока с другом
        ?>
          <div class="msg__dialog">           
            <img src="pict/avatarka.png" alt="avatar">            
            <span><?php echo($rs['firstname']);?></span>
            <span><?php echo($rs['lastname']);?></span>
            <input type="hidden" name="hideid" value="<?php echo($rs['id_freinds']);?>">
          </div>
        <?php
      }


    }
  }
  


}