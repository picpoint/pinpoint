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

                <form action="{{ route('pins.update', ['pin' => $pin[0]->id]) }}" method="post" class="pinedit__form"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <textarea name="commentaries" id="commentaries">
                        {{ $pin[0]->commentaries }}
                    </textarea>
                    <img src="/public/assets/users/{{$pin[0]->image}}" alt="picture">
                    <input type="file" name="pictfield" id="pictfield">
                    <button type="submit">Редактировать</button>
                </form>

            </div>
        </div>


    </div>
</section>

</body>
</html>