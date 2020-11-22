<?php



class GetDataPinContentC {
  

  public function getDataUserPins() {
    $login = $_SESSION['login'];
    $arrDt = [];
    
    $dataPins = new GetDataFromDBPinContentM();
    $res = $dataPins -> getDataPinContent($login);    
    
    foreach($res as $rs) {
      foreach($rs as $key => $value) {        
        $arrDt[] = $value;
      }
    }

    // return json_encode($arrDt, JSON_UNESCAPED_UNICODE);
    return $arrDt;

  }
  


}