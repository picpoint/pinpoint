var myMap = document.querySelector('#map');


var hammertime = new Hammer(myMap, {
    recognizers: [
        // RecognizerClass, [options], [recognizeWith, ...], [requireFailure, ...]
        [Hammer.Rotate],
        [Hammer.Pinch, { enable: false }, ['rotate']],
        [Hammer.Swipe,{ direction: Hammer.DIRECTION_HORIZONTAL }],
    ]
});



hammertime.on('press', function(ev) {
    // alert(ev);
    // alert('emulate tap');

    let longTap = new ContextMenuOnMapClass(sendfile, closeform);
    longTap.contextMenu();

});




hammertime.add( new Hammer.Press({ event: 'press'}) );

