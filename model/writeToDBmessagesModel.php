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
      $fromtUserTables = $msgFromUser . '__' . $msgToUser;
      $toUserTables = $msgToUser . '__' . $msgFromUser;
      
      $sth = $this->cnnct -> prepare("CREATE TABLE $fromtUserTables
                                      (id_messages bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                      id_frommsg VARCHAR(255) NOT NULL,
                                      id_tomsg VARCHAR(255) NOT NULL,
                                      messag TEXT NOT NULL,
                                      dates TIMESTAMP)"
      );
      $sth -> execute();

      $sth = $this->cnnct -> prepare("CREATE TABLE $toUserTables
                                      (id_messages bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                      id_frommsg VARCHAR(255) NOT NULL,
                                      id_tomsg VARCHAR(255) NOT NULL,
                                      messag TEXT NOT NULL,
                                      dates TIMESTAMP)"
      );
      $sth -> execute();


      $sth = $this->cnnct -> prepare("INSERT INTO $fromtUserTables (id_frommsg, id_tomsg, messag) VALUES('$msgFromUser', '$msgToUser', '$msg')");
      $sth -> execute();
      $sth = $this->cnnct -> prepare("INSERT INTO $toUserTables (id_frommsg, id_tomsg, messag) VALUES('$msgFromUser', '$msgToUser', '$msg')");
      $sth -> execute();      
      
    }

  }

	


}