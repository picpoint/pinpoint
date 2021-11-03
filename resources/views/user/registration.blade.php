<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <title>Document</title>
</head>
<body>

    <section class="reg">
        <div class="reg__formreg">
            <form action="{{ route('registration.store') }}" method="post" class="reg__formblock">
                @csrf
                <h3>Регистрация</h3>
                <input type="text" name="login" placeholder="Логин" value="{{ old('login') }}">
                <input type="email" name="email" placeholder="Почта" value="{{ old('email') }}">
                <input type="password" name="password" placeholder="Пароль">
                <input type="password" name="password_confirmation" placeholder="Подтверждение пароля">
                <button type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </form>
        </div>
    </section>

</body>
</html>