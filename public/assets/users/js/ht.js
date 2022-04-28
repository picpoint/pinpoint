var hammertime = new Hammer(document.body, {
    recognizers: [
        // RecognizerClass, [options], [recognizeWith, ...], [requireFailure, ...]
        [Hammer.Tap, { direction: Hammer.DIRECTION_VERTICAL }],
    ]
});

hammertime.on('tap', function(ev) {
    console.log(ev);
});