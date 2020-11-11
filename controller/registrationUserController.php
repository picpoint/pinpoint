<?php 



class RegistrationUserC {                                                 // класс регистрации пользователей
  
  public function getDatasUser() {                                        // метод получения данных о пользователе
    $arrRegUser = [];
    
    if(isset($_POST['regbtn'])) {                                         // если нажата кнопка "регистрация"
      if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpass'])) {  // если поля не пустые
        $arrRegUser[] = trim($_POST['regfirstname']);                     // в массив записываем имя
        $arrRegUser[] = trim($_POST['reglastname']);                      // -||- записываем фамилию
        $arrRegUser[] = trim($_POST['reglogin']);                         // -||- записываем логин
        $arrRegUser[] = trim(password_hash($_POST['regpass'], PASSWORD_DEFAULT));  //-||- записываем хеш пароля 

        $regUser = new RegistrationUserM();
        $regUser -> regUserToDb($arrRegUser);
        
      } else {
        echo("Не все поля заполнены");
      }

    }
    
       
  }
  


}