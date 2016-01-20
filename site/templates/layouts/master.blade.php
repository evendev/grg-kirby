<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ GreenRiverGorge\App::title() }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700|Skranji:700">
        <link rel="stylesheet" href="/assets/css/app.css">

        @include('_favicons')

        @yield('head')

        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                            <a href="/do" title="{{ page('do')->title() }}">{{ page('do')->menuTitle() }}</a>
                        </li>
                        <li class="{{ r(page('eat')->isOpen(), 'active') }}">
                            <a href="/eat" title="{{ page('eat')->title() }}">{{ page('eat')->menuTitle() }}</a>
                        </li>
                        <li class="{{ r(page('stay')->isOpen(), 'active') }}">
                            <a href="/stay" title="{{ page('stay')->title() }}">{{ page('stay')->menuTitle() }}</a>
                        </li>
                        <li class="{{ r(page('directions')->isOpen(), 'active') }}">
                            <a href="/directions" title="{{ page('directions')->title() }}">{{ page('directions')->menuTitle() }}</a>
                        </li>
                    </ul>
                </div>
            </nav>

            @include('_messages')

            <main class="container">
                @yield('main')
            </main>

            <section class="sponsors">
                <div class="container text-center">
                    <h2 class="page-header">Brought to you by</h2>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a href="http://thegorgezipline.com/" target="_blank">
                                <img src="/assets/img/the-gorge-zipline.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="http://greenriveradventures.com/" target="_blank">
                                <img src="/assets/img/green-river-adventures.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <div class="container">
                    <p class="legal">
                        Contents &copy; {{ date('Y') }}
                        <a href="{{ site()->url() }}">GreenRiverGorge.com</a>
                        and its partners.
                    </p>
                    <p class="credits">
                        Made by
                        <a href="http://www.groovy.xyz/" target="_blank">Jim</a>
                        and
                        <a href="http://www.evendev.com/" target="_blank">Steve</a>.
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
        @include('layouts.analytics')
    </body>
</html>
