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

    <section class="freinds">
        <div class="freinds__wrp">

            <div class="freinds__sidebarfrnd">
                @include('user.layouts.sidebar')
            </div>

            <div class="freinds__contentfrnd">

                <div class="freinds__searchblockfrnd">
                    <form method="post" action="{{ route('search') }}" class="freinds__searchformfrnd">
                        @csrf
                        <input type="search" name="search">
                        <button type="submit">Поиск</button>
                    </form>
                </div>

                <div class="freinds__resultsfrnd">
                    <div class="freinds__userfreinds">

                    </div>
                    <div class="freinds__resultsearch">

                        {{--<div class="freinds__currentuser">--}}
                            {{--<form method="post" class="freinds__formadd">--}}
                                {{--<div class="freinds__avataruser">--}}
                                    {{--<img src="public/assets/users/img/noname.jpg" alt="avatar">--}}
                                {{--</div>--}}
                                {{--<div class="freinds__nameuser">--}}
                                    {{--<span>Иванов</span>--}}
                                    {{--<span>Иван</span>--}}
                                {{--</div>--}}
                                {{--<div class="freinds__addblock">--}}
                                    {{--<button type="submit">Добавить в друзья</button>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>