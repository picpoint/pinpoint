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


for(let x = 0, y = 0; x < alldts.length; x++) {                   // перебираем весь получившийся массив
    y++;                                                            // наращиваем переменную для шага по массиву
    let onms = alldts[x].split(' - ');                              // каждый элемент разбиваем по -

    if(onms[0] == 'photo') {                                        // если 0-й элемент массива это текст == photo
        photoPin = onms[1];                                           // присваиваем переменной photoPin 1-е значение
    } else if(onms[0] == 'commentaries') {                          // -||-
        commentsPin = onms[1];                                        // -||-
    } else if(onms[0] == 'latitude') {                              // -||-
        latitudePin = onms[1];                                        // -||-
    } else if(onms[0] == 'longitude') {                             // -||-
        longitudePin = onms[1];                                       // -||-
    }


    if(y == 4) {                                                    // если шаг уже достиг значения 4
        placemark = new ymaps.Placemark([latitudePin, longitudePin], {  // создаём метку и присваиваем ей значения
            balloonContentBody: '<img src=" ' + photoPin + ' " height="500px" width="500px"> <br/> ' + commentsPin, // картинку и комментарий к ней
            hintContent: commentsPin                                    // всплывающий комментарий
        });

        myMap.geoObjects                                              // у карты вызываем метод геообъекта
            .add(placemark);                                            // добавляем метку на карту
        y = 0;                                                      // обнуляем переменную для дальнейшего шага
    }


}
