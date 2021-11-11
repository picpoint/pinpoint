var hidedatas = document.querySelector('.hidedatas').children;
var latitudePin;
var longitudePin;
var commentsPin;
var imgPin;


for (var i = 0; i < hidedatas.length; i++) {

    console.log(i + " i " + hidedatas[i]);


    for (let x = 0; x < 4; x++) {

        console.log()
        if (x == 0) {
            latitudePin = hidedatas[i].innerText;
        }

        if (x == 1) {
            longitudePin = hidedatas[i].innerText;
        }

        if (x == 2) {
            commentsPin = hidedatas[i].innerText;
        }

        if (x == 3) {
            imgPin = hidedatas[i].innerText
        }

        if (x == 4) {
            var placemark = new ymaps.Placemark([latitudePin, longitudePin], {  // создаём метку и присваиваем ей значения
                balloonContentBody: '<img src="public/assets/users/' + imgPin + ' " height="500px" width="500px"> <br/> ' + commentsPin, // картинку и комментарий к ней
                hintContent: commentsPin                                    // всплывающий комментарий
            });

            myMap.geoObjects                                              // у карты вызываем метод геообъекта
                .add(placemark);                                            // добавляем метку на карту
        }

    }





}


// console.log(latitudePin);


// for (var i = 0; i < 4; i++) {
//     if (i == 0) {
//         latitudePin = hidedatas[0].innerText;
//     }
//     if (i == 1) {
//         longitudePin = hidedatas[1].innerText;
//     }
//
//     if (i == 2) {
//         commentsPin = hidedatas[2].innerText;
//     }
//     if (i == 3) {
//         imgPin = hidedatas[3].innerText;
//     }
//
// }

// console.log(latitudePin);
// console.log(longitudePin);
// console.log(commentsPin);
// console.log(imgPin);


// var placemark = new ymaps.Placemark([latitudePin, longitudePin], {  // создаём метку и присваиваем ей значения
//     balloonContentBody: '<img src=" ' + imgPin + ' " height="500px" width="500px"> <br/> ' + commentsPin, // картинку и комментарий к ней
//     hintContent: commentsPin                                    // всплывающий комментарий
// });
//
// myMap.geoObjects                                              // у карты вызываем метод геообъекта
//     .add(placemark);                                            // добавляем метку на карту






