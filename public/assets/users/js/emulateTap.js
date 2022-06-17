var myMap = document.querySelector('#map');

console.log(myMap);


var hammertime = new Hammer(myMap, {
    recognizers: [
        // RecognizerClass, [options], [recognizeWith, ...], [requireFailure, ...]
        [Hammer.Rotate],
        [Hammer.Pinch, { enable: false }, ['rotate']],
        [Hammer.Swipe,{ direction: Hammer.DIRECTION_HORIZONTAL }],
    ]
});



hammertime.on('press', function(ev) {
    alert(ev);
});




hammertime.add( new Hammer.Press({ event: 'press'}) );