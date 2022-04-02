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
                            <a href="#">
                                <img src="/public/assets/users/img/avatar.png" alt="avatar">
                            </a>
                        </div>
                        <div class="settings__lftsurname">
                            <span>Фамилия</span>
                        </div>
                        <div class="settings__lftname">
                            <span>Имя</span>
                        </div>
                        <div class="settings__lftpatronymic">
                            <span>Отчество</span>
                        </div>
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

                        </div>
                        <div class="settings__rghtsurname">
                            <a href="#">Редактировать</a>
                        </div>
                        <div class="settings__rghtname">
                            <a href="#">{{ $user->name }}</a>
                        </div>
                        <div class="settings__rghtpatronymic">
                            <a href="#">Редактировать</a>
                        </div>
                        <div class="settings__rghtemail">
                            <a href="#">{{ $user->email }}</a>
                        </div>
                        <div class="settings__rghtphone">
                            <a href="#">Редактировать</a>
                        </div>
                        <div class="settings__rghtdateofreg">
                            <a>{{ $dateOfReg }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


</body>
</html>