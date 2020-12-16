<?php



class ShowMyFreindsC {

  public function showAllFreinds() {
    $login = $_SESSION['login'];
    echo($login);
  }

}