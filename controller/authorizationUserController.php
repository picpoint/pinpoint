<?php



class AuthorizationUserC {                                              // класс авторизации пользователей
  

  public function getDatasUserAuth() {                                  // метод получения данных от пользователя
    $arrAuthUser = [];

    if(isset($_POST['authbth'])) {                                      // если нажата кнопка "войти"
      if(!empty($_POST['authlogin']) && !empty($_POST['authpass'])) {   // если поля логин и пароль не пусты
        $arrAuthUser[] = trim($_POST['authlogin']);                     // в массив записываем логин и пароль
        $arrAuthUser[] = trim($_POST['authpass']);
        
        $authUsr = new AuthorizationUserM();                            // вызываем модель авторизации
        $authUsr -> authUser($arrAuthUser);                             // вызываем метод модели и передаём в неё массив с введёнными данными пользователя
      } else {
        echo("Поля не заполнены");                                      // иначе выдаём сообщение
      }
    }
    

  }




}