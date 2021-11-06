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

<section class="reg">
    <div class="reg__formreg">

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if(session('error'))
            {{ session('error') }}
        @endif

        <form action="{{ route('login') }}" method="post" class="reg__formblock">
            @csrf
            <h3>Авторизация</h3>
            <input type="email" name="email" placeholder="Почта">
            <input type="password" name="password" placeholder="Пароль">
            <button type="submit">ВОЙТИ</button>
        </form>
    </div>
</section>

</body>
</html>