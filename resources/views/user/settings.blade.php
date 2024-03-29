<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="public/assets/users/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="/public/assets/users/css/all.css">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<section class="settings">
    <div class="settings__wrapper">

        <div class="settings__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="settings__content">
            <div class="settings__contentwrp">
                <div class="settings__cardofuser">
                    <div class="settings__leftcard">
                        <div class="settings__lftavatar">

                                @if($user->avatar == "")
                                    <img src="/public/assets/users/img/avatar.png" alt="avatar">
                                @else
                                    <img src="/public/assets/users/{{ $user->avatar }}" alt="avatar">
                                @endif

                        </div>
                        <div class="settings__lftsurname">
                            <span>Фамилия</span>
                        </div>
                        <div class="settings__lftname">
                            <span>Имя</span>
                        </div>
                        {{--<div class="settings__lftpatronymic">--}}
                        {{--<span>Отчество</span>--}}
                        {{--</div>--}}
                        <div class="settings__lftemail">
                            <span>email</span>
                        </div>
                        <div class="settings__lftphone">
                            <span>телефон</span>
                        </div>
                        <div class="settings__lftdateofreg">
                            <span>дата регистрации</span>
                        </div>
                    </div>
                    <div class="settings__rightcard">
                        <div class="settings__rghtavatar">
                            <form action="{{ route('changeavatar') }}" method="post" name="formchangeavatar"
                                  class="settings__rghtform" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="fieldchangeavatar">
                                <button type="submit" name="btnchangeavatar">Заменить аватар</button>
                            </form>
                        </div>
                        <div class="settings__rghtsurname">
                            <a href="#">{{ $user->surname }}</a>
                        </div>
                        <div class="settings__rghtname">
                            <a href="#">{{ $user->name }}</a>
                        </div>
                        {{--<div class="settings__rghtpatronymic">--}}
                        {{--<a href="#">Редактировать</a>--}}
                        {{--</div>--}}
                        <div class="settings__rghtemail">
                            <a href="#">{{ $user->email }}</a>
                        </div>
                        <div class="settings__rghtphone">
                            <a href="#">Редактировать</a>
                        </div>
                        <div class="settings__rghtdateofreg">
                            <a style="color: #000;">{{ $dateOfReg }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


</body>
</html>