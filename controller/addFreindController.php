<?php



class AddFreindC {                                                    // класс контроллер

  public function addFreindToFreinship() {
    if(isset($_POST['btnyes'])) {
      $id_freinds = $_POST['sendyes'];
      $resAddFrnds = new AddFreindM();
      $resAddFrnds -> writeFreinshipToDB($id_freinds);
      header('location:news.php');
    }

    if(isset($_POST['btnno'])) {
      $id_freinds = $_POST['sendyes'];
      $resAddFrnds = new AddFreindM();
      $resAddFrnds -> writeNoFreinshipToDB($id_freinds);
      header('location:news.php');
    }

  }


}