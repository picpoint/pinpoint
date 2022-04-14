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

<section class="freinds">
    <div class="freinds__wrapper">

        <div class="freinds__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="freinds__content">

            <div class="freinds__contentwrapper">

                @if($freinds != '')
                    @foreach($freinds as $freind)
                        <div class="freinds__currentfreind">
                            <div class="freinds__pictureblock">
                                @if($freind->user->avatar == null)
                                    <img src="public/assets/users/img/noname2.jpg" alt="avatar">
                                @else
                                    <img src="public/assets/users/{{ $freind->user->avatar }}" alt="avatar">
                                @endif
                            </div>
                            <div class="freinds__infoblock">
                                <span>{{ $freind->user->surname }}</span>
                                <span>{{ $freind->user->name }}</span>
                            </div>
                            <div class="freinds__writemessageto">
                                <a href="{{ route('messages.id', ['id' => $freind->user->id]) }}">Написать сообщение</a>
                            </div>
                            <div class="freinds__actionblock">
                                <form  name="btndelete">
                                    <button type="submit" style="background-color: lightgray">Удалить из друзей</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>


    </div>
</section>


</body>
</html>