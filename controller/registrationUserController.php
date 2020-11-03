<?php 



class RegistrationUserC {
  
  public function getDatasUser() {
    $arrRegUser = [];
    
    if(isset($_POST['regbtn'])) {
      if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpass'])) {
        $arrRegUser[] = $_POST['regfirstname'];
        $arrRegUser[] = $_POST['reglastname'];
        $arrRegUser[] = $_POST['reglogin'];
        $arrRegUser[] = $_POST['regpass'];

        print_r($arrRegUser);
        
      } else {
        echo("Не все поля заполнены");
      }

    }   
  }
  


}