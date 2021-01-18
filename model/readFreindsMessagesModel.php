<?php



class ReadFreindsMessagesM {                                                      // класс модель для чтения сообщений от друга

  public function __construct($login) {                                           // конструктор для соединения с бд, передаём ему текущий логин пользователя
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');  // соединяемся с бд
    $this->login = $login;
  }


  public function selectAllFreinds() {                                            // метод выборки уникальных полей с данными о ползователе
    $sth = $this->cnnct -> prepare("SELECT DISTINCT users.firstname, users.lastname, freinds.id_freinds
                                    FROM $this->login 
                                    JOIN users 
                                      ON $this->login.id_frommsg != '$this->login' AND $this->login.id_frommsg = users.login 
                                    JOIN freinds 
                                      ON freinds.id_user = $this->login.id_frommsg");
    $sth -> execute();                                                            // выполняем запрос
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                                   // получаем массив
    return $data;                                                                 // возвращаем данные
  }



  public function readFreindsMsg($idFreinds) {                                    // метод выборки сообщений конкретного пользователя по id
    $sth = $this->cnnct -> prepare("SELECT $this->login.id_frommsg, $this->login.id_tomsg, $this->login.messag
                                    FROM $this->login
                                    JOIN freinds
                                    ON freinds.id_freinds = $idFreinds AND $this->login.id_frommsg = '$this->login' AND $this->login.id_tomsg = freinds.id_user
                                    OR freinds.id_freinds = $idFreinds AND $this->login.id_frommsg = freinds.id_user AND $this->login.id_tomsg = '$this->login' ");



    $sth -> execute();                                                            // выполняем запрос
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);                                   // получаем массив данных
    return $data;                                                                 // возвращаем запрос
  }



}