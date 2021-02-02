<?php



class GetLogPassUsersM {                                                          // класс модель получения логинов и паролей пользователей

  public function __construct() {                                                 // конструктор соединения с бд
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getAllUsr() {                                                   // ф-ия получения всех записей логи/пасс о юзерах
    $sth = $this->cnnct -> prepare("SELECT login, password FROM `users`");        // подготавливаем запрос
    $sth -> execute();                                                            // выполняем запрос
    $datas = $sth -> fetchAll(PDO::FETCH_ASSOC);                                  // получаем массив
    return $datas;                                                                // возврат результата
  }



}