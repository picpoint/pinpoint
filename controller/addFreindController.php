<?php



class AddFreindC {                                                    // класс контроллер добавление в друзья

  public function addFreindToFreinship() {                            // метод записи в бд при нажатии кнопки "добавить"
    if(isset($_POST['btnyes'])) {                                     // если нажата кнопка "добавить"
      $id_freinds = $_POST['sendyes'];                                // получаем значение id_freinds из скрытого инпута - name="sendyes"
      $resAddFrnds = new AddFreindM();                                // вызываем метод и записываем в бд результат согласия
      $resAddFrnds -> writeFreinshipToDB($id_freinds);                
      header('location:news.php');
    }

    if(isset($_POST['btnno'])) {                                      // если нажата кнопка "отклонить"
      $id_freinds = $_POST['sendyes'];                                // передаём id_freinds
      $resAddFrnds = new AddFreindM();                                // вызываем класс модель
      $resAddFrnds -> writeNoFreinshipToDB($id_freinds);              // передаём данные для записи в бд
      header('location:news.php');
    }

  }


}