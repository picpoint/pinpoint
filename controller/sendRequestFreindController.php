<?php



class sendRequestFreindC {

  public function getDatasAboutAddFreind() {    
    if(isset($_POST['sendReqbtn'])) {
      $arrDatas = [];      
      $arrDatas['freindsLogin'] = $_POST['freindsLogin'];
      $arrDatas['mylogin'] = $_SESSION['login'];
      
      $addFreind = new AddRequestFreindM();
      $addFreind -> freindsRequest($arrDatas);      
    }
  }



}