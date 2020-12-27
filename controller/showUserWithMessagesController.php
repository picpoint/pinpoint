<?php



class ShowUserWithMsgC {

  public function showMsg() {
    $login = $_SESSION['login'];

    $resAllMessages = new ShowUserWithMessagesM();
    $resmsg = $resAllMessages -> readUsersMessages($login);
    
    foreach($resmsg as $rsmsg) {
      // print_r($rsmsg);
      // echo("<br>");
      // echo("<br>");
      // echo("<br>");

      foreach($rsmsg as $key => $value) {
        echo("$key - $value");
        echo("<br>");        
      }

    }
  }



}