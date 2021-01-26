<?php



class LogoutUserC {

  public function logoutUsr() {
    if(isset($_POST['btnlogout'])) {
      setcookie($_SESSION['login'], $_SESSION['password'], time() - 86400, '/');      
      session_destroy();      
      session_unset();
      header("location: ../dist/index.php");
    }
  }
  
}




