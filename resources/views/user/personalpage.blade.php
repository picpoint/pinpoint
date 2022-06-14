<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/users/css/all.css">
    {{--<link rel="stylesheet" href="/public/assets/users/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="/public/assets/users/css/style.css">
    <title>{{ $title }}</title>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=0735696f-0a98-472f-9ffc-143c71d3f506"
            type="text/javascript"></script>

</head>
<body>

<section class="pp">

    <div class="pp__wrp" id="map">

        <div class="pp__errlocate">
            <div class="pp__errmsg">
                {{--<div class="pp__errclose">--}}
                {{--<i class="fa fa-times-circle-o" aria-hidden="true"></i>--}}
                {{--</div>--}}
                <div class="pp__errnotice">
                    <span>К сожалению, мы не смогли определить Ваше местоположение ...  :-(</span>
                    <span>Почему это произошло?</span>
                    <span>В Вашем браузере или операционной системе стоит запрет геолокации.</span>
                    <span>Для нормальной работы приложения, в настройках вашего браузера
                            или операционной системы разрещите геолокацию и обновите браузер(Ctrl + F5)
                    </span>
                </div>
                <div class="pp__errok">
                    <button class="close">Понятно</button>
                </div>
            </div>
        </div>


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

        @include('user.layouts.sidebar')

        {{--@if(isset($evntMsg))--}}
            {{--{{ dump($evntMsg) }}--}}
        {{--@endif--}}

        <div class="pp__addpin animate-pulse" data-tooltip="Кликни правой кнопкой и создай метку">
            <i class="fa-solid fa-location-dot"></i>
        </div>

        {{--<div class="pp__aim">--}}
        {{--<span>+</span>--}}
        {{--</div>--}}


        <div class="hidedatas">
            @foreach($pins as $pin)
                <span>{{ $pin->latitude }}</span>
                <span>{{ $pin->longitude }}</span>
                <span>{{ $pin->commentaries }}</span>
                <span>{{ $pin->image }}</span>
            @endforeach
        </div>

        <div class="hidedatasshare">
            @foreach($sharePins as $sharePin)
                <span>{{ $sharePin->pin->latitude }}</span>
                <span>{{ $sharePin->pin->longitude }}</span>
                <span>{{ $sharePin->pin->commentaries }}</span>
                <span>{{ $sharePin->pin->image }}</span>
            @endforeach
        </div>

    </div>
</section>


<script src="/public/assets/users/js/contextMenuOnMap.js"></script>
<script src="/public/assets/users/js/mapbasics.js"></script>
<script src="/public/assets/users/js/errLocatePosition.js"></script>
<script src="/public/assets/users/js/showBallons.js"></script>

<script src="/public/assets/users/js/hammerjs.js"></script>
<script src="/public/assets/users/js/emulateTap.js"></script>

</body>
</html>