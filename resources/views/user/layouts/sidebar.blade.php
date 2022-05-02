<div class="pp__sidebar">
    <div class="pp__tools">
        <a href="{{ route('personalpage') }}">
            {{--<i class="fa fa-thumb-tack" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-map-location-dot"></i>
            <span>карта</span>
        </a>
        <a href="#">
            {{--<i class="fa fa-map-marker" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-location-dot"></i>
            <span>метки</span>
        </a>
        <a href="{{ route('messages') }}">
            {{--<i class="fa fa-envelope-o" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-message"></i>
            <span>сообщения</span>
        </a>
        <a href="{{ route('freinds') }}">
            {{--<i class="fa fa-users" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-user-group"></i>
            <span>друзья</span>
        </a>
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
        <a href="{{ route('search') }}">
            {{--<i class="fa fa-search" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-magnifying-glass"></i>
            <span>поиск</span>
        </a>
        <a href="{{ route('settings') }}">
            {{--<i class="fa fa-cogs" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-gears"></i>
            <span>настройка</span>
        </a>

    </div>

    <div class="pp__exit">
        <a href="{{ route('logout') }}">
            {{--<i class="fa fa-sign-out" aria-hidden="true"></i>--}}
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span>выход</span>
        </a>
    </div>

</div>