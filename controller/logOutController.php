<?php



class LogoutUserC {

  public function logoutUsr() {
    if(isset($_POST['btnlogout'])) {
      // setcookie('PHPSESSID', session_start(), time() - 86400, '/');
      // header("location: ../dist/index.php");
    }
  }
  
}




