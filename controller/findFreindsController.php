<?php



class FindFreindsC {                                              // контроллер поиска друзей

  public function findAllFreinds() {                              // метод поиска
    $arrParamsPeople = [];                                        // объявляем пустой массив для дальнейшего наполнения данными для поиска
    
    if(isset($_POST['searchbtn'])) {                              // если нажата кнопка "найти"
      if(!empty($_POST['searchlastname'])) {                      // если поле "фамилия" не пустое
        $arrParamsPeople['searchlastname'] = trim($_POST['searchlastname']);  // в массив по ключу searchlastname помещаем то что пришло из поста
      } else if(!empty($_POST['searchfirstname'])) {              // иначе если поле "имя" не пустое
        $arrParamsPeople['searchfirstname'] = trim($_POST['searchfirstname']);  // помещаем в масси по ключу searchfirstname то что пришло из поста
      } elseif(!empty($_POST['searchlogin'])) {                   // иначе если поле "логин" не пустое
        $arrParamsPeople['searchlogin'] = $_POST['searchlogin'];  // помещаем в массив по ключу searchlogin то что пришло из поста
      } else {
        echo("Ни одно поле не заполнено");                        // иначе выводим сообщение что ни одно поле не заполнено
        return;
      }

      $resFindFreind = new FindFreindsM();                        // вызываем класс модель для поиска данных из бд
      $resfind = $resFindFreind -> findFreindsMeth($arrParamsPeople); // передаём в метод поиска массив с нужными данными и возвращаем результат

      if(count($resfind) == 0) {                                  // если результат вернувшегося массива пустой
        return "Нет пользователей с такими параметрами ...";      // уведомляем пользователя
      } else {
        foreach($resfind as $rf) {                                // перебираем пришедний массив данных
         ?>
          <div class="frds__freindsblock">
            <div class="frds__freindsblocklogo">
              <img src="pict/avatarka.png" alt="logo">
            </div>
            <div class="frds__freindsblockpersondata">
              <div class="frds__datas">
                <span class="frds__lastname"><?php echo($rf['lastname']);?></span>  <!-- в фамилию вставляем значение из массива по ключу --> 
                <span class="frds__firstname"><?php echo($rf['firstname']);?></span>  <!-- в имя вставляем значение из массива по ключу --> 
                <span class="frds__login"><?php echo($rf['login']);?></span>  <!-- в логин вставляем значение из массива по ключу --> 
              </div>
            </div>
            <div class="frds__freindsblockadd">
              <form method="POST" class="frds__freindsblockaddform">
                <button>Добавить</button>
              </form>
            </div>
          </div>
         <?php
        }

      }
      
    }


  }


  


}