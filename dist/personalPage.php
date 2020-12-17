<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal page</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=0735696f-0a98-472f-9ffc-143c71d3f506" type="text/javascript"></script>    
</head>
<body>
<?php
  require_once "../controller/getDatasFromPinController.php";
  require_once "../model/writeDataPinToDBModel.php";  
  require_once "../controller/getDataPinContentController.php";
  require_once "../model/getDataFromDBPinContentModel.php";
?>
  
  <section class="pp">
    <div class="pp__wrp" id="map">
      
      <div class="pp__sendfile">        
        <div class="pp__hdrsf">
          <div class="pp__hdricon">
            <img src="pict/pinWhite.png" alt="iconpin">
          </div>
          <div class="pp__hdrplace">
            <span>Россия, Москва, ул. Ленина 52</span>
          </div>
          <div class="pp__hdrclose">
            <span class="closeform">+</span>
          </div>
        </div>

        <form method="post" enctype="multipart/form-data" class="pp__uploadform">
          <div class="pp__uploadfiles">
            <div class="pp__textblock">
              <span>Загрузить файл</span>            
            </div>
            <div class="pp__uploadblock">
              <div class="pp__uploadfields">
                <input type="file" name="upfile" multiple>
              </div>
              <div class="pp__addfiles">
                <button>Добавить поле</button>
              </div>
            </div>
          </div>

          <div class="pp__addcomments">
            <div class="pp__textblock">
              <span>Добавить комментарии</span>            
            </div>
            <div class="pp__commentsblock">
              <textarea name="comments"></textarea>
            </div>
            <input type="text" class="pp__latitude" name="latitude"></input>
            <input type="text" class="pp__longitude" name="longitude"></input>
          </div>

          <div class="pp__addcontent">
            <button type="submit" name="addpinbtn">Добавить метку</button>
          </div>
        </form>
        <?php
          $getdatas = new GetDatasFromPinC();
          $getdatas -> addPins();
        ?>
      </div>

      
      
      <div class="pp__profile">
        <div class="pp__logoblock">
          <img src="pict/profileimg.png" alt="profile">
        </div>
        <div class="pp__nameblock">
          <span>
            <?php
              echo($_SESSION['login']);
            ?>
          </span>
        </div>
        <div class="pp__placeblock">
          <span>г. Санкт-Петербург пер. Косыгина 23</span>
        </div>
        <div class="pp__detailblock">
          <a href="#">Показать подробную информацию</a>
        </div>        
      </div>

      <div class="pp__topmenu">
        <div class="pp__basemenublock">
          <div class="pp__messageblock">
            <a href="messages.php">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <span>сообщения</span>
            </a>              
          </div>

          <div class="pp__pinsblock">
            <a href="#">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>метки</span>
            </a>              
          </div>

          <div class="pp__freindsblock">
            <a href="freinds.php">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span>друзья</span>
            </a>              
          </div>

          <div class="pp__newsblock">
            <a href="news.php">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <span>новости</span>
            </a>              
          </div>
          
          <div class="pp__waysblock">
            <a href="#">
              <i class="fa fa-globe" aria-hidden="true"></i>
              <span>маршруты</span>
            </a>              
          </div>

          <div class="pp__albumsblock">
            <a href="#">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
              <span>альбомы</span>
            </a>              
          </div>

          <div class="pp__findblock">
            <a href="#">
              <i class="fa fa-search" aria-hidden="true"></i>
              <span>поиск</span>
            </a>              
          </div>

          <div class="pp__settingsblock">
            <a href="#">
              <i class="fa fa-cogs" aria-hidden="true"></i>
              <span>настройка</span>
            </a>              
          </div>
        </div>

        <div class="pp__exitblock">
          <a href="index.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span>выход</span>
          </a>              
        </div>

      </div>

      
      <div class="pp__bottomblock">        
      </div>


    </div>
    
    <input class="pp__arrdt" data-arrpins="
      <?php 
        $resdt = new GetDataPinContentC(); 
        print_r($resdt -> getDataUserPins());
      ?>
    ">
  </section>    
    

<script src="js/contextMenuOnMap.js"></script>
<script src="js/mapbasics.js" type="text/javascript"></script>


</body>
</html>