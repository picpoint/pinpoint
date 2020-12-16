<?php



class GetAllFreinds {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getAllFreinds($currentLogin) {
    $sth = $this->cnnct -> prepare("SELECT freinds.id_freinds, freinds.id_user, freinds.id_myfreind, freinds.freindship, users.firstname, users.lastname FROM freinds JOIN users ON freinds.id_myfreind = '$currentLogin' AND freinds.freindship = 1 AND users.login = freinds.id_user");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }


}