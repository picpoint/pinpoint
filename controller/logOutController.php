<?php



class LogoutUserC {

  public function logoutUsr() {
    if(isset($_POST['btnlogout'])) {
      session_destroy();
      setcookie('PHPSESSID', session_start(), time() - 86400, '/');
      setcookie($_SESSION['login'], $_SESSION['password'], time() - 86400, '/');
      header("location: index.php");
    }
  }
  
}




