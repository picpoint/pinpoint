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

<section class="news">
    <div class="news__wrapper">
        <div class="news__header">
            @include('user.layouts.sidebar')
        </div>

        <div class="news__content">
            <div class="news__contentwrapper">

                @if(session('success'))
                    <div class="pinspage__success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @foreach($allNews as $currentNews)
                    <div class="news__currentnews">
                        <div class="news__currentnewsimg">
                            <img src="/public/assets/users/{{ $currentNews->pin->image }}" alt="picture">
                        </div>
                        <div class="news__currentnewstext">
                            <span>{{ $currentNews->pin->commentaries }}</span>
                        </div>
                        <div class="news__currentnewscontrols">
                            <a href="#" id="#" class="sharebtn">
                                <i class="fa-solid fa-share"></i>
                            </a>
                            <form action="{{ route('news.destroy', ['news' => $currentNews->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
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