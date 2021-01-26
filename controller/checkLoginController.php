<?php




class CheckLoginC {

  public function checkUserLogin() {
    print_r($_COOKIE);
    echo("<br>");
    print_r($_SESSION);

    if(isset($_SESSION['login'])) {
      echo("<br>");
      echo("<br>");
      
      $logPass = new GetAllUsersM();
      $res = $logPass -> getAllUsr();
      // print_r($res);

      foreach($res as $rs) {
        print_r($rs);
        echo("<br>");
        
        // if($_SESSION['login'] == $rs['login']) {
        //   echo("equal");
        //   echo("<br>");
        // }


      }


    }

  }



}