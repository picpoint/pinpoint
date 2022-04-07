<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            {{--<span style="position: relative; left: 60%;">{{ $message->message }}</span>--}}
                        @else
                            {{--<span>{{ $message->message }}</span>--}}
                        @endif
                    @endforeach

                    {{--{{ dd($message) }}--}}

                </div>
                <div class="msgto__blocksend">
                    <form method="post" class="sendmsg">
                        @csrf
                        @method('POST')
                        <input type="text" name="sendmsg" class="inpsendmsg">
                        <button type="submit" class="btnsendmessage">ОТПРАВИТЬ</button>
                    </form>

                    <form method="get" class="getmsg">
                        @csrf
                        <button type="submit" class="btngetmessage">ПОЛУЧИТЬ</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>




<script>

    let btngetmessage = document.querySelector('.btngetmessage');
    let blockmsgs = document.querySelector('.msgto__blockmsgs');

    btngetmessage.addEventListener('click', (e) => {
        e.preventDefault();

        var xhr = new XMLHttpRequest();
        const url = "{{ route('chat', ['id' => $message->user_id]) }}";
        xhr.open("GET", url);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-url');

        let rawDataChat = '';
        let freindId = "{{ $message->user_id }}";
        let currentuser_id = "{{ $message->currentuser_id }}";
        console.log("freindId = " + freindId);
        console.log("currentuser_id = " + currentuser_id);

        xhr.addEventListener("readystatechange", function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                rawDataChat = JSON.parse(xhr.responseText);
                console.log(rawDataChat);
            }
            for (let i = 0; i < rawDataChat.length; i++) {
                console.log(rawDataChat[i]['currentuser_id']);
                let span = document.createElement('span');
                if (rawDataChat[i]['currentuser_id'] == freindId) {
                    span.innerText = rawDataChat[i]['message'];
                    blockmsgs.appendChild(span);
                } else {
                    span.style = "position: relative; left: 60%;";
                    span.innerText = rawDataChat[i]['message'];
                    blockmsgs.appendChild(span);
                }
            }
        });

        xhr.send();


    });


</script>















<script>
    let btnsend = document.querySelector('.btnsendmessage');
    let title = document.querySelector('.inpsendmsg');
    let token = document.getElementsByTagName('input')[0];

    btnsend.addEventListener("click", (e) => {
        e.preventDefault();
        const params = "_token=" + token.value + "&currentuser_id=" + {{ $currentUser }} +"&user_id=" + {{ $id }} +"&message=" + title.value;

        var xhr = new XMLHttpRequest();
        const url = "{{ route('msgto', ['id' => $message->user_id]) }}";
        xhr.open("POST", url, true);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState == 4 && xhr.status == 200) {
//                console.log(xhr.responseText);
            }
        });

        xhr.send(params);

        title.value = '';

    });
</script>





</body>
</html>