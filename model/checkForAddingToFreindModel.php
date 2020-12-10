<?php



class CheckForAddingToFreindsM {                                      // класс модел возвращающая из бд данные о пользователях которые подали заявку текущему пользователю на дружбу

  public function __construct() {                                     // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function checkFreinds($loginUser) {                          // метод возвращающий данные из бд
    $sth = $this->cnnct -> prepare("SELECT id_user, id_myfreind, freindship FROM freinds WHERE id_myfreind = '$loginUser'");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    // return $data;

    foreach($data as $dt) {
      print_r($dt);
      echo("<br>");
    }

  }


}