ymaps.ready(init);
var myMap;

function init () {
    myMap = new ymaps.Map("map", {
        center: [45.0320, 41.9419],
        zoom: 13
    }, {
        searchControlProvider: 'yandex#search'
    });

    // Обработка события, возникающего при щелчке
    // левой кнопкой мыши в любой точке карты.
    // При возникновении такого события откроем балун.
    myMap.events.add('contextmenu', function (e) {
      var coords = e.get('coords');
      console.log('long - ' + coords[0].toPrecision(7));
      console.log('lat - ' + coords[1].toPrecision(7));
      console.log('------------------------');
    });

    
}