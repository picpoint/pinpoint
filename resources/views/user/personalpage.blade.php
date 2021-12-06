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
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=0735696f-0a98-472f-9ffc-143c71d3f506"
            type="text/javascript"></script>

</head>
<body>

<section class="pp">
    <div class="pp__wrp" id="map">


        <div class="pp__sendfile">
            <div class="pp__hdrsf">
                <div class="pp__hdricon">
                    <img src="public/assets/users/img/pinWhite.png" alt="iconpin">
                </div>
                <div class="pp__hdrplace">
                    <span>Определение адреса пина</span>
                </div>
                <div class="pp__hdrclose">
                    <span class="closeform">+</span>
                </div>
            </div>

            <form action="{{ route('pp.store') }}" method="post" enctype="multipart/form-data" class="pp__uploadform">
                @csrf
                <div class="pp__uploadfiles">
                    <div class="pp__textblock">
                        <span>Загрузить файл</span>
                    </div>
                    <div class="pp__uploadblock">
                        <div class="pp__uploadfields">
                            <input type="file" name="upfile" multiple>
                        </div>
                    </div>
                </div>

                <div class="pp__addcomments">
                    <div class="pp__textblock">
                        <span>Добавить комментарии</span>
                    </div>
                    <div class="pp__commentsblock">
                        <textarea name="commentaries"></textarea>
                    </div>
                    <input type="text" class="pp__latitude" name="latitude">
                    <input type="text" class="pp__longitude" name="longitude">
                </div>

                <div class="pp__addcontent">
                    <button type="submit" name="addpinbtn">Добавить метку</button>
                </div>
            </form>
        </div>


        {{--<div class="pp__profile">--}}
            {{--<div class="pp__userpict">--}}
                {{--<img src="public/assets/users/img/noname.jpg" alt="user">--}}
            {{--</div>--}}
            {{--<div class="pp__userfullname">--}}
                {{--<span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>--}}
            {{--</div>--}}
        {{--</div>--}}

        @include('user.layouts.sidebar')

        {{--<div class="pp__sidebar">--}}
            {{--<div class="pp__tools">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-envelope-o" aria-hidden="true"></i>--}}
                    {{--<span>сообщения</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-map-marker" aria-hidden="true"></i>--}}
                    {{--<span>метки</span>--}}
                {{--</a>--}}
                {{--<a href="{{ route('freinds') }}">--}}
                    {{--<i class="fa fa-users" aria-hidden="true"></i>--}}
                    {{--<span>друзья</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-bullhorn" aria-hidden="true"></i>--}}
                    {{--<span>новости</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-globe" aria-hidden="true"></i>--}}
                    {{--<span>маршруты</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-picture-o" aria-hidden="true"></i>--}}
                    {{--<span>альбомы</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-search" aria-hidden="true"></i>--}}
                    {{--<span>поиск</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-cogs" aria-hidden="true"></i>--}}
                    {{--<span>настройка</span>--}}
                {{--</a>--}}

            {{--</div>--}}

            {{--<div class="pp__exit">--}}
                {{--<a href="{{ route('logout') }}">--}}
                    {{--<i class="fa fa-sign-out" aria-hidden="true"></i>--}}
                    {{--<span>выход</span>--}}
                {{--</a>--}}
            {{--</div>--}}

        {{--</div>--}}

        <div class="hidedatas">
            @foreach($pins as $pin)
                <span>{{ $pin->latitude }}</span>
                <span>{{ $pin->longitude }}</span>
                <span>{{ $pin->commentaries }}</span>
                <span>{{ $pin->image }}</span>
            @endforeach
        </div>

    </div>
</section>


<script src="public/assets/users/js/contextMenuOnMap.js"></script>
<script src="public/assets/users/js/mapbasics.js" type="text/javascript"></script>
{{--<script src="public/assets/users/js/showBallons.js"></script>--}}
</body>
</html>