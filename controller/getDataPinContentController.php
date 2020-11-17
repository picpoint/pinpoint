<?php



class GetDataPinContentC {
  

  public function getDataUserPins() {
    $login = $_SESSION['login'];
    
    $dataPins = new GetDataFromDBPinContentM();
    $res = $dataPins -> getDataPinContent($login);    
    
    foreach($res as $rs) {
      foreach($rs as $key => $value) {
        echo("$key - $value");
        echo("<br>");
      }
    }

  }
  


}