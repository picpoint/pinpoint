<?php



class ReadFreindsMessagesM {

  public function __construct($login) {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
    $this->login = $login;
  }


  public function selectAllFreinds() {
    $sth = $this->cnnct -> prepare("SELECT DISTINCT users.firstname, users.lastname, freinds.id_freinds
                                    FROM $this->login 
                                    JOIN users 
                                      ON $this->login.id_frommsg != '$this->login' AND $this->login.id_frommsg = users.login 
                                    JOIN freinds 
                                      ON freinds.id_user = $this->login.id_frommsg");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }



  public function readFreindsMsg($idFreinds) {
    $sth = $this->cnnct -> prepare("SELECT $this->login.id_frommsg, $this->login.id_tomsg, $this->login.messag
                                    FROM freinds
                                    JOIN $this->login
                                    WHERE freinds.id_freinds = $idFreinds AND freinds.id_user = '$this->login.id_tomsg' AND $this->login.id_frommsg = '$this->login' 
                                    OR freinds.id_freinds = $idFreinds AND freinds.id_user = 'arcUc' AND $this->login.id_frommsg = 'arcUc' ");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;                                    
  }



}