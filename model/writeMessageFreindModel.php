<?php



class WriteMessagesToFreindM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getDataTowriteMsg($idtowrtmsg) {
    $sth = $this->cnnct -> prepare("SELECT freinds.id_freinds, freinds.id_user, users.firstname, users.lastname FROM freinds JOIN users ON freinds.id_freinds = '$idtowrtmsg' AND freinds.id_user = users.login");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }



}