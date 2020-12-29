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
      $fromtUserTables = $msgFromUser . '__' . $msgToUser;                        // переменная для таблицы сообщений типа от_кого_сообщение'__'кому_сообщение;
      $toUserTables = $msgToUser . '__' . $msgFromUser;                           // переменная для таблицы сообщений типа кому_сообщение'__'от_кого_сообщение;
      
      $sth = $this->cnnct -> prepare("CREATE TABLE $msgFromUser
                                      (id_messages bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                      id_frommsg VARCHAR(255) NOT NULL,
                                      id_tomsg VARCHAR(255) NOT NULL,
                                      messag TEXT NOT NULL,
                                      dates TIMESTAMP)"
      );
      $sth -> execute();                                                           // запрос на создание таблицы для сообщений от_кого_сообщение => кому_сообщение;

      
      $sth = $this->cnnct -> prepare("CREATE TABLE $msgToUser
                                      (id_messages bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                      id_frommsg VARCHAR(255) NOT NULL,
                                      id_tomsg VARCHAR(255) NOT NULL,
                                      messag TEXT NOT NULL,
                                      dates TIMESTAMP)"
      );
      $sth -> execute();                                                           // запрос на создание таблицы сообщений типа кому_сообщение => от_кого_сообщение;


      $sth = $this->cnnct -> prepare("
                                      INSERT INTO $msgFromUser (id_tomsg, id_frommsg, messag) VALUES('$msgToUser', '$msgFromUser', '$msg');
                                      INSERT INTO $msgToUser (id_frommsg, id_tomsg, messag) VALUES('$msgFromUser', '$msgToUser', '$msg')"
                                    );                                             // вставляем данные в таблицы
      $sth -> execute();                                                           // выполняем запрос
      
    }

  }

	


}