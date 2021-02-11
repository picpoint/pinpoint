const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы
const arrdt = document.querySelector('.pp__arrdt');
var myMap;                                                                                // инициализация переменной для использования в ф-ии init
let arrCurrentCoords = [];


window.addEventListener("load", (e) => {
  
  function locatePosition() {
    return new Promise((resolve, reject) => {
      navigator.geolocation.getCurrentPosition((position) => {      
        let lat = (position.coords.latitude).toFixed(6);
        let lng = (position.coords.longitude).toFixed(6);              
        arrCurrentCoords.push(+lat);
        arrCurrentCoords.push(+lng);
        // console.log(arrCurrentCoords);
        window.curCoords = arrCurrentCoords;
        // return arrCurrentCoords;
        // ymaps.ready(init);
        resolve(arrCurrentCoords);
      }, error => {
        console.error("Местоположение не определено ...");
      });
    });
    
  }



  function includeShowBalloons(url) {                                                       // ф-ия для подключения файла showBallons, который отображает метки на карте
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
  }
  
  
  
  
  function init (coordinates) {                                                                      // ф-ия инициализации
    myMap = new ymaps.Map("map", {
      center: coordinates || [55.7538, 37.6201],
      // center: [55.7538, 37.6201],                                                      // координаты места загрузки и показа карты
      zoom: 11                                                                            // масштаб отображения
    }, {
      searchControlProvider: 'yandex#search'                                              // поисковая система отображения карты - яндекс
    });
  
    // console.log(curentCoords);
    setTimeout(() => {
      console.log(coordinates);
    }, 4000);
  
    myMap.events.add('contextmenu', function (e) {                                        // добавляем событие контекста на карту
      var coords = e.get('coords');                                                       // получаем координаты объекта при событии on.contextmenu
      lat.value = coords[0].toPrecision(8);                                               // координаты широты
      lon.value = coords[1].toPrecision(8);                                               // координаты долготы     
    });      
    
    includeShowBalloons("js/showBallons.js");                                             // вызываем ф-ию includeShowBalloons внутри ф-ии карты  
      
  }
  


  locatePosition()
    .then((result) => {
      console.log(result);
      setTimeout(() => {
        ymaps.ready(init);
      }, 4500);
    }, () => {
      ymaps.ready(init);
    });




});






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