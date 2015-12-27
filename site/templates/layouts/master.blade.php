<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ GreenRiverGorge\App::title() }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700|Skranji:700">
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
                        <li class="{{ r(page('do')->isOpen(), 'active') }}">
                            <a href="/do">{{ page('do')->menuTitle() }}</a>
                        </li>
                        <li class="{{ r(page('eat')->isOpen(), 'active') }}">
                            <a href="/eat">{{ page('eat')->menuTitle() }}</a>
                        </li>
                        <li class="{{ r(page('stay')->isOpen(), 'active') }}">
                            <a href="/stay">{{ page('stay')->menuTitle() }}</a>
                        </li>
                        <li class="{{ r(page('directions')->isOpen(), 'active') }}">
                            <a href="/directions">{{ page('directions')->menuTitle() }}</a>
                        </li>
                    </ul>
                </div>
            </nav>

            @include('_messages')

            <main class="container">
                @yield('main')
            </main>

            <footer class="footer">
                <div class="container">
                    <p class="legal">
                        Contents &copy; {{ date('Y') }} GreenRiverGorge.com.
                    </p>
                    <ul class="list-inline footer-menu">
                        @foreach (site()->pages()->visible() as $item)
                        <li>
                            <a href="{{ $item->url() }}">{{ $item->title() }}</a>
                        </li>
                        @endforeach
                        <li>
                            <a href="/list">List Your Business</a>
                        </li>
                    </ul>
                </div>
            </footer>

        </div>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="/assets/js/app.js"></script>

        @yield('foot')
    </body>
</html>