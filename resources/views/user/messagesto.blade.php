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

        console.log({{ $message->user_id }});
        console.log({{ $message->currentuser_id }});
        console.log(title.value);

        e.preventDefault();

        const params = "_token=" + token.value + "&currentuser_id=20&user_id=7&message=" + title.value;

//        console.log(params);

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

    });
</script>



</body>
</html>