<?php



class AuthorizationUserC {                                              // класс авторизации пользователей
  

  public function getDatasUserAuth() {                                  // метод получения данных от пользователя
    $arrAuthUser = [];

    if(isset($_POST['authbth'])) {                                      // если нажата кнопка "войти"
      $authlogin;
      $authpass;
      if(!empty($_POST['authlogin']) && !empty($_POST['authpass'])) {   // если поля логин и пароль не пусты
        
        $authlogin = trim($_POST['authlogin']);
        $authlogin = strip_tags($authlogin);
        $authlogin = stripcslashes($authlogin);
        $authlogin = htmlspecialchars($authlogin);

        $authpass = trim($_POST['authpass']);
        $authpass = strip_tags($authpass);
        $authpass = stripcslashes($authpass);
        $authpass = htmlspecialchars($authpass);
                
        
        $arrAuthUser[] = $authlogin;                     // в массив записываем логин и пароль
        $arrAuthUser[] = $authpass;
        
        $authUsr = new AuthorizationUserM();                            // вызываем модель авторизации
        $authUsr -> authUser($arrAuthUser);                             // вызываем метод модели и передаём в неё массив с введёнными данными пользователя
      } else {
        echo("Поля не заполнены");                                      // иначе выдаём сообщение
      }
    }
    

  }




}