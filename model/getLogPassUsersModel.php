<?php



class GetAllUsersM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function getAllUsr() {
    $sth = $this->cnnct -> prepare("SELECT login, password FROM `users`");
    $sth -> execute();
    $datas = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $datas;
  }



}