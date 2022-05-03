<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/users/css/all.css">
    <link rel="stylesheet" href="/public/assets/users/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<section class="pinedit">
    <div class="pinedit__wrapper">
        <div class="pinedit__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="pinedit__content">
            <div class="pinedit__contentwrapper">

                <form method="post">
                    <textarea name="commentaries" id="commentaries">
                        {{ $pin[0]->commentaries }}
                    </textarea>
                </form>

            </div>
        </div>


    </div>
</section>

</body>
</html>