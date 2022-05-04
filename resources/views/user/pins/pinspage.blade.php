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

<section class="pinspage">
    <div class="pinspage__wrapper">
        <div class="pinspage__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="pinspage__content">
            <div class="pinspage__contentwrapper">

                @if(session('success'))
                    <div class="pinspage__success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @foreach($allPins as $pin)
                    <div class="pinspage__pin">
                        <div class="pinspage__pinpict">
                            <img src="/public/assets/users/{{ $pin->image }}" alt="pin">
                        </div>
                        <div class="pinspage__pintext">
                            <span>{{ $pin->commentaries }}</span>
                            <span>{{ \Carbon\Carbon::parse($pin->created_at)->format('d.m.Y') }}</span>
                        </div>
                        <div class="pinspage__pincontrols">
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                            <a href="{{ route('pins.edit', ['pin' => $pin->id]) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('pins.destroy', ['pin' => $pin->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                                </a>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>

</body>
</html>