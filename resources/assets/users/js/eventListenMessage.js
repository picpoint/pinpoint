Echo.private(`test-channel`)
    .listen('MessageCreateEvent', (e) => {
        console.log(e);
    });