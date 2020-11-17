<?php



class GetDataFromDBPinContentM {
  
  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getDataPinContent($login) {
    $sth = $this->cnnct -> prepare("SELECT photo, commentaries, latitude, longitude FROM `pins` WHERE id_user='$login'");
    $sth->execute();
    $data = $sth-> fetchAll(PDO::FETCH_ASSOC);
    return $data;

  }



}