<?php



class GetDataPinContentC {                                    // контроллер для получения данных о пине(контент конкретного пина) и передаче тх в js для вывода на карте
  

  public function getDataUserPins() {                         // метод, получение данных 
    $login = $_SESSION['login'];                              // получаем логин пользователя
    $arrDt = [];                                              // объявляем массив для записи данных для пинов
    
    $dataPins = new GetDataFromDBPinContentM();               // вызываем модель которая дёргает данные пинов из бд
    $res = $dataPins -> getDataPinContent($login);            // передаём в метод логин, для получения пинов конкретного пользователя
    
    foreach($res as $rs) {                                    // перебираем получившийся результат как ключ-значение, для дальнейшей обработке в showBallons.js
      foreach($rs as $key => $value) {
        $arrDt[] = "$key - $value";
      }
    }
        
    return $arrDt;                                            // возвращаем результат

  }
  


}