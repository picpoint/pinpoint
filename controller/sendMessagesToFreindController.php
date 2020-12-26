<?php



class SendMessageToOneFreindC {                                           // класс контроллер отправки сообщения пользователю
  
	public function sendMessage() {                                         // метод отправки
    $login = $_SESSION['login'];                                          // в $login записываем логин текущего пользователя из сессии
    
    if(isset($_POST['sendmsgbtn']) && !empty($_POST['sendmsgfield'])) {   // если нажата кнопка "отправить" и не пустое поле с текстом
      $idmsgtofrnd = $_POST['msgtofrnd'];                                 // получаем id скрытого поля input той записи где дружба с другом
      $msg = $_POST['sendmsgfield'];                                      // получаем само сообщение

      $getData = new WriteMessagesToDB();                                 // вызываем модель для записи сообщения в бд
      $getData -> selectUsersForMessages($idmsgtofrnd);                   // вызов метода выбора юзера для сообщения
      $getData -> writeMessage($msg);                                     // метод вызова записи сообщения в бд
		}

	}

  

    
}