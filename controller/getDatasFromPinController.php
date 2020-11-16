<?php



class GetDatasFromPinC {
  public $pathToUsersFolder = __DIR__ . '/../usersFolders/';
  

  public function addPins() {
    if(isset($_POST['addpinbtn'])) {
      // var_dump($_FILES['upfile']);
      // echo("<br>");
      // var_dump($_POST['comments']);

      if($_FILES['upfile']['size'] != 0) {
        var_dump($_FILES['upfile']);
        echo($this->pathToUsersFolder);
        echo("<br>");
        $pathToFolder = $this->pathToUsersFolder . $_SESSION['login'];        
        echo($pathToFolder);

        if(!file_exists($pathToFolder)) {
          mkdir($pathToFolder, 0777);
          mkdir($pathToFolder . '/pict', 0777);          
        } else {

        }


      }

      
      

      if($_POST['comments'] != 0) {
        echo("<br>");
        var_dump($_POST['comments']);
      } else {
        echo("<br>");
        var_dump($_POST['comments']);
      }


    }


  }
  

}