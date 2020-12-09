<?php



class AddRequestFreindM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function freindsRequest($arrDatas) {
    $userID = $arrDatas['userID'];
    $mylogin = $arrDatas['mylogin'];

    $sth = $this->cnnct -> prepare("INSERT INTO freinds (id_user, id_myfreind) VALUES('$mylogin', '$userID')");
    $sth -> execute();

  }



}