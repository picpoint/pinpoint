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
    if(!empty($_COOKIE) && empty($_SESSION)) {
      $_SESSION = $_COOKIE;
    }

    // foreach($_COOKIE as $key => $value) {
    //   echo("<br>");
    //   echo("------------");
    //   echo("$key - $value");
    //   echo("------------");
    //   echo("<br>");      
    // }

    // if(empty(array_diff_assoc($_SESSION, $_COOKIE))) {
    //   header("location: personalPage.php");
    // }
    

    echo("----- COOCKIE/SESSION START -----");
    echo("<br>");
    print_r($_COOKIE);
    echo("<br>");
    echo("<br>");
    print_r($_SESSION);
    echo("<br>");
    echo("----- COOCKIE/SESSION END -----");

  }



}