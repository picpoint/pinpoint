<?php



class WriteMessagesToDB {                                                         // класс модель записи сообщения в бд
  public $resSelect;                                                              // публичная переменная для передачи данных из метода в метод

	public function __construct() {                                                 // конструктор соединения с бд
		$this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
	}


  
  public function selectUsersForMessages($idmsgtofrnd) {                          // метод получения данных по конкретному пользователю
    $sth = $this->cnnct -> prepare("SELECT id_user, id_myfreind FROM freinds WHERE id_freinds = '$idmsgtofrnd'"); // выбор конкретной записи из бд, где пользователю друзья
    $sth -> execute();                                                            // выполняем запрос
    $this->resSelect = $sth -> fetchAll(PDO::FETCH_ASSOC);                        // получаем ассоциативный массив
    return $this->resSelect;                                                      // возвращяем результат
  }



  public function writeMessage($msg) {                                            // метод записи сообщения в бд
    $msgFromUser;                                                                 // переменная для определения от какого юзера будет сообщение
    $msgToUser;                                                                   // переменная для определения кому будет сообщение
    $writeMsg = $this->resSelect;                                                 // массив с данными по пользователям

    foreach($writeMsg as $arrms) {                                                // перебираем массив с данными
      $msgFromUser = $arrms['id_myfreind'];                                       // записываем в $msgFromUser от кого будет сообщение
      $msgToUser = $arrms['id_user'];                                             // записываем в $msgToUser кому будет сообщение      

      $sth = $this->cnnct -> prepare("INSERT INTO messages (id_frommsg, id_tomsg, messag) VALUES('$msgFromUser', '$msgToUser', '$msg')"); // вставляем в бд данные от кого и кому будет сообщение и само сообщение
      $sth -> execute();                                                          // выполняем запрос
    }

  }

	


}