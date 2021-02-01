<?php




class coockiesSessionsC {

  public function showCoockiesSessions() {
    print_r($_COOKIE);
    echo("<br>");
    echo("-----------");
    echo("<br>");
    print_r($_SESSION);
    
    if(isset($_COOKIE)) {
      echo("<br>");
      echo("<br>");

      foreach($_COOKIE as $key => $value) {
        echo("$key - $value");
        echo("<br>");
      }

    }

  }

  public function autEntrance() {
    // if(isset($_COOKIE) && !empty($_COOKIE)) {
    //   header("location: personalPage.php");
    // }

  }


  public function logOut() {
    if(isset($_POST['btnlogout'])) {
      setcookie($_SESSION['login'], $_SESSION['password'], time() - 86400, '/');
      session_destroy();
      header("location: index.php");
    }
  }

  


}