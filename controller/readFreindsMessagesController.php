<?php



class ReadFreindsMessagesC {                                           // класс контроллер для чтения и вывода сообщений от друзей

  public function readFrndMessg() {                                    // метод чтения сообщений
    $login = $_SESSION['login'];                                       // присваиваем переменной текущий логин пользователя
    $selectFreinds = new ReadFreindsMessagesM($login);                 // вызываем класс - модель и передаём ему логин
    $frndWithMsg = $selectFreinds -> selectAllFreinds();    

    foreach($frndWithMsg as $fwm) {                                    // перебираем полученный из модели массив для вывода блока с другом
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



  public function showMessagesSelectedFreind() {                        // метод показа сообщений у выбранного пользователя
    $login = $_SESSION['login'];                                        // получаем текущий логин
    $idFreinds = $_GET;                                                 // получаем массив из запроса GET

    foreach($idFreinds as $key => $value) {                             // перебираем массив
      $readMsgDB = new ReadFreindsMessagesM($login);                    // вызываем класс модель для выборки конкретных сообщений от конкретного друга
      return json_encode($readMsgDB -> readFreindsMsg($value), JSON_UNESCAPED_UNICODE); // возвращаем json массив с данными сообщений конкретного друга
    }

    

  }







}