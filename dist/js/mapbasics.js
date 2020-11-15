const lat = document.querySelector('.pp__latitude');
const lon = document.querySelector('.pp__longitude');

ymaps.ready(init);
var myMap;

function init () {
    myMap = new ymaps.Map("map", {
      center: [45.0320, 41.9419],
      zoom: 13
    }, {
      searchControlProvider: 'yandex#search'
    });

    myMap.events.add('contextmenu', function (e) {
      var coords = e.get('coords');
      lat.innerHTML = coords[0].toPrecision(7);
      lon.innerHTML = coords[1].toPrecision(7);
    //   console.log('long - ' + coords[0].toPrecision(7));
    //   console.log('lat - ' + coords[1].toPrecision(7));
    //   console.log('------------------------');
    });

    
}