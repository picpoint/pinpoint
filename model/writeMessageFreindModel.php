<?php



class WriteMessagesToFreindM {                                                  // метод класс для запроса друзей, чтоб написать сообщение

  public function __construct() {                                               // конструктор для соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getDataTowriteMsg($idtowrtmsg) {                              // метод запроса данных из бд пользователя которому будем писать сообщение
    $sth = $this->cnnct -> prepare("SELECT freinds.id_freinds, freinds.id_user, users.firstname, users.lastname FROM freinds JOIN users ON freinds.id_freinds = '$idtowrtmsg' AND freinds.id_user = users.login"); // делаем запрос к бд
    $sth -> execute();                                                          // выполняем запрос
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                                 // получаем данные 
    return $data;                                                               // возвращаем массив
  }



}