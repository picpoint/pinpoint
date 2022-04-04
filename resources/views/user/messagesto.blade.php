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
    {{--<script src="https://js.pusher.com/7.0/pusher.min.js"></script>--}}
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
                            <span style="position: relative; left: 60%;">{{ $message->message }}</span>
                        @else
                            <span>{{ $message->message }}</span>
                        @endif
                    @endforeach


                </div>
                <div class="msgto__blocksend">
                    <form method="post" class="sendmsg">
                        @csrf
                        @method('POST')
                        <input type="text" name="sendmsg" class="inpsendmsg">
                        <button type="submit" class="btnsendmessage">ОТПРАВИТЬ</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>



<script>
    let btnsend = document.querySelector('.btnsendmessage');
    let title = document.querySelector('.inpsendmsg');
    let token = document.getElementsByTagName('input')[0];

    btnsend.addEventListener("click", (e) => {
        e.preventDefault();

//        console.log(title.value);
//        console.log(token.value);

        const params = "_token=" + token.value + "&title=" + title.value;

        console.log(params);

        var xhr = new XMLHttpRequest();
        const url = "{{ route('messages.id') }}";
//        xhr.open("POST", url, true);

        {{--xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");--}}
            {{--xhr.addEventListener("readystatechange", () => {--}}
                {{--if (xhr.readyState == 4 && xhr.status == 200) {--}}
                {{--console.log(xhr.responseText);--}}
            {{--}--}}
        {{--});--}}
            {{----}}
        {{--xhr.send(params);--}}

    });
</script>





{{--<script src="/public/assets/users/js/webSockets.js">--}}
{{--</script>--}}





{{--<script>--}}

    {{--let blockmsgs = document.querySelector('.msgto__blockmsgs');--}}
    {{--let btnsendmessage = document.querySelector('.btnsendmessage');--}}

{{--//    console.log(btnsendmessage);--}}

    {{--let datamsg;--}}

{{--//    Pusher.logToConsole = true;--}}

    {{--var pusher = new Pusher('d31a890437419c80f25b', {--}}
        {{--cluster: 'eu'--}}
    {{--});--}}

    {{--var channel = pusher.subscribe('test-channel');--}}
    {{--channel.bind('App\\Events\\MessageCreated', function(data) {--}}
{{--//        alert(JSON.stringify(data));--}}
{{--//        console.log(data.message);--}}
{{--//        datamsg = data.message;--}}
        {{--let span = document.createElement('span');--}}
        {{--span.innerText = data.message;--}}
        {{--blockmsgs.appendChild(span);--}}
    {{--});--}}


    {{--btnsendmessage.addEventListener('click', function (e) {--}}
{{--//        window.stop();--}}
{{--//        e.preventDefault();--}}
    {{--});--}}



{{--</script>--}}






</body>
</html>