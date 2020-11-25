var placemark;
var photoPin;
var commentsPin;
var latitudePin;
var longitudePin;
var alldts = [];
let arrPins = arrdt.getAttribute("data-arrpins");

let rawStr = arrPins.slice(19, arrPins.length - 6);
let arr1 = rawStr.split('\n');


for(let i = 0; i < arr1.length; i++) {
  let tmp = arr1[i].split('=> ');

  if(tmp[1] != undefined) {
    alldts.push(tmp[1]);
  }
  
}



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
