<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/users/css/all.css">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

    <section class="pinspage">
        <div class="pinspage__wrapper">
            <div class="pinspage__header">
                @include('user.layouts.sidebar')
            </div>

            <div class="pinspage__content">
                <div class="pinspage__contentwrapper">
                    <a href="#" class="pinspage__pin">
                        <div class="pinspage__pinpict">
                            <img src="" alt="pin">
                        </div>
                        <div class="pinspage__pintext">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolores ducimus eum eveniet ipsam laboriosam nihil recusandae
                                reprehenderit sint sit tempora. Aliquam aperiam blanditiis,
                                commodi ipsum placeat quibusdam quo rem vel.
                            </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

</body>
</html>