<?php



class sendRequestFreindC {

  public function getDatasAboutAddFreind() {
    if(isset($_POST['sendReqbtn'])) {
      print_r($_POST['sendReqbtn']);
      header('location: freinds.php');
    }
  }



}