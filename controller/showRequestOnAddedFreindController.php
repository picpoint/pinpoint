<?php



class ShowRequestOnAddedFreindC {

  public function getLogin() {
    $loginUser = $_SESSION['login'];    

    $checkAddFrdn = new CheckForAddingToFreindsM();
    print_r($checkAddFrdn -> checkFreinds($loginUser));
  }




}