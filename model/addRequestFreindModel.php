<?php



class AddRequestFreindM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function freindsRequest($arrDatas) {
    $mylogin = $arrDatas['mylogin'];
    $freindsLogin = $arrDatas['freindsLogin'];    

    $sth = $this->cnnct -> prepare("INSERT INTO freinds (id_user, id_myfreind) VALUES('$mylogin', '$freindsLogin')");
    $sth -> execute();

  }



}