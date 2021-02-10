const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы
const arrdt = document.querySelector('.pp__arrdt');
var myMap;                                                                                // инициализация переменной для использования в ф-ии init




function locatePosition() {
  let arrCurrentCoords = [];
  return new Promise((resolve, reject) => {
    window.addEventListener("load", (e) => {
      if (e.type == 'load') {
        navigator.geolocation.getCurrentPosition((position) => {      
          let lat = (position.coords.latitude).toFixed(6);
          let lng = (position.coords.longitude).toFixed(6);              
          arrCurrentCoords.push(+lat);
          arrCurrentCoords.push(+lng);
          // console.log(arrCurrentCoords);
          return arrCurrentCoords;
          // window.curCoords = arrCurrentCoords;
        }, error => {
          console.error("Местоположение не определено ...");
        });
      } else {    
        console.log('Страница по определённым проблемам не загрузилась до конца ... ');
      }
    });
    
    resolve(arrCurrentCoords);
  });

}


locatePosition()
  .then((result) => {
    // ymaps.ready(init(result));
    console.log(result);
  });







// ymaps.ready(init);                                                                        // инициализируется карта



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

  myMap.events.add('contextmenu', function (e) {                                        // добавляем событие контекста на карту
    var coords = e.get('coords');                                                       // получаем координаты объекта при событии on.contextmenu
    lat.value = coords[0].toPrecision(8);                                               // координаты широты
    lon.value = coords[1].toPrecision(8);                                               // координаты долготы     
  });      
  
  includeShowBalloons("js/showBallons.js");                                             // вызываем ф-ию includeShowBalloons внутри ф-ии карты  
    
}



