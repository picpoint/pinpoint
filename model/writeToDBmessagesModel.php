<?php



class WriteMessagesToDB {
  public $resSelect;

	public function __construct() {
		$this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
	}


  
  public function selectUsersForMessages($idmsgtofrnd) {
    $sth = $this->cnnct -> prepare("SELECT id_user, id_myfreind FROM freinds WHERE id_freinds = '$idmsgtofrnd'");
    $sth -> execute();
    $this->resSelect = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $this->resSelect;
  }



  public function writeMessage($msg) {
    $msgFromUser;
    $msgToUser;
    $writeMsg = $this->resSelect;

    foreach($writeMsg as $arrms) {
      $msgFromUser = $arrms['id_myfreind'];
      $msgToUser = $arrms['id_user'];

      $sth = $this->cnnct -> prepare("INSERT INTO messages (id_frommsg, id_tomsg, messag) VALUES('$msgFromUser', '$msgToUser', '$msg')");
      $sth -> execute();
    }

  }

	


}