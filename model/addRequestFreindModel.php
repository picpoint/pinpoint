<?php



class AddRequestFreindM {                                       // класс модель, добавление запроса в друзья

  public function __construct() {                               // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function freindsRequest($arrDatas) {                   // метод дла записи данных в бд
    $mylogin = $arrDatas['mylogin'];                            // получаем свой логин из массива
    $freindsLogin = $arrDatas['freindsLogin'];                  // получаем логин пользовтеля, которому отправили заявку в друзья

    $sth = $this->cnnct -> prepare("INSERT INTO freinds (id_user, id_myfreind) VALUES('$mylogin', '$freindsLogin')"); // записываем в таблицу свой логин и логин пользователя кому отправляем заявку в друзья
    $sth -> execute();                                          // выполняем запрос
  }



}