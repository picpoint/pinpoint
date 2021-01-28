<?php




class CheckLoginC {

  public function checkUserLogin() {
    echo("----- COOCKIE/SESSION START -----");
    echo("<br>");
    print_r($_COOKIE);
    echo("<br>");
    echo("<br>");
    print_r($_SESSION);
    echo("<br>");
    echo("----- COOCKIE/SESSION END -----");

    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])) {
      header("location: index.php");      
    } 

  }

  public function autoEntrance() {
    if(isset($_COOKIE)) {      
      print_r($_COOKIE);
      echo("<br>");
    }
  }



}