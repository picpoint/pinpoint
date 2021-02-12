const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы
const arrdt = document.querySelector('.pp__arrdt');
var myMap;                                                                                // инициализация переменной для использования в ф-ии init
let arrCurrentCoords = [];                                                                // пустой массив для записи туда координат геолокации


  
  function locatePosition() {                                                             // ф-ия определения текущей позиции
    return new Promise((resolve, reject) => {                                             // возвращаем промис
      navigator.geolocation.getCurrentPosition((position) => {                            // получаем позицию геолокации
        let lat = (position.coords.latitude).toFixed(6);                                  // получение широты из позиции
        let lng = (position.coords.longitude).toFixed(6);                                 // получение долготы
        arrCurrentCoords.push(+lat);                                                      // добавляем в массив широту
        arrCurrentCoords.push(+lng);                                                      // добавляем в массив долготу
        // console.log(arrCurrentCoords);
        window.curCoords = arrCurrentCoords;                                              // в window.Storage записываем массив
        // return arrCurrentCoords;
        // ymaps.ready(init);
        resolve();                                                                        // резолвим промис
      }, error => {
        console.error("Местоположение не определено ...");                                // в случае ошибки инициализируем карту с координатами по умолчанию
        ymaps.ready(init);
      });
    });
    
  }



  function includeShowBalloons(url) {                                                       // ф-ия для подключения файла showBallons, который отображает метки на карте
    var script = document.createElement('script');                                          // создаём тег скрипт
    script.src = url;                                                                       // в путь записываем пришедший урл
    document.getElementsByTagName('head')[0].appendChild(script);                           // находим head, добавляем скрипт туда
  }
  
  
  
  
  function init () {                                                                      // ф-ия инициализации карты
    myMap = new ymaps.Map("map", {
      center: window.curCoords || [55.7538, 37.6201],                                     // координаты места загрузки и показа карты(либо то что определилось, либо по умолчанию москва)
      // center: [55.7538, 37.6201],                                                      // координаты места загрузки и показа карты
      zoom: 13                                                                            // масштаб отображения
    }, {
      searchControlProvider: 'yandex#search'                                              // поисковая система отображения карты - яндекс
    });

    myMap.events.add('contextmenu', function (e) {                                        // добавляем событие контекста на карту
      var coords = e.get('coords');                                                       // получаем координаты объекта при событии on.contextmenu
      lat.value = coords[0].toPrecision(8);                                               // координаты широты
      lon.value = coords[1].toPrecision(8);                                               // координаты долготы     
    });      
    
    includeShowBalloons("js/showBallons.js");                                             // вызываем ф-ию includeShowBalloons внутри ф-ии карты  
      
  }
  


  locatePosition()                                                                        // вызываем ф-ию геолокации
    .then(() => {                                                                         // вешаем иниализацию карты
      ymaps.ready(init);      
    }, () => {                                                                            // иначе при ошибке, всё равно инициализируем карту, но уже с координатами по умолчанию будет загрузка
      ymaps.ready(init);
    });





















// СТАРЫЙ РАБОЧИЙ КОД
/* 

const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы
const arrdt = document.querySelector('.pp__arrdt');


var myMap;                                                                                // инициализация переменной для использования в ф-ии init
ymaps.ready(init);                                                                        // инициализируется карта



function includeShowBalloons(url) {                                                       // ф-ия для подключения файла showBallons, который отображает метки на карте
  var script = document.createElement('script');
  script.src = url;
  document.getElementsByTagName('head')[0].appendChild(script);
}




function init () {                                                                      // ф-ия инициализации
  myMap = new ymaps.Map("map", {
    center: [45.0320, 41.9419],
    // center: [45.0320, 41.9419],                                                      // координаты места загрузки и показа карты
    zoom: 12                                                                            // масштаб отображения
  }, {
    searchControlProvider: 'yandex#search'                                              // поисковая система отображения карты - яндекс
  });

  myMap.events.add('contextmenu', function (e) {                                        // добавляем событие контекста на карту
    var coords = e.get('coords');                                                       // получаем координаты объекта при событии on.contextmenu
    lat.value = coords[0].toPrecision(8);                                               // координаты широты
    lon.value = coords[1].toPrecision(8);                                               // координаты долготы 
  });      
  
  includeShowBalloons("js/showBallons.js");                                             // вызываем ф-ию includeShowBalloons внутри ф-ии карты
    
}

*/