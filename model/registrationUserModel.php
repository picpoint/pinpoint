<?php
require_once "../config/vars.php";


class RegistrationUserM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function regUserToDb(array $arrRegUser) {
    $firstname = $arrRegUser[0];
    $lastname = $arrRegUser[1];
    $login = $arrRegUser[2];
    $password = $arrRegUser[3];


    $sth = $this->cnnct -> prepare("SELECT login FROM `users`");
    $sth -> execute();
    $allUsrs = $sth -> fetchAll(PDO::FETCH_ASSOC);

    foreach($allUsrs as $usr) {
      print_r($usr);
      echo("<br>");
    }




    // $sth = $this->cnnct -> prepare("INSERT INTO users (firstname, lastname, login, password) VALUES ('$firstname', '$lastname', '$login', '$password') ");
    // $sth -> execute();
  }



}