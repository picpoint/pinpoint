<?php 



class RegistrationUserC {                                                 // класс регистрации пользователей
  
  public function getDatasUser() {                                        // метод получения данных о пользователе
    $arrRegUser = [];
    $regfirstname = '';
    $reglastname = '';
    $reglogin = '';
    $regpass = '';

    
    if(isset($_POST['regbtn'])) {                                         // если нажата кнопка "регистрация"
      if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpass'])) {  // если поля не пустые

        $regfirstname = trim($_POST['regfirstname']);
        $regfirstname = strip_tags($regfirstname);
        $regfirstname = stripcslashes($regfirstname);
        $regfirstname = htmlspecialchars($regfirstname);

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
        // $regpass = password_hash($regpass, PASSWORD_DEFAULT);

        if(mb_strlen($regfirstname) > 35) {
          echo("Слишком длинное имя");
          return;
        } elseif(mb_strlen($reglastname) > 35) {
          echo("Слишком длинная фамилия");
          return;
        } elseif(strlen($reglogin) < 3 || strlen($reglogin) > 20) {
          echo("Логин должен быть от 3 до 20 символов");
          return;
        } elseif(preg_match("/^[a-zA-Z0-9_]+$/i", $reglogin)) {
          echo("Логин должен содержать только латинские буквы и/или цифры");
          return;
        } elseif(strlen($regpass) < 5) {
          echo("Пароль должен быть не короче 5 символов");
          return;
        } else {
          $regpass = password_hash($regpass, PASSWORD_DEFAULT);
          $arrRegUser[] = $regfirstname;                     // в массив записываем имя
          $arrRegUser[] = $reglastname;                      // -||- записываем фамилию
          $arrRegUser[] = $reglogin;                         // -||- записываем логин
          $arrRegUser[] = $regpass;  //-||- записываем хеш пароля 

          $regUser = new RegistrationUserM();                               // вызываем модель-класс регистрации 
          $regUser -> regUserToDb($arrRegUser);                             // вызываем метод регистрации и передаём туда массив
        }        
        
      } else {
        echo("Не все поля заполнены");                                    // иначе выдаём сообщение
      }

    }
    
       
  }
  


}