<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <div class="messages__freindsmsg">


                    @foreach($allFreinds as $freind)
                        <div class="freinds__myfreind">
                            <span class="userid">{{ $freind->user->id }}</span>
                            <div class="freinds__frnd">
                                <div class="freinds__avatarmyfreind">
                                    <img src="public/assets/users/img/noname.jpg" alt="avatar">
                                </div>
                                <div class="freinds__namemyfreind">
                                    <span>{{ $freind->user->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="messages__messagesfreind">
                    <div class="messages__currentmessages">

                    </div>
                    <div class="messages__sendmessages">
                        <form method="post" class="messages__sendmsgform">
                            @csrf
                            <input type="text" name="idfreind" class="idfreind">
                            <input type="text" name="sendmessage" class="fieldmessage">
                            <button type="submit" name="btnsendmsg" class="btnsendmsg">ОТПРАВИТЬ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="public/assets/users/js/messageTo.js"></script>
<script src="public/assets/users/js/sendMessageAjax.js"></script>

</body>
</html>