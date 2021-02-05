const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы
const arrdt = document.querySelector('.pp__arrdt');

let res = new DetermineLocatePosition();
let curentCoords = res.locatePosition();

var myMap;                                                                                // инициализация переменной для использования в ф-ии init
ymaps.ready(init);                                                                        // инициализируется карта



function includeShowBalloons(url) {                                                       // ф-ия для подключения файла showBallons, который отображает метки на карте
  var script = document.createElement('script');
  script.src = url;
  document.getElementsByTagName('head')[0].appendChild(script);
}




function init () {                                                                      // ф-ия инициализации
  myMap = new ymaps.Map("map", {
    center: curentCoords,
    // center: [45.0320, 41.9419],                                                      // координаты места загрузки и показа карты
    zoom: 11                                                                            // масштаб отображения
  }, {
    searchControlProvider: 'yandex#search'                                              // поисковая система отображения карты - яндекс
  });

  console.log(res.locatePosition());

  myMap.events.add('contextmenu', function (e) {                                        // добавляем событие контекста на карту
    var coords = e.get('coords');                                                       // получаем координаты объекта при событии on.contextmenu
    lat.value = coords[0].toPrecision(8);                                               // координаты широты
    lon.value = coords[1].toPrecision(8);                                               // координаты долготы     
  });      
  
  includeShowBalloons("js/showBallons.js");                                             // вызываем ф-ию includeShowBalloons внутри ф-ии карты
    
}



