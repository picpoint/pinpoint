Echo.channel('test-channel')
    .listen('MessageCreateEvent', (e) => {
        console.log(e);
    });