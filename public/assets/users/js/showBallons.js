var hidedatas = document.querySelector('.hidedatas').children;
var hidedatasshare = document.querySelector('.hidedatasshare').children;
var latitudePin;
var longitudePin;
var commentsPin;
var imgPin;





for (var i = 0, y = 0; i < hidedatas.length; i++) {
    // console.log(i + " i " + hidedatas[i].innerText);

    if (y == 0) {
        latitudePin = hidedatas[i].innerText;
    } else if (y == 1) {
        longitudePin = hidedatas[i].innerText;
    } else if (y == 2) {
        commentsPin = hidedatas[i].innerText;
    } else if (y == 3) {
        imgPin = hidedatas[i].innerText
    }

    y++;

    if (y == 4) {

        var placemark = new ymaps.Placemark([latitudePin, longitudePin], {  // создаём метку и присваиваем ей значения
            balloonContentBody: '<img src="public/assets/users/' + imgPin + ' " height="300px" width="300px"> <br/> ' + commentsPin, // картинку и комментарий к ней
            hintContent: commentsPin                                    // всплывающий комментарий
        });

        myMap.geoObjects                                              // у карты вызываем метод геообъекта
            .add(placemark);                                            // добавляем метку на карту

        y = 0;

    }

}





for (var i = 0, y = 0; i < hidedatasshare.length; i++) {

    if (y == 0) {
        latitudePin = hidedatasshare[i].innerText;
    } else if (y == 1) {
        longitudePin = hidedatasshare[i].innerText;
    } else if (y == 2) {
        commentsPin = hidedatasshare[i].innerText;
    } else if (y == 3) {
        imgPin = hidedatasshare[i].innerText
    }

    y++;

    if (y == 4) {

        var placemark = new ymaps.Placemark([latitudePin, longitudePin], {  // создаём метку и присваиваем ей значения
            balloonContentBody: '<img src="public/assets/users/' + imgPin + ' " height="300px" width="300px"> <br/> ' + commentsPin, // картинку и комментарий к ней
            hintContent: commentsPin                                    // всплывающий комментарий
        }, {
            preset: 'islands#nightDotIcon',
            iconColor: '#0E4779'
        });

        myMap.geoObjects                                              // у карты вызываем метод геообъекта
            .add(placemark);                                            // добавляем метку на карту

        y = 0;

    }

}