<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<section class="messages">
    <div class="messages__wrapper">

        <div class="messages__header">
            @include('user.layouts.sidebar')
        </div>


        <div class="messages__content">
            <div class="messages__contentwrapper">

                @if(count($hasMsg) != 0)
                    @foreach($hasMsg as $dt)
                        <div class="messages__currentfreind">
                            <div class="messages__pictureblock">
                                <img src="public/assets/users/img/noname2.jpg" alt="avatar">
                            </div>
                            <div class="messages__infoblock">
                                <span>{{ $dt[0]->name }}</span>
{{--                                <a href="{{ route('messages.id', ['id' => $dt[0]->id]) }}">Перейти к чату</a>--}}
                            </div>
                            <div class="messages__actionblock">
                                <a href="{{ route('messages.id', ['id' => $dt[0]->id]) }}">
                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    <span>Перейти к чату</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <div class="messages__notmsg">
                            <span>У Вас нет сообщений</span>
                        </div>
                @endif


            </div>
        </div>


    </div>
</section>


</body>
</html>