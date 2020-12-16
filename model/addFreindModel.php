<?php



class AddFreindM {                                                                       // класс модель для записи результатов дружбы/отказа от дружбы

  public function __construct() {                                                        // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function writeFreinshipToDB($id_freinds) {                                      // записываем в бд результат при согласии дружбы
    $id_frnds = $id_freinds;                                                             // получаем id_freinds, id заявки в дружбу
    $sth = $this->cnnct -> prepare("UPDATE freinds SET freindship = 1 WHERE id_freinds = '$id_frnds'"); // подготавливаем запрос на изменение данных
    $sth -> execute();                                                                   // выполняем запрос
  }


  public function writeNoFreinshipToDB($id_freinds) {                                     // метод записи результата отказа от дружбы
    $id_frnds = $id_freinds;                                                              // получаем id_freinds, id заявки в дружбу
    $sth = $this->cnnct -> prepare("UPDATE freinds SET freindship = 2 WHERE id_freinds = '$id_frnds'"); // подготавливаем запрос на изменение данных
    $sth -> execute();                                                                    // выполняем запрос
  }

  


}