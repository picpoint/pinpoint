<?php



class FindFreindsC {

  public function findAllFreinds() {
    $arrParamsPeople = [];
    
    if(isset($_POST['searchbtn'])) {
      if(!empty($_POST['searchlastname']) || !empty($_POST['searchfirstname'])) {
        $arrParamsPeople['searchlastname'] = $_POST['searchlastname'];
        $arrParamsPeople['searchfirstname'] = $_POST['searchfirstname'];
        
        $resFindFreind = new FindFreindsM();
        print_r($resFindFreind -> findFreindsMeth($arrParamsPeople));
      } elseif(!empty($_POST['searchlogin'])) {
        $arrParamsPeople['searchlogin'] = $_POST['searchlogin'];
        
        $resFindFreind = new FindFreindsM();
        print_r($resFindFreind -> findFreindsMeth($arrParamsPeople));
      } else {
        echo("Ни одно поле не заполнено");
      }



      // $resFindFreind = new FindFreindsM();
      // print_r($resFindFreind -> findFreindsMeth($arrParamsPeople));
    }


  }


  


}