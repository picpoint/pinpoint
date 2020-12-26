<?php



class SendMessageToOneFreindC {
  
	public function sendMessage() {
		if(isset($_POST['sendmsgbtn'])) {
			echo($_POST['msgtofrnd']);
			
		}

	}


    
}