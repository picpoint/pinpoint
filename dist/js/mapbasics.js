const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы

ymaps.ready(init);                                                                        // инициализируется карта
var myMap;

function init () {                                                                        // ф-ия инициализации
    myMap = new ymaps.Map("map", {
      center: [45.0320, 41.9419],                                                         // координаты места загрузки и показа карты
      zoom: 13                                                                            // масштаб отображения
    }, {
      searchControlProvider: 'yandex#search'                                              // поисковая система отображения карты - яндекс
    });

    myMap.events.add('contextmenu', function (e) {                                        // добавляем событие контекста на карту
      var coords = e.get('coords');                                                       // получаем координаты объекта при событии on.contextmenu
      lat.value = coords[0].toPrecision(7);                                               // координаты широты
      lon.value = coords[1].toPrecision(7);                                               // координаты долготы 
    });

    
}