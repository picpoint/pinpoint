<?php



class GetDataPinContentC {
  

  public function getDataUserPins() {
    $login = $_SESSION['login'];
    $arrDt = [];
    
    $dataPins = new GetDataFromDBPinContentM();
    $res = $dataPins -> getDataPinContent($login);    
    
    foreach($res as $rs) {
      foreach($rs as $key => $value) {
        // echo("$key - $value");
        // echo("<br>");
        $arrDt[] = "$key - $value";
      }
    }
    
    
    return $arrDt;

    // return json_encode($arrDt, JSON_UNESCAPED_UNICODE);
    // return $res;

  }
  


}