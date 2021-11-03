<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
</head>
<body>

    <section class="homepage">
        <div class="homepage__headerhp">
            <div class="homepage__headerwrp">
                <div class="homepage__headerlogo">
                    <a href="/">PinPoint</a>
                </div>
                <div class="homepage__headernavigation">
                    <a href="{{ route('registration.create') }}">Регистрация</a>
                    <a href="#">Войти</a>
                </div>
            </div>
        </div>

        <div class="homepage__contenthp">
            <div class="homepage__contenthpwrp">
                <img src="public/assets/users/img/map.jpg" alt="map">
            </div>
        </div>

        <div class="homepage__footerhp">
            <div class="homepage__footerwrp">
                <a href="#">О нас</a>
            </div>
        </div>

    </section>

</body>
</html>