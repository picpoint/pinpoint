<?php



class sendRequestFreindC {

  public function getDatasAboutAddFreind() {    
    if(isset($_POST['sendReqbtn'])) {
      $arrDatas = [];
      // print_r($_POST['userID']);
      // print_r($_SESSION['login']);
      
      $arrDatas['freindsLogin'] = $_POST['freindsLogin'];
      $arrDatas['mylogin'] = $_SESSION['login'];

      // print_r($arrDatas);

      $addFreind = new AddRequestFreindM();
      $addFreind -> freindsRequest($arrDatas);
      // header('location: freinds.php');
    }
  }



}