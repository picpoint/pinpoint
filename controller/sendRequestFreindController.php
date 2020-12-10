<?php



class sendRequestFreindC {                                      // класс контроллер передачи данных о пользователе, которого добавляет в друзья пользователь

  public function getDatasAboutAddFreind() {                    // метод, получить данные о пользователе у которого была нажата кнопка "отправить заявку"
    if(isset($_POST['sendReqbtn'])) {                           // если была нажата кнопка "Отправить заявку"
      $arrDatas = [];                                           // инициализируем пустой массив для сбора данных
      $arrDatas['freindsLogin'] = $_POST['freindsLogin'];       // записываем в массив логин пользователя, которого добавляем в друзья
      $arrDatas['mylogin'] = $_SESSION['login'];                // записываем в массив свой логин
      
      $addFreind = new AddRequestFreindM();                     // вызываем метод для записи в бд
      $addFreind -> freindsRequest($arrDatas);                  // вызываем метод и передаём массив с данными
    }
  }



}