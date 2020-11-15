<?php



class GetDatasFromPinC {
  

  public function addPins() {
    if(isset($_POST['addpinbtn'])) {
      // var_dump($_FILES['upfile']);
      // echo("<br>");
      // var_dump($_POST['comments']);

      if($_FILES['upfile']['size'] != 0) {
        var_dump($_FILES['upfile']);
      }

      
      
      if($_POST['comments'] != 0) {
        var_dump($_POST['comments']);
      } else {
        var_dump($_POST['comments']);
      }


    }


  }
  

}