<?php



class LogoutUserC {

  public function logoutUsr() {
    if(isset($_POST['btnlogout'])) {
      session_destroy();
      setcookie($_SESSION['login'], $_SESSION['password'], time() - 86400 * 7, '/');      
      // session_unset();
      header('Location: index.php');
    }
  }
  
}




