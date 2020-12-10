<?php



class GetDataFromDBPinContentM {                              // класс модель получения данных о пинах
  
  public function __construct() {                             // конструктор, соедеинение с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getDataPinContent($login) {                 // метод получения данных о содержимом пинах
    $sth = $this->cnnct -> prepare("SELECT photo, commentaries, latitude, longitude FROM `pins` WHERE id_user='$login'"); // запрос в бд на выборку конкретных данных
    $sth->execute();                                          // выполняем запрос
    $data = $sth-> fetchAll(PDO::FETCH_ASSOC);                // получаем ассоциативный массив
    return $data;                                             // возвращаем данные

  }



}