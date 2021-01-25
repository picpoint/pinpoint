<?php 



class RegistrationUserC {                                                 // класс регистрации пользователей
  
  public function getDatasUser() {                                        // метод получения данных о пользователе
    $arrRegUser = [];                                                     // пустой массив для сбора всей инфы и отправки на сервер для регистрации
    $regfirstname = '';
    $reglastname = '';
    $reglogin = '';
    $regpass = '';

    
    if(isset($_POST['regbtn'])) {                                         // если нажата кнопка "регистрация"
      if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpass'])) {  // если поля не пустые

        $regfirstname = trim($_POST['regfirstname']);                     // удаляем пробелы
        $regfirstname = strip_tags($regfirstname);                        // удаляем теги
        $regfirstname = stripcslashes($regfirstname);                     // экранируем слеши
        $regfirstname = htmlspecialchars($regfirstname);                  // конвертируем в хтмл сущности

        $reglastname = trim($_POST['reglastname']);
        $reglastname = strip_tags($reglastname);
        $reglastname = stripcslashes($reglastname);
        $reglastname = htmlspecialchars($reglastname);

        $reglogin = trim($_POST['reglogin']);
        $reglogin = strip_tags($reglogin);
        $reglogin = stripcslashes($reglogin);
        $reglogin = htmlspecialchars($reglogin);

        $regpass = trim($_POST['regpass']);
        $regpass = strip_tags($regpass);
        $regpass = stripcslashes($regpass);
        $regpass = htmlspecialchars($regpass);        

        if(mb_strlen($regfirstname) > 35) {                               // если имя > 35 выдаём предупреждение
          echo("Слишком длинное имя");
          return;
        } elseif(mb_strlen($reglastname) > 35) {                          // если фамилия > 35 выдаём предупреждение
          echo("Слишком длинная фамилия");
          return;
        } elseif(!preg_match("/^[a-zA-Z0-9_]+$/i", $reglogin)) {          // если в логине не только латиница и цифры, прерываем
          echo("Логин должен содержать только латинские буквы и/или цифры");
          return;
        } elseif(strlen($reglogin) < 3 || strlen($reglogin) > 20) {       // если логин < 3 или > 20 выдаём предупреждение и прерываем
          echo("Логин должен быть от 3 до 20 символов");
          return;
        } elseif(!preg_match("/^[a-zA-Z0-9_]+$/i", $regpass)) {           // если в пароле не только латиница и цифры, прерываем
          echo("Пароль должен содержать только латинские буквы и/или цифры");
        } elseif(strlen($regpass) < 5) {                                  // если пароль короче 5 символов, прерываем
          echo("Пароль должен быть не короче 5 символов");
          return;
        } else {
          $regpass = password_hash($regpass, PASSWORD_DEFAULT);           // хешируем пароль
          $arrRegUser[] = $regfirstname;                                  // в массив записываем имя
          $arrRegUser[] = $reglastname;                                   // -||- записываем фамилию
          $arrRegUser[] = $reglogin;                                      // -||- записываем логин
          $arrRegUser[] = $regpass;                                       // -||- записываем хеш пароля 

          $regUser = new RegistrationUserM();                             // вызываем модель-класс регистрации 
          $regUser -> regUserToDb($arrRegUser);                           // вызываем метод регистрации и передаём туда массив
        }        
        
      } else {
        echo("Не все поля заполнены");                                    // иначе выдаём сообщение
      }

    }
    
       
  }
  


}