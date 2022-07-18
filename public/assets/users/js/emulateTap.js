var myMap = document.querySelector('#map');


function tapMobile(e) {

    sendfile.classList.remove('showblock');                                    // удаляем класс showblock показа формы
    sendfile.classList.add('showblock');                                       // и сразу же его показываем, чтоб не нужно было делать 2 клика
    sendfile.style.left = window.clientX + 'px';                                    // присваиваем координаты окна на форму
    sendfile.style.top = window.clientY + 'px';
    
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

    tapMobile();


});


hammertime.add(new Hammer.Press({event: 'press'}));

