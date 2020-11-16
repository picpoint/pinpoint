<?php



class WriteDataPinToDBM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function writePin(array $dataPin) {
    $id_user = $dataPin[0];
    $photo = $dataPin[1];
    $commenst = $dataPin[2];
    $lat = $dataPin[3];
    $lon = $dataPin[4];
    
    $sth = $this->cnnct -> prepare("INSERT INTO pins (id_user, photo, commentaries, latitude, longitude)  VALUES('$id_user', '$photo', '$commenst', $lat, $lon);");
    $sth -> execute();
  }




}