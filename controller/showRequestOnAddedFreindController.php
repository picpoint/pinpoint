<?php



class ShowRequestOnAddedFreindC {                                 // класс контроллер показывающий запросы на добавление в друзья в новостях
  public $resFreindship;

  
  public function getLogin() {                                    // метод получения логина текущего пользователя
    $loginUser = $_SESSION['login'];    

    $checkAddFrdn = new CheckForAddingToFreindsM();               // вызываем модель, которая возвращает данные по пользователям, которые подали заявку в друзья текущему пользователю
    $this->resFreindship = $checkAddFrdn -> checkFreinds($loginUser); // вызываем метод, который возвращает результат всех поданных заявок
  }

  
  public function showPeopleToFreindship() {
    $allReqToFreinds = $this->resFreindship;
    
    foreach($allReqToFreinds as $allFrnds) {
      foreach($allFrnds as $key => $value) {


          echo("$key - $value");
          echo("<br>");
        

      }
    }
  }





}