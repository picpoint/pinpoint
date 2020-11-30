<?php



class FindFreindsC {

  public function findAllFreinds() {
    $arrParamsPeople = [];
    
    if(isset($_POST['searchbtn'])) {
      if(!empty($_POST['searchlastname']) || !empty($_POST['searchfirstname'])) {
        $arrParamsPeople['searchlastname'] = $_POST['searchlastname'];
        $arrParamsPeople['searchfirstname'] = $_POST['searchfirstname'];
      } elseif(!empty($_POST['searchlogin'])) {
        $arrParamsPeople['searchlogin'] = $_POST['searchlogin'];
      } else {
        echo("Ни одно поле не заполнено");
      }

      echo("<br>");
      print_r($arrParamsPeople);
      
    }

  }



}