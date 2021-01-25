<?php
require_once "../config/vars.php";


class RegistrationUserM {                                               // класс-модель регистрации пользователей

  public function __construct() {                                       // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function regUserToDb(array $arrRegUser) {                      // метод регистрации пользователей
    $firstname = $arrRegUser[0];                                        // имя - первый элемент массива
    $lastname = $arrRegUser[1];                                         // фамилия - второй
    $login = trim($arrRegUser[2]);                                      // логин - третий
    $password = trim($arrRegUser[3]);                                   // пароль - четвёртый


    $sth = $this->cnnct -> prepare("SELECT login FROM users WHERE login = '$login' ");  // выбираем из бд логины
    $sth -> execute();                                                  // выполняем запрос
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                         // получаем массив

    if(count($data) > 0) {                                              // если длинна массива больше 0(т.е. в бд был найден логин)
      echo("Такой логин уже существует");                               // выдаём сообщение о существующем юзере
      return;
    } else {
      $sth = $this->cnnct -> prepare("INSERT INTO users (firstname, lastname, login, password) VALUES ('$firstname', '$lastname', '$login', '$password') ");  // иначе записываем в бд юзера с данными
      $sth -> execute();                                                // выполняем запрос
      $_SESSION['login'] = $login;                                      // в сессию записываем логин
      $_SESSION['password'] = $password;                                // и пароль
      header("location: ../dist/personalPage.php");                     // отправляем юзера в лк
    }

  }



}