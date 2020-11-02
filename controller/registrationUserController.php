<?php 


class RegistrationUserC {
  
  public function getDatasUser() {
    if(isset($_POST['regbtn']) && !empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && $_POST['reglogin'] && !empty($_POST['regpass'])) {
      echo($_POST['regfirstname']);
      echo("<br>");
      echo($_POST['reglastname']);
      echo("<br>");
      echo($_POST['reglogin']);
      echo("<br>");
      echo($_POST['regpass']);
    }
  }
  


}