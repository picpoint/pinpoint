<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<section class="freinds">

    <div class="freinds__sidebar">

    </div>

    <div class="freinds__findblock">
        <form action="{{ route('searchfreind') }}" method="get" class="freinds__search">
            <input type="text" name="searchfreind" placeholder="Поиск" required>
            <button>НАЙТИ</button>
        </form>
    </div>
    <div class="freinds__peoples">
        <div class="freinds__peopleswrp">

            <div class="freinds__allfreinds">

                @foreach($allFreinds as $freind)
                    <a href="#">
                        <div class="freinds__myfreind">
                            <div class="freinds__imgfreind">
                                <img src="public/assets/users/img/noname.jpg" alt="avatar">
                            </div>
                            <div class="freinds__fullnamefreind">
                                <span>{{ $freind->name }}</span>
                                {{--<span>Иван</span>--}}
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>

            <div class="freinds__findfreinds">
                @if(!is_string($result))

                    @foreach($result as $res)

                        <div class="freinds__cardppl">
                            <form action="{{ route('freinds.store', ['id' => $res->id]) }}" method="post"
                                  class="freinds__formadd">
                                @csrf
                                <div class="freinds__imgppl">
                                    <img src="public/assets/users/img/noname.jpg" alt="image">
                                </div>
                                <div class="freinds__fullnameppl">
                                    <span>{{ $res->name }}</span>
                                    <span>{{ $res->id }}</span>
                                </div>
                                <div class="freinds__addppl">
                                    <button>ДОБАВИТЬ</button>
                                </div>
                            </form>
                        </div>

                    @endforeach

                @elseif(is_string($result))
                    {{ $result }}
                @endif
            </div>


        </div>

        {{--{{ $result->links() }}--}}

    </div>
</section>

</body>
</html>