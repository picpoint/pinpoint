<?php



class CheckForAddingToFreindsM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function checkFreinds($loginUser) {
    $sth = $this->cnnct -> prepare("SELECT * FROM freinds WHERE id_user = '$loginUser'");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
    // return $data;

    foreach($data as $dt) {
      print_r($dt);
      echo("<br>");
    }

  }


}