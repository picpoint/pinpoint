var myMap = document.querySelector('#map');


function tapMobile(e) {

    console.log(e);

    sendfile.classList.remove('showblock');                                    // удаляем класс showblock показа формы
    sendfile.classList.add('showblock');                                       // и сразу же его показываем, чтоб не нужно было делать 2 клика
    sendfile.style.left = e.clientX + 'px';                                    // присваиваем координаты окна на форму
    sendfile.style.top = e.clientY + 'px';

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


    document.addEventListener('click', (e) => {
        console.log(e);

        sendfile.classList.remove('showblock');                                    // удаляем класс showblock показа формы
        sendfile.classList.add('showblock');                                       // и сразу же его показываем, чтоб не нужно было делать 2 клика
        sendfile.style.left = e.clientX + 'px';                                    // присваиваем координаты окна на форму
        sendfile.style.top = e.clientY + 'px';

    });

    // tapMobile();


});


hammertime.add(new Hammer.Press({event: 'press'}));

