<?php



class ReadUserMessagesM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }



  public function readUsersMessages($login) {
    $sth = $this->cnnct -> prepare("SELECT id_frommsg, id_tomsg, messag FROM messages WHERE id_frommsg = '$login'");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }



  
}