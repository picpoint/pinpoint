<?php



class ShowRequestOnAddedFreindC {

  public function getLogin() {
    $loginUser = $_SESSION['login'];
    // echo($loginUser);

    $checkAddFrdn = new CheckForAddingToFreindsM();
    print_r($checkAddFrdn -> checkFreinds($loginUser));
  }




}