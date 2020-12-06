<?php



class FindFreindsM {                                                      // класс модель поиска пользователей
  public $searchfirstname;
  public $searchlastname;
  public $searchlogin;


  public function __construct() {                                         // конструктор соединение с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function findFreindsMeth(array $arrParamsPeople) {               // метод поиска друзей
    foreach($arrParamsPeople as $key => $value) {                         // перебираем полученный массив
      if($key == 'searchlastname' || $key == 'searchfirstname') {         // если ключ имя или фамилия

        if($key == 'searchfirstname') {                                   // если ключ - имя
          $this->searchfirstname = $value;                                // переменной присваиваем значение имени
        }
        
        if($key == 'searchlastname') {                                    // если переменная фамилия
          $this->searchlastname = $value;                                 // переменной присваиваем значение фамилии
        }        
    
        $sth = $this->cnnct -> prepare("SELECT id_user, firstname, lastname, login FROM users WHERE firstname = '$this->searchfirstname' OR lastname = '$this->searchlastname' "); // делаем выборку по имени или фамилии
        $sth -> execute();                                                // выполняем запрос
        $findFreind = $sth->fetchAll(PDO::FETCH_ASSOC);                   // получаем данные
        return $findFreind;                                               // возвращаем массив
      } else if($key == 'searchlogin') {                                  // иначе если ключ - логин
        $this->searchlogin = $value;                                      // присваиваем переменной значение логина
        $sth = $this->cnnct -> prepare("SELECT id_user, firstname, lastname, login FROM users WHERE login = '$this->searchlogin' "); // делаем запрос по логину
        $sth -> execute();                                                // выполняем запрос
        $findFreind = $sth->fetchAll(PDO::FETCH_ASSOC);                   // получаем данные
        return $findFreind;                                               // возвращаем масссив
      } else {
        return "Нет пользователей с такими параметрами ...";              // иначе выводим сообщение о том что нет такого пользователя
      }
    }

  }


  

}