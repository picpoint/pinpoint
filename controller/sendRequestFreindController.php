<?php



class sendRequestFreindC {

  public function getDatasAboutAddFreind() {
     $arrDatas = [];
    
    if(isset($_POST['sendReqbtn'])) {
      print_r($_POST['userID']);
      print_r($_SESSION['login']);
      
      $this->arrDatas['userID'] = $_POST['userID'];
      $this->arrDatas['mylogin'] = $_SESSION['login'];

      $addFreind = new AddRequestFreindM();
      $addFreind -> freindsRequest($this->arrDatas);
      // header('location: freinds.php');
    }
  }



}