<?php



class ReadUserMsgC {

  public function showMsg() {
    $login = $_SESSION['login'];

    $resAllMessages = new ReadUserMessagesM();
    $resmsg = $resAllMessages -> readUsersMessages($login);
    
    foreach($resmsg as $rsmsg) {
      print_r($rsmsg);
      echo("<br>");
      echo("<br>");
      echo("<br>");
    }
  }



}