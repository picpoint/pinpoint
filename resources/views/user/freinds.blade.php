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
                <form method="get" action="{{ route('search') }}" class="freinds__searchformfrnd">
                    <input type="search" name="search" required>
                    <button type="submit">Поиск</button>
                </form>
            </div>

            <div class="freinds__resultsfrnd">
                <div class="freinds__userfreinds">

                </div>

                <div class="freinds__resultsearch">

                    @if(is_string($users))
                        <span>{{ $users }}</span>
                    @elseif(sizeof($users))

                        @foreach($users as $user)
                            <div class="freinds__currentuser">
                                <form method="post" class="freinds__formadd">
                                    <div class="freinds__avataruser">
                                        <img src="public/assets/users/img/noname.jpg" alt="avatar">
                                    </div>
                                    <div class="freinds__nameuser">
                                        <span>{{ $user->name }}</span>
                                    </div>
                                    <div class="freinds__addblock">
                                        <button type="submit">Добавить в друзья</button>
                                    </div>
                                </form>
                            </div>
                        @endforeach

                    @else
                        <span>По Вашему запросу ничего ненайденно...</span>
                    @endif

                </div>

            </div>

        </div>
    </div>
</section>

</body>
</html>