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
        <div class="freinds__findblock">
            <form method="post" class="freinds__search">
                @csrf
                <input type="text" name="search">
                <button>НАЙТИ</button>
            </form>
        </div>
        <div class="freinds__peoples">
            <div class="freinds__peopleswrp">

            </div>
        </div>
    </section>

</body>
</html>