<?php



class ShowUserWithMessagesM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }



  public function readUsersMessages($login) {
    $sth = $this->cnnct -> prepare("SELECT messages.id_tomsg, users.firstname, users.lastname FROM messages JOIN users WHERE messages.id_frommsg = '$login' AND messages.id_tomsg = users.login");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }



  
}