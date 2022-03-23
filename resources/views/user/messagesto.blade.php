<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/users/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/assets/users/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<section class="msgto">
    <div class="msgto__wrapper">

        <div class="msgto__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="msgto__content">
            <div class="msgto__contentwrapper">
                <div class="msgto__blockmsgs">

                    @foreach($chat as $message)
                        @if($message->currentuser_id == $currentUser)
                            <span style="align-self: flex-end">{{ $message->message }}</span>
                        @else
                            <span>{{ $message->message }}</span>
                        @endif
                    @endforeach

                </div>
                <div class="msgto__blocksend">
                    <form action="#" method="post">
                        @csrf
                        <input type="text" name="sendmsg">
                        <button type="submit">ОТПРАВИТЬ</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>


<script src="/public/assets/users/js/webSockets.js">
</script>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>


<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('d31a890437419c80f25b', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('test-channel');
    channel.bind('MessageCreated', function(data) {
        alert(JSON.stringify(data));
    });
</script>


</body>
</html>