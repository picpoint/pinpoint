<?php
require_once "../config/vars.php";


class RegistrationUserM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function regUserToDb(array $arrRegUser) {
    $firstname = $arrRegUser[0];
    $lastname = $arrRegUser[1];
    $login = trim($arrRegUser[2]);
    $password = trim($arrRegUser[3]);


    $sth = $this->cnnct -> prepare("SELECT login FROM users WHERE login = '$login' ");
    $sth -> execute();
    $data = $sth -> fetchAll(PDO::FETCH_ASSOC);

    if(count($data) > 0) {
      echo("Такой логин уже существует");
    } else {
      $sth = $this->cnnct -> prepare("INSERT INTO users (firstname, lastname, login, password) VALUES ('$firstname', '$lastname', '$login', '$password') ");
      $sth -> execute();
      $_SESSION['login'] = $login;
      header("location: ../dist/personalPage.php");
    }

  }



}