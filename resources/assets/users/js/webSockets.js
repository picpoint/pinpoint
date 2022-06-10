// import Echo from "laravel-echo"
//
// window.Pusher = require('pusher-js');
//
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     wsHost: window.location.hostname,
//     wsPort: 6001,
//     forceTLS: false,
//     disableStats: true,
//     enabledTransports: ['ws', 'wss'] // <- added this param
// });



import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true,
    disableStats: true,
    enabledTransports: ['ws', 'wss'] // <- added this param
});



//
// Echo.channel('test-channel')
//     .listen('MessageCreateEvent', (e) => {
//         console.log(e);
//     });
