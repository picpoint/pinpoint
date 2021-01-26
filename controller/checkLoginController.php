<?php




class CheckLoginC {

  public function checkUserLogin() {
    if(isset($_COOKIE)) {
      print_r($_COOKIE);
    } else {
      echo("not coockie ......");
    }
  }



}