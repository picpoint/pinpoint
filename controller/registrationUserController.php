<?php 



class RegistrationUserC {
  
  public function getDatasUser() {
    $arrRegUser = [];
    
    if(isset($_POST['regbtn'])) {
      if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpass'])) {
        $arrRegUser[] = trim($_POST['regfirstname']);
        $arrRegUser[] = trim($_POST['reglastname']);
        $arrRegUser[] = trim($_POST['reglogin']);
        $arrRegUser[] = trim(password_hash($_POST['regpass'], PASSWORD_DEFAULT));

        $regUser = new RegistrationUserM();
        $regUser -> regUserToDb($arrRegUser);
        
      } else {
        echo("Не все поля заполнены");
      }

    }
    
       
  }
  


}