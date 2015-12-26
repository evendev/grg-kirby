<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('document.title', site()->title())</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Skranji:700">
        <link rel="stylesheet" href="/assets/css/app.css">

        @yield('head')
    </head>
    <body>
        <div class="site">

            <header class="header">
                <div class="container">
                    <div class="logo">
                        <a href="{{ site()->url() }}">
                            <img src="/assets/img/logo.png" alt="{{ site()->title() }}" class="img-responsive">
                        </a>
                    </div>
                </div>
            </header>

            <nav class="nav">
                <div class="container">
                    <ul class="list-inline nav-menu">
                        <li class="{{ r(page('do')->isOpen(), 'active') }}"><a href="/do">Do</a></li>
                        <li class="{{ r(page('eat')->isOpen(), 'active') }}"><a href="/eat">Eat</a></li>
                        <li class="{{ r(page('stay')->isOpen(), 'active') }}"><a href="/stay">Stay</a></li>
                        <li class="{{ r(page('directions')->isOpen(), 'active') }}"><a href="/directions">Get Here</a></li>
                    </ul>
                </div>
            </nav>

            <main class="container">
                @yield('main')
            </main>

            <footer class="footer">
                
            </footer>

        </div>

        <script src="/assets/js/app.js"></script>

        @yield('foot')
    </body>
</html>