<?php



class AuthorizationUserM {  

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=ppdb', 'rmtar', '2203');
  }


  public function authUser(array $arrAuthUser) {
    $arrLog = [];
    $arrPass = [];

    $login = $arrAuthUser[0];
    $password = $arrAuthUser[1];
    
    $sth = $this->cnnct -> prepare("SELECT login, password FROM users WHERE login = '$login' ");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);


    if(count($res) > 0) {
      
      foreach($res as $rs) {
        foreach($rs as $key => $value) {
          if($key == 'login') {
            $arrLog[] = $value;
          } elseif($key == 'password') {
            $arrPass[] = $value;
          }
        }
      }      

      $arrUsr = array_combine($arrLog, $arrPass);

      foreach($arrUsr as $key => $value) {
        if($login == $key && $password == password_verify($password, $value)) {
          echo("Авторизация");
          $_SESSION['login'] = $login;
          header('location: personalPage.php');
        } else {
          echo("Логин или пароль неправильный");
        }
      }
            

    }

    
    
    

  }



}