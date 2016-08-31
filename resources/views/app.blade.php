<!DOCTYPE html>
<html>
    <head>
        <title>Toarnament | Home</title>
        <link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css')  }} ">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <nav id="nav--container" @yield('navStyle')>
            <div class="nav--section" id="nav--main">
                <div class="nav--logo">
                    <a href="home"><img src=" {{ asset('img/whiteLogo.svg') }} "></a>
                </div>
                    <ul>
                        <li><a href="stats">Stats</a></li>
                        <li><a href="matches">Matches</a></li>
                        <li><a href="posts">Posts</a></li>
                        <li><a href="register">Register</a></li>
                        <li><a href="login">Login</a></li>
                    </ul>
            </div>
        </nav>
        @yield('content')
        @yield('js')
    </body>
    <footer>
        <div class="footer--section">
            Toarnament.com
            <img src=" {{ asset('img/whiteLogo.svg') }} ">
            2016 &copy; Edmir Alagic
        </div>
    </footer>
</html>
