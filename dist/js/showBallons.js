var placemark;
let photoPin;
let commentsPin;
let latitudePin;
let longitudePin;
let alldts = [];
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
      '<span class="description">Пицерия</span>',      
    balloonContentBody: '<img src=" ' + photoPin + ' " height="150" width="200"> <br/> ' +
      commentsPin,                  
    hintContent: 'пицерия'
  });
  
  
  
  // Добавим метку на карту.
  myMap.geoObjects
    .add(placemark);
    // Откроем балун на метке.
    // placemark.balloon.open();


}


// placemark = new ymaps.Placemark([latitudePin, longitudePin], {      
//   balloonContentHeader: '<a href = "#">ОБЖОРА</a><br>' +
//     '<span class="description">Пицерия</span>',      
//   balloonContentBody: '<img src=" ' + photoPin + ' " height="150" width="200"> <br/> ' +
//     commentsPin,                  
//   hintContent: 'пицерия'
// });



// // Добавим метку на карту.
// myMap.geoObjects
//   .add(placemark);
//   // Откроем балун на метке.
//   // placemark.balloon.open();



/*
for(let i = 0; i < str.length; i++) {  
  // console.log(str[i].split('=>')[1]);
  if(str[i].split('=>')[1] != undefined && str[i].split('=>')[1] != '\n') {
    massForPin.push(str[i].split('=>')[1]);
  }
}

// console.log(massForPin);


for(let y = 0; y < massForPin.length; y++) {
  console.log(massForPin[y]);
  
  for(let z = 0; z < 4; z++) {
    var placemark = new ymaps.Placemark([massForPin[2], massForPin[3]], {      
      balloonContentHeader: '<a href = "#">' + massForPin[1] + '</a><br>' +
        '<span class="description">Пицерия</span>',      
      balloonContentBody: '<img src=" ' + massForPin[0] + ' " height="150" width="200"> <br/> ' +
        '<a href="tel:+7-123-456-78-90">+7 (123) 456-78-90</a><br/>',                  
      hintContent: 'пицерия'
    });
  }
  

  myMap.geoObjects.add(placemark);
  
}

*/





/*
var placemark = new ymaps.Placemark([55.751574, 37.573856], {
    // Зададим содержимое заголовка балуна.                
  balloonContentHeader: '<a href = "#" width="500">Рога и копыта</a><br>' +
    '<span class="description">Сеть кинотеатров</span>',
    // Зададим содержимое основной части балуна.
  balloonContentBody: '<img src="pict/03.jpeg" height="150" width="200"> <br/> ' +
    '<a href="tel:+7-123-456-78-90">+7 (123) 456-78-90</a><br/>' +
    '<b>Ближайшие сеансы</b> <br/> Сеансов нет.',
    // Зададим содержимое нижней части балуна.
  balloonContentFooter: 'Информация предоставлена:<br/>OOO "Рога и копыта"',
    // Зададим содержимое всплывающей подсказки.        
  hintContent: 'Рога и копыта'
});


var placemark2 = new ymaps.Placemark([55.76, 37.6], {      
  balloonContentHeader: '<a href = "#">ОБЖОРА</a><br>' +
    '<span class="description">Пицерия</span>',      
  balloonContentBody: '<img src="pict/07.jpg" height="150" width="200"> <br/> ' +
    '<a href="tel:+7-123-456-78-90">+7 (123) 456-78-90</a><br/>',                  
  hintContent: 'пицерия'
});



// Добавим метку на карту.
myMap.geoObjects
  .add(placemark)
  .add(placemark2);
  // Откроем балун на метке.
  // placemark.balloon.open();
*/
    
