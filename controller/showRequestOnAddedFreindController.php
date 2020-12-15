<?php



class ShowRequestOnAddedFreindC {                                 // класс контроллер показывающий запросы на добавление в друзья в новостях
  public $resFreindship;

  
  public function getLogin() {                                    // метод получения логина текущего пользователя
    $loginUser = $_SESSION['login'];                              // получаем логин текущего пользователя через сессию
    $checkAddFrdn = new CheckForAddingToFreindsM();               // вызываем модель, которая возвращает данные по пользователям, которые подали заявку в друзья текущему пользователю
    $this->resFreindship = $checkAddFrdn -> checkFreinds($loginUser); // вызываем метод, который возвращает результат всех поданных заявок
  }

  
  public function showPeopleToFreindship() {                      // метод показа списка пользователей которые хотят добавить в друзья текущего пользователя
    $allReqToFreinds = $this->resFreindship;                      // получаем результат из предыдущего метода
    
    foreach($allReqToFreinds as $allFrnds) {                      // перебираем массив и в шаблоне выводим данные по каждому пользователю
      // print_r($allFrnds);
      // echo("<br>");
      ?>
        <div class="nws__reqfreindsblock">
          <div class="nws__reqimg">
            <img src="pict/avatarka.png" alt="avatar">
          </div>
          <div class="nws__reqcontent">
            <div class="nws__requser">
              <span>Пользователь</span> 
              <span><?php echo($allFrnds['firstname']);?></span> 
              <span><?php echo($allFrnds['lastname'])?></span>  
              <span> хочет добавить вас в друзья</span>
            </div>
            <div class="nws__reqbtns">
              <form method="post" class="nws__sendyesno">
                <button type="submit" name="btnyes">Добавить</button>
                <button type="submit" name="btnno">Отклонить</button>
                <input type="text" name="sendyes" value="<?php echo($allFrnds['id_freinds']);?>">                
              </form>
            </div>
          </div>
        </div>
      <?php
    }

  }





}