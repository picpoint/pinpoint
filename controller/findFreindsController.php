<?php



class FindFreindsC {

  public function findAllFreinds() {
    $arrParamsPeople = [];
    
    if(isset($_POST['searchbtn'])) {
      if(!empty($_POST['searchlastname'])) {
        $arrParamsPeople['searchlastname'] = trim($_POST['searchlastname']);
      } else if(!empty($_POST['searchfirstname'])) {
        $arrParamsPeople['searchfirstname'] = trim($_POST['searchfirstname']);
      } elseif(!empty($_POST['searchlogin'])) {
        $arrParamsPeople['searchlogin'] = $_POST['searchlogin'];
      } else {
        echo("Ни одно поле не заполнено");
        return;
      }

      $resFindFreind = new FindFreindsM();
      return $resFindFreind -> findFreindsMeth($arrParamsPeople);
    }


  }


  


}