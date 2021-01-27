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

    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
      echo("<br>");
      echo("<br>");
      
      $logPass = new GetLogPassUsersM();
      $res = $logPass -> getAllUsr();

      foreach($res as $rs) {
        print_r($rs);
        echo("<br>");
      }

    } else {
      header("location: index.php");
    }

  }



}