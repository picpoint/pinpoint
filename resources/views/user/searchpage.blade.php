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

<section class="searchp">
    <div class="searchp__wrapper">

        <div class="searchp__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="searchp__content">
            <div class="searchp__contentwrp">

                <div class="searchp__blockresult">
                    <div class="searchp__searchblock">
                        <form action="{{ route('search') }}" method="post" name="formsearchfreinds">
                            @csrf
                            <input type="search" name="searchfield">
                            <button type="submit">НАЙТИ</button>
                        </form>
                    </div>
                    <div class="searchp__resultblock">

                        @if($result !='')
                            @foreach($result as $res)
                                <div class="searchp__currentfreind">
                                    <div class="searchp__pictureblock">
                                        @if($res->avatar == '')
                                            <img src="public/assets/users/img/noname2.jpg" alt="avatar">
                                        @else
                                            <img src="public/assets/users/{{ $res->avatar }}" alt="avatar">
                                        @endif
                                    </div>
                                    <div class="searchp__infoblock">
                                        <span>{{ $res->surname }}</span>
                                        <span>{{ $res->name }}</span>
                                        <a href="{{ route('messages.id', ['id' => $res->id]) }}">Написать сообщение</a>
                                    </div>
                                    <div class="searchp__actionblock">
                                        <form action="{{ route('add.freind', ['id' => $res->id]) }}" method="post"
                                              name="btndelete">
                                            @csrf
                                            <button type="submit">Добавить в друзья</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <div class="searchp__blockfilter">
                    <div class="searchp__filter">
                        <a href="#">Люди</a>
                        <a href="#">Метки</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


</body>
</html>