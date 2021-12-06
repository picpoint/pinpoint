<div class="pp__sidebar">
    <div class="pp__tools">
        <a href="{{ route('personalpage') }}">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <span>мой профиль</span>
        </a>
        <a href="#">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span>сообщения</span>
        </a>
        <a href="#">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>метки</span>
        </a>
        <a href="{{ route('freinds') }}">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>друзья</span>
        </a>
        <a href="#">
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
            <span>новости</span>
        </a>
        <a href="#">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span>маршруты</span>
        </a>
        <a href="#">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            <span>альбомы</span>
        </a>
        <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span>поиск</span>
        </a>
        <a href="#">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span>настройка</span>
        </a>

    </div>

    <div class="pp__exit">
        <a href="{{ route('logout') }}">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span>выход</span>
        </a>
    </div>

</div>