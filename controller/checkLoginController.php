<?php




class CheckLoginC {

  public function checkUserLogin() {
    if(empty($_SESSION['login']) && empty($_SESSION['password'])) {
      header("location: index.php");
    } 
  }



}