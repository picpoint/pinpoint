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

    <section class="messages">
        <div class="messages__wrp">
            <div class="messages__sidebarmsg">
                @include('user.layouts.sidebar')
            </div>

            <div class="messages__contentmsg">
                <div class="messages__usrmsg">

                </div>
            </div>
        </div>
    </section>

</body>
</html>