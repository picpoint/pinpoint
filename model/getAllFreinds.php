<?php



class GetAllFreinds {                                                     // класс модель получения всех друзей, кто подтвердил дружбу

  public function __construct() {                                         // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getAllFreinds($currentLogin) {                          // метод получить всех друзей
    $sth = $this->cnnct -> prepare("SELECT freinds.id_freinds, freinds.id_user, freinds.id_myfreind, freinds.freindship, users.firstname, users.lastname FROM freinds JOIN users ON freinds.id_myfreind = '$currentLogin' AND freinds.freindship = 1 AND users.login = freinds.id_user"); // делаем запрос к бд
    $sth -> execute();                                                    // выполняем запрос
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                           // получаем данные 
    return $data;                                                         // возвращаем массив
  }


}