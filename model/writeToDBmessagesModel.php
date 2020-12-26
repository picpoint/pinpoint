<?php



class WriteMessagesToDB {

	public function construct() {
		$this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
	}


  public function writeMessage($idmsgtofrnd, $msg) {
    $sth = $this->cnnct -> prepare("SELECT id_user, id_myfreind FROM freinds WHERE id_freinds = '$idmsgtofrnd'");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
	


}