<?php



class SendMessageToOneFreindC {
  
	public function sendMessage() {
    $login = $_SESSION['login'];    
    
    if(isset($_POST['sendmsgbtn']) && !empty($_POST['sendmsgfield'])) {
      $idmsgtofrnd = $_POST['msgtofrnd'];
      $msg = $_POST['sendmsgfield'];
      
      echo($login);      
      echo($idmsgtofrnd);

      $getData = new WriteMessagesToDB();
      $getData -> writeMessage($idmsgtofrnd, $msg);
		}

	}

  

    
}