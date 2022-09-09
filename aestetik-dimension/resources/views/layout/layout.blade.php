<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/layout.css" />
    <title>Aestetik Dimension</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap');
    </style>
</head>

<body>

    <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="Moving Geometric Metal Shapes _ HD Relaxing Screensaver.mp4" type="video/mp4">
    </video>

    <nav class="navbar">
        <div>
            <h1 class="name">Aestetik Dimension</h1>
            <h1 class="logo" href="https://fontmeme.com/polices/police-android-nation/"><img src="https://fontmeme.com/permalink/211202/3e6ee5fed9687c3e0329ceeb03b37790.png" alt="police-android-nation" border="0"></h1>
        </div>

        @auth

            <div class="login">
                <h1>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
                <a href="/logout" class="button">Logout</a>
            </div>

        @endauth

        <ul>
            <li><a href="/admin">New Style</a></li>
            <li><a href="/catalog">Catalog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/panier">My Flow</a></li>
        </ul>

        <header>
            <form class="search" action="" class="search">
                <input type="search" placeholder="Flow Library" />
            </form>
        </header>
    </nav>

    @yield('content')

    <footer>
        <nav class="navend">
            <ul><a href="https://fr-fr.facebook.com/"><img class="size" src="../img/facebook.png"
                        alt="facebook" /></a></ul>
            <ul>
                <p class="copy">©Copyright 2021</p>
            </ul>
            <ul><a href="https://twitter.com/?lang=fr"><img class="size" src="../img/twitter.png"
                        alt="twitter" /></a></ul>
        </nav>
    </footer>

 <script src="{{ asset('js/popup.js') }}"></script>

</body>

</html>
