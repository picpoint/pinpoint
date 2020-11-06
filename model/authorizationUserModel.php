<?php



class AuthorizationUserM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function authUser(array $arrAuthUser) {
    $login = $arrAuthUser[0];
    $password = $arrAuthUser[1];
    
    $sth = $this->cnnct -> prepare("SELECT login, password FROM users WHERE login = '$login' ");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);

    // print_r($res);

    if(count($res) > 0) {
      
      foreach($res as $rs) {
        foreach($rs as $key => $value) {
          echo("$key - $value");
          echo("<br>");
        }        
      }
      

    }

    
    
    

  }



}