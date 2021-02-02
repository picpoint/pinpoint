<?php




class coockiesSessionsC {
    
  public function autEntrance() {
    if(isset($_COOKIE['ppusr']) && isset($_COOKIE['pppsw'])) {
      $allUsr = new GetLogPassUsersM();
      $res = $allUsr -> getAllUsr();

      foreach($res as $rs) {
        if($_COOKIE['ppusr'] === $rs['login'] && $_COOKIE['pppsw'] === $rs['password']) {
          header('location: personalPage.php');
        }

      }

    } 

  }

  
  public function checkCoockie() {
    if(!isset($_COOKIE['ppusr']) && !isset($_COOKIE['pppsw'])) {
      header('location: index.php');
    }

  }

  
  public function logOut() {
    if(isset($_POST['btnlogout'])) {
      setcookie('ppusr', $_SESSION['login'], time() - 86400, '/');
      setcookie('pppsw', $_SESSION['password'], time() - 86400, '/');
      session_destroy();
      header("location: index.php");
    }
  }  


}