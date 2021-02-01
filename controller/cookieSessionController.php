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
      // print_r($_COOKIE);

      foreach($_COOKIE as $key => $value) {
        echo("$key - $value");
        echo("<br>");
        if($key != 'PHPSESSID') {
          
        }
      }

    }

  }

  public function autEntrance() {
    // if(isset($_COOKIE)) {
    //   echo("<br>");
    //   echo("<br>");
    //   print_r($_COOKIE);
    // }

  }

  


}