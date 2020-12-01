<?php



class FindFreindsM {
  public $searchfirstname;
  public $searchlastname;
  public $searchlogin;


  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function findFreindsMeth(array $arrParamsPeople) {  
    foreach($arrParamsPeople as $key => $value) {
      if($key == 'searchlastname' || $key == 'searchfirstname') {

        if($key == 'searchfirstname') {
          $this->searchfirstname = $value;
        }
        
        if($key == 'searchlastname') {
          $this->searchlastname = $value;  
        }        
    
        $sth = $this->cnnct -> prepare("SELECT firstname, lastname, login FROM users WHERE firstname = '$this->searchfirstname' OR lastname = '$this->searchlastname' ");
        $sth -> execute(); 
        $findFreind = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $findFreind;
      } else if($key == 'searchlogin') {
        $this->searchlogin = $value;

        $sth = $this->cnnct -> prepare("SELECT firstname, lastname, login FROM users WHERE login = '$this->searchlogin' ");
        $sth -> execute(); 
        $findFreind = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $findFreind;
      } else {
        return "Нет пользователей с такими параметрами ...";
      }
    }

  }


  

}