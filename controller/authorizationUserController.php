<?php



class AuthorizationUserC {
  

  public function getDatasUserAuth() {
    $arrAuthUser = [];

    if(isset($_POST['authbth'])) {
      if(!empty($_POST['authlogin']) && !empty($_POST['authpass'])) {
        $arrAuthUser[] = trim($_POST['authlogin']);
        $arrAuthUser[] = trim($_POST['authpass']);
        
        $authUsr = new AuthorizationUserM();
        $arrAuthUser -> authUser($arrAuthUser);
      }
    }
    

  }




}