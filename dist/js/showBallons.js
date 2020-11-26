var placemark;                                                     // создаём переменные для работы метки
var photoPin;
var commentsPin;
var latitudePin;
var longitudePin;
var alldts = [];                                                   // пустой массив для дальнейшего перебора для метки
let arrPins = arrdt.getAttribute("data-arrpins");                  // получаем данные из дата атрибута элемента
let rawStr = arrPins.slice(19, arrPins.length - 6);                // отсекаем из строки ненужные элементы
let arr1 = rawStr.split('\n');                                     // разбиваем строку по \n на массив элементов


for(let i = 0; i < arr1.length; i++) {                             // перебираем массив строк
  let tmp = arr1[i].split('=> ');                                  // каждую строку из массива бьём по =>

  if(tmp[1] != undefined) {                                        // если элемент(значение) был не пустой, пушим в массив
    alldts.push(tmp[1]);
  }
  
}

console.log(alldts);


for(let x = 0; x < alldts.length; x++) {
  let onms = alldts[x].split(' - ');

  if(onms[0] == 'photo') {
    photoPin = onms[1];
  } else if(onms[0] == 'commentaries') {
    commentsPin = onms[1];
  } else if(onms[0] == 'latitude') {
    latitudePin = onms[1];
  } else if(onms[0] == 'longitude') {
    longitudePin = onms[1];
  }

  


  placemark = new ymaps.Placemark([latitudePin, longitudePin], {      
    balloonContentHeader: '<a href = "#">ОБЖОРА</a><br>' +
      '<span class="description"> Пицерия </span>',      
    balloonContentBody: '<img src=" ' + photoPin + ' " height="150" width="200"> <br/> ' +
      commentsPin,
    hintContent: commentsPin
  });
  
  /*
    balloonContentBody: '<img src="../usersFolders/freeAlex/pict/18b0a4b31ad55084690a46198f88a671_XL.jpg" height="150" width="200"> <br/> ' +
  */
  
  // Добавим метку на карту.
  myMap.geoObjects
    .add(placemark);
    // Откроем балун на метке.
    // placemark.balloon.open();


}

// console.log('/../' + photoPin);
