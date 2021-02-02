<?php




class coockiesSessionsC {                                                               // класс для работы с куками и сессиями
    
  public function autEntrance() {                                                       // ф-ия автовхода в ЛК
    if(isset($_COOKIE['ppusr']) && isset($_COOKIE['pppsw'])) {                          // если существуют 2 куки по определённым ключам 
      $allUsr = new GetLogPassUsersM();                                                 // вызываем модель
      $res = $allUsr -> getAllUsr();

      foreach($res as $rs) {                                                            // перебираем полученный результат
        if($_COOKIE['ppusr'] === $rs['login'] && $_COOKIE['pppsw'] === $rs['password']) { // если кука по ключу ppusr == существующему логину и кука по ключу pppsw == паролю 
          header('location: personalPage.php');                                         // перебрасываем в ЛК
        }

      }

    } 

  }

  
  public function checkCoockie() {                                                      // ф-ия проверки кук
    if(!isset($_COOKIE['ppusr']) && !isset($_COOKIE['pppsw'])) {                        // если куки по определённым ключам не существует
      header('location: index.php');                                                    // возвращаем пользователя на главную
    }

  }

  
  public function logOut() {                                                            // ф-ия разлогинивания
    if(isset($_POST['btnlogout'])) {                                                    // если нажата кнопка "выход"
      setcookie('ppusr', $_SESSION['login'], time() - 86400, '/');                      // обнуляем 2-е куки
      setcookie('pppsw', $_SESSION['password'], time() - 86400, '/');
      session_destroy();                                                                // удаляем сессию
      header("location: index.php");                                                    // перебрасываем на главную страницу
    }
  }  


}