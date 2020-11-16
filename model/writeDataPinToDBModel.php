<?php



class WriteDataPinToDBM {                                                               // класс - модель для записи данных с пина в бд

  public function __construct() {                                                       // конструктор для соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function writePin(array $dataPin) {                                            // метод для записи данных о пине в бд
    $id_user = $dataPin[0];                                                             // имя пользователя
    $photo = $dataPin[1];                                                               // путь до фото
    $commenst = $dataPin[2];                                                            // комментарии
    $lat = $dataPin[3];                                                                 // широта 
    $lon = $dataPin[4];                                                                 // долгота
    
    $sth = $this->cnnct -> prepare("INSERT INTO pins (id_user, photo, commentaries, latitude, longitude)  VALUES('$id_user', '$photo', '$commenst', $lat, $lon);"); // делаем запрос в бд с параметрами
    $sth -> execute();                                                                  // выполняем запрос
  }




}