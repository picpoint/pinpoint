<?php




class coockiesSessionsC {

  public function showCoockiesSessions() {
    print_r($_COOKIE);
    echo("<br>");
    echo("-----------");
    echo("<br>");
    print_r($_SESSION);
  }

  public function autEntrance() {
    // if(isset($_COOKIE['login'])) {
    //   header("location: personalPage.php");
    // } 

  }

  


}