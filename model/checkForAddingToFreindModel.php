<?php



class CheckForAddingToFreindsM {                                      // класс модел возвращающая из бд данные о пользователях которые подали заявку текущему пользователю на дружбу

  public function __construct() {                                     // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function checkFreinds($loginUser) {                          // метод возвращающий данные из бд
    $sth = $this->cnnct -> prepare("SELECT users.id_user, users.firstname, users.lastname, users.login, freinds.id_freinds, freinds.id_user, freinds.id_myfreind, freinds.freindship FROM users JOIN freinds ON freinds.id_myfreind = '$loginUser' AND users.login = freinds.id_user AND freinds.freindship = 0");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;

    // foreach($data as $dt) {
    //   print_r($dt);
    //   echo("<br>");
    // }

  }


}