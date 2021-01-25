<?php



class LogoutUserC {

  public function logoutUsr() {
    if(isset($_POST['btnlogout'])) {
      setcookie($_SESSION['login'], $_SESSION['password'], time() - 86400 * 7, '/');
      session_destroy();
      // session_unset();
      header('Location: index.php');
    }
  }
  
}




