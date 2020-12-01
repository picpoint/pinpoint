<?php



class FindFreindsM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function findFreindsMeth(array $arrParamsPeople) {
    $sth = $this->cnnct -> prepare("SELECT firstname, lastname, login FROM users");
    $sth -> execute(); 
    $findFreind = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $findFreind;
  }



}