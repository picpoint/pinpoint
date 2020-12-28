<?php



class ShowUserWithMsgC {

  public function showMsg() {
    $login = $_SESSION['login'];
    $arrLogins = [];

    $resAllMessages = new ReadUserWithMessagesM();
    $resmsg = $resAllMessages -> readUsersMessages($login);
    
    foreach($resmsg as $rsmsg) {
      print_r($rsmsg);
      echo("<br>");
      echo("<br>");
      echo("<br>");

      foreach($rsmsg as $key => $value) {
        // echo("$key - $value");
        // echo("<br>");        

        // if($key == 'id_tomsg') {
        //   $arrLogins[] = $value;
        // }

      }

    }

    print_r($arrLogins);



  }



}