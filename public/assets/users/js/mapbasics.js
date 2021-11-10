// var myMap;
//
// // Дождёмся загрузки API и готовности DOM.
// ymaps.ready(init);
//
// function init () {
//     // Создание экземпляра карты и его привязка к контейнеру с
//     // заданным id ("map").
//     myMap = new ymaps.Map('map', {
//         // При инициализации карты обязательно нужно указать
//         // её центр и коэффициент масштабирования.
//         center: [55.76, 37.64], // Москва
//         zoom: 10
//     }, {
//         searchControlProvider: 'yandex#search'
//     });
//
// }




const lat = document.querySelector('.pp__latitude');                                      // доступ к полю координат широты
const lon = document.querySelector('.pp__longitude');                                     // доступ к полю координат долготы
const arrdt = document.querySelector('.pp__arrdt');
let errlocate = document.querySelector('.pp__errlocate');
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
        errlocate.style.display = 'flex';                                                 // если координаты не определены, показываем блок предупреждения
        ymaps.ready(init);                                                                // инициализируем карту с координатами по умолчанию
    });
});

}



// function includeShowBalloons(url) {                                                       // ф-ия для подключения файла showBallons, который отображает метки на карте
//     var script = document.createElement('script');                                          // создаём тег скрипт
//     script.src = url;                                                                       // в путь записываем пришедший урл
//     document.getElementsByTagName('head')[0].appendChild(script);                           // находим head, добавляем скрипт туда
// }




function init () {                                                                      // ф-ия инициализации карты
    var myPlacemark;
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
        var coords = e.get('coords');

        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);                                    // Если метка уже создана – просто передвигаем ее.
        } else {
            myPlacemark = createPlacemark(coords);                                          // Если нет – создаем.
            myMap.geoObjects.add(myPlacemark);                                              // добавляем на карту
        }

        getAddress(coords);                                                                 // вызываем ф-ию получения адреса

        function createPlacemark(coords) {                                                  // ф-ия создания метки/пина, казывающей куда кликнул пользователь
            return new ymaps.Placemark(coords, {
                // iconCaption: ''
            }, {
                preset: 'islands#violetDotIconWithCaption',                                   // устанавливаем прессет отличный от стандартных меток
                draggable: false
            });
        }


        function getAddress(coords) {                                                       // Определяем адрес по координатам (обратное геокодирование).
            // myPlacemark.properties.set('iconCaption', 'поиск...');
            ymaps.geocode(coords).then(function (res) {                                       // геокодирование на карте
                var firstGeoObject = res.geoObjects.get(0);                                     // получение геообъекта

                // myPlacemark.properties
                // .set({
                //     // Формируем строку с данными об объекте.
                //     iconCaption: [
                //         // Название населенного пункта или вышестоящее административно-территориальное образование.
                //         firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                //         // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                //         firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                //     ].filter(Boolean).join(', ')
                //     // В качестве контента балуна задаем строку с адресом объекта.
                //     // balloonContent: firstGeoObject.getAddressLine()
                // });
                window.curPosition = firstGeoObject.getAddressLine();                       // в windowsStorage сохраняем строку с адресом для передачи в шапку формы создания пина
            });
        }

    });

    // includeShowBalloons("js/showBallons.js");                                             // вызываем ф-ию includeShowBalloons внутри ф-ии карты

}



locatePosition()                                                                        // вызываем ф-ию геолокации
    .then(() => {                                                                         // вешаем иниализацию карты
    ymaps.ready(init);
}, () => {                                                                            // иначе при ошибке, всё равно инициализируем карту, но уже с координатами по умолчанию будет загрузка
    ymaps.ready(init);
});

