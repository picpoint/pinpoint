<?php



class SendMessageToOneFreindC {
  
	public function sendMessage() {
    $login = $_SESSION['login'];    
    
    if(isset($_POST['sendmsgbtn'])) {
      $idmsgtofrnd = $_POST['msgtofrnd'];
      $msg = $_POST['sendmsgfield'];

      $getData = new WriteMessagesToDB();
      $getData -> selectUsersForMessages($idmsgtofrnd);
      $getData -> writeMessage($msg);
		}

	}

  

    
}