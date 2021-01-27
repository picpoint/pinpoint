<?php



class AuthorizationUserM {                                                        // класс-модель авторизации пользователей  

  public function __construct() {                                                 // конструктор в котором идёт автоподсоединение к бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function authUser(array $arrAuthUser) {                                  // метод авторизации пользователей
    $arrLog = [];                                                                 // пустой массив для логинов
    $arrPass = [];                                                                // пустой массив для паролей

    $login = $arrAuthUser[0];                                                     // логин = первому элементу из пришедшего массива
    $password = $arrAuthUser[1];                                                  // пароль = второму элементу массива
    
    $sth = $this->cnnct -> prepare("SELECT login, password FROM users WHERE login = '$login' ");  // выбираем логины и пароли из бд где логин == введённому пользователем логину 
    $sth -> execute();                                                            // выполняем запрос 
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);                                    // получаем массив из бд


    if(count($res) > 0) {                                                         // если массив не пустой(т.е. если в бд есть такой логин)
      
      foreach($res as $rs) {                                                      // перебираем массив массивов
        foreach($rs as $key => $value) {                                          // перебираем внутренний массив
          if($key == 'login') {                                                   // если ключ == логину
            $arrLog[] = $value;                                                   // записывам в массив логинов, логин юзера
          } elseif($key == 'password') {                                          // иначе если ключ == паролю
            $arrPass[] = $value;                                                  // записываем в масссив паролей, пароль юзера
          }
        }
      }      

      $arrUsr = array_combine($arrLog, $arrPass);                                 // комбинируем ассоциативный массив из 2-х массивом для лучшего перебора

      foreach($arrUsr as $key => $value) {                                        // перебираем получившийся ассоц.массив
        if($login == $key && $password == password_verify($password, $value)) {   // если введённый логин из поля формы == логину из массива и пароль == проверенному паролю 
          $_SESSION['login'] = $login;                                            // в сессию записываем логин
          $_SESSION['password'] = $value;                                         // и хешированный пароль
          header('location: personalPage.php');                                   // перебрасываем пользователя в лк
        } else {
          echo("Логин или пароль неправильный");                                  // иначе выдаём сообщение
        }
      }
            

    }

    
    
    

  }



}