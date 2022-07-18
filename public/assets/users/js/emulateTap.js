var myMap = document.querySelector('#map');


function getPlaceName() {                                                                    // ф-ия для показа, в шапке формы создания пинов, адреса по геолокации
    setTimeout(() => {
        hdrplace.innerHTML = window.curPosition;                                        // делаем мааааленькую задержку и из windowsStorage получаем данные
    }, 500);
}


function tapMobile(ev) {

    sendfile.classList.remove('showblock');                                    // удаляем класс showblock показа формы
    sendfile.classList.add('showblock');                                       // и сразу же его показываем, чтоб не нужно было делать 2 клика
    sendfile.style.left = ev.clientX + 'px';                                    // присваиваем координаты окна на форму
    sendfile.style.top = ev.clientY + 'px';
    getPlaceName();
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
    // alert(ev);
    // alert(window.curCoords);

    tapMobile(ev);


});


hammertime.add(new Hammer.Press({event: 'press'}));

