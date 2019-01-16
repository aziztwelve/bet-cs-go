<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-head">
    <a class="  navbar-item" href="#">Главная</a>
    <a class="  navbar-for-news" href="#">Новости</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div>
        <div  class="nav-for-user">
            <p class="nav-icon">
                <i class="fas fa-users fa-2x"></i>
            </p>
            <div class="nav-how-many">
                <p class="nav-count">
                    75 <br>
                </p>
                <p class="nav-word">
                    Users
                </p>
            </div>
        </div>

        <div  class="nav-for-online">
            <p class="nav-icon">
                <i class="fas fa-user-circle fa-2x"></i>
            </p>
            <div class="nav-how-many">
                <p class="nav-count">
                    100 <br>
                </p>
                <p class="nav-word">
                    Online
                </p>
            </div>
        </div>
    </div>
</nav>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
