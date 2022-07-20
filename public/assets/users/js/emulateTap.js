var myMap = document.querySelector('#map');


function getPlaceNameMobile() {                                                                    // ф-ия для показа, в шапке формы создания пинов, адреса по геолокации
    setTimeout(() => {
        hdrplace.innerHTML = window.curPosition;                                        // делаем мааааленькую задержку и из windowsStorage получаем данные
    }, 500);
}


function tapMobile(ev) {
    let screenWith = document.documentElement.clientWidth;

    sendfile.classList.remove('showblock');                                    // удаляем класс showblock показа формы
    sendfile.classList.add('showblock');                                       // и сразу же его показываем, чтоб не нужно было делать 2 клика
    sendfile.style.left = ev.clientX + 'px';                                    // присваиваем координаты окна на форму
    sendfile.style.top = ev.clientY + 'px';

    if (screenWith < 720) {
        sendfile.style.justifyContent = 'center!important';
        sendfile.style.alignItems = 'center!important';
        sendfile.style.alignContent = 'center!important';
        sendfile.style.alignSelf = 'center!important';
        sendfile.style.width = 70 + '%';

        // sendfile.style.left = 0 + 'px';                                    // присваиваем координаты окна на форму
        // sendfile.style.top = 0 + 'px';
    }


    getPlaceNameMobile();
    getPlaceNameMobile();
}


var hammertime = new Hammer(myMap, {
    recognizers: [
        // RecognizerClass, [options], [recognizeWith, ...], [requireFailure, ...]
        [Hammer.Rotate],
        [Hammer.Pinch, {enable: false}, ['rotate']],
        [Hammer.Swipe, {direction: Hammer.DIRECTION_HORIZONTAL}],
    ]
});


hammertime.on('press', function (ev) {
    tapMobile(ev);
});


hammertime.add(new Hammer.Press({event: 'press'}));

