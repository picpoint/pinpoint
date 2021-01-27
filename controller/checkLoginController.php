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

    if(isset($_SESSION['login'])) {
      echo("<br>");
      echo("<br>");
      
      $logPass = new GetLogPassUsersM();
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