<?php



class ShowRequestOnAddedFreindC {
  public $resFreindship;

  
  public function getLogin() {
    $loginUser = $_SESSION['login'];    

    $checkAddFrdn = new CheckForAddingToFreindsM();
    $this->resFreindship = $checkAddFrdn -> checkFreinds($loginUser);
  }

  
  public function showPeopleToFreindship() {
    print_r($this->resFreindship);
  }





}