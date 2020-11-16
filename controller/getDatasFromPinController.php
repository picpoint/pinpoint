<?php



class GetDatasFromPinC {
  public $pathToUsersFolder = __DIR__ . '/../usersFolders/';
  

  public function addPins() {
    if(isset($_POST['addpinbtn'])) {      

      if($_FILES['upfile']['size'] != 0) {
        // var_dump($_FILES['upfile']);        
        echo("<br>");
        $pathToFolder = $this->pathToUsersFolder . $_SESSION['login'];                

        if(!file_exists($pathToFolder)) {
          mkdir($pathToFolder, 0777);
          mkdir($pathToFolder.'/pict', 0777);
          mkdir($pathToFolder.'/video', 0777);          
          if($_FILES['upfile']['type'] == 'image/jpeg' || $_FILES['upfile']['type'] == 'image/jpg' || $_FILES['upfile']['type'] == 'image/png') {
            move_uploaded_file($_FILES['upfile']['tmp_name'], $pathToFolder.'/pict/'. $_FILES['upfile']['name']);
          }
        } else {
          if($_FILES['upfile']['type'] == 'image/jpeg' || $_FILES['upfile']['type'] == 'image/jpg' || $_FILES['upfile']['type'] == 'image/png') {
            move_uploaded_file($_FILES['upfile']['tmp_name'], $pathToFolder.'/pict/'. $_FILES['upfile']['name']);
          }
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