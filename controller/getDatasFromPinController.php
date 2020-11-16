<?php



class GetDatasFromPinC {
  public $pathToUsersFolder = __DIR__ . '/../usersFolders/';

  public function addPins() {
    if(isset($_POST['addpinbtn'])) {
      $fullArrData = [];
      $lat = $_POST['latitude'];
      $lon = $_POST['longitude'];

      if($_FILES['upfile']['size'] != 0) {                
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
      

      // if($_POST['comments'] != 0) {
      //   echo("<br>");
      //   // var_dump($_POST['comments']);
      // } else {
      //   echo("<br>");
      //   // var_dump($_POST['comments']);
      // }      

      $fullArrData[] = $_SESSION['login'];
      $fullArrData[] = $pathToFolder.'/pict/'. $_FILES['upfile']['name'];
      $fullArrData[] = $_POST['comments'];
      $fullArrData[] = $lat;
      $fullArrData[] = $lon;

      $writeDataToDB = new WriteDataPinToDBM();
      $writeDataToDB -> writePin($fullArrData);
      // print_r($fullArrData);
      
      // echo($_SESSION['login']);
      // echo("<br>");
      // echo($pathToFolder.'/pict/'. $_FILES['upfile']['name']);
      // echo("<br>");
      // echo($_POST['comments']);
      // echo("<br>");
      // echo($lat);
      // echo("<br>");
      // echo($lon);


    }


  }
  

}