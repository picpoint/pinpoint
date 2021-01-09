<?php



class ReadFreindsMessagesM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function selectAllFreinds($login) {
    $sth = $this->cnnct -> prepare("SELECT DISTINCT users.firstname, users.lastname, freinds.id_freinds
                                    FROM $login 
                                    JOIN users 
                                      ON $login.id_frommsg != '$login' AND $login.id_frommsg = users.login 
                                    JOIN freinds 
                                      ON freinds.id_user = $login.id_frommsg");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }



}