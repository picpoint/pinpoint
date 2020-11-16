<?php



class GetDatasFromPinC {                                                                      // класс - модель получения данных из "формы создания пина"
  public $pathToUsersFolder = __DIR__ . '/../usersFolders/';                                  // путь к директории где лежать пользовательские папки с файлами

  public function addPins() {                                                                 // метод добавления контента в папки и передача массива с данными в модель для записис в бд
    if(isset($_POST['addpinbtn'])) {                                                          // если нажата кнопка "добавить метку"
      $fullArrData = [];                                                                      // создаём пустой массив для сбора всеё информации о метке
      $lat = $_POST['latitude'];                                                              // получаем значение долготы
      $lon = $_POST['longitude'];                                                             // получаем значение широты

      if($_FILES['upfile']['size'] != 0) {                                                    // если загружаемый файл не пустой
        $pathToFolder = $this->pathToUsersFolder . $_SESSION['login'];                        // в переменную $pathToFolder записываем значение до папки конкретного пользователя

        if(!file_exists($pathToFolder)) {                                                     // если папки с именем пользователя нет
          mkdir($pathToFolder, 0777);                                                         // создаём её
          mkdir($pathToFolder.'/pict', 0777);                                                 // создаём внутри папки для картинок и видео
          mkdir($pathToFolder.'/video', 0777);
          if($_FILES['upfile']['type'] == 'image/jpeg' || $_FILES['upfile']['type'] == 'image/jpg' || $_FILES['upfile']['type'] == 'image/png') { // если тип загружаемого файла == картинка
            move_uploaded_file($_FILES['upfile']['tmp_name'], $pathToFolder.'/pict/'. $_FILES['upfile']['name']); // перемещаем её с тем же именем в папку /pict/
          }
        } else {
          if($_FILES['upfile']['type'] == 'image/jpeg' || $_FILES['upfile']['type'] == 'image/jpg' || $_FILES['upfile']['type'] == 'image/png') { // иначе проверяем тип файла
            move_uploaded_file($_FILES['upfile']['tmp_name'], $pathToFolder.'/pict/'. $_FILES['upfile']['name']); // загружаем в папку /pict/
          }
        }

      }      

      $fullArrData[] = $_SESSION['login'];                                                     // формируем массив с данными о метке, логин, путь до файла, комменты, широту, долготу
      $fullArrData[] = $pathToFolder.'/pict/'. $_FILES['upfile']['name'];
      $fullArrData[] = $_POST['comments'];
      $fullArrData[] = $lat;
      $fullArrData[] = $lon;

      $writeDataToDB = new WriteDataPinToDBM();                                               // вызываем класс - модель для записи данных в бд
      $writeDataToDB -> writePin($fullArrData);                                               // передаём массив методу

    }


  }
  

}