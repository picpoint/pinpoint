<?php



class AddFreindM {

  public function __construct() {    
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function writeFreinshipToDB($id_freinds) {
    $id_frnds = $id_freinds;
    $sth = $this->cnnct -> prepare("UPDATE freinds SET freindship = 1 WHERE id_freinds = '$id_frnds'");
    $sth -> execute();
  }


  public function writeNoFreinshipToDB($id_freinds) {
    $id_frnds = $id_freinds;
    $sth = $this->cnnct -> prepare("UPDATE freinds SET freindship = 2 WHERE id_freinds = '$id_frnds'");
    $sth -> execute();
  }

  


}