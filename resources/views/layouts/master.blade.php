<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    </head>
    <body class="{{ body_class() }}">
        <div class="container">
            <header>
                <h1><a href="/">Brian Gilbreath</a> @yield('header')</h1>
            </header>

            @yield('content')

            <div class="follow">
                <p>Follow me for my latest photos!</p>
                <a href="http://www.facebook.com/briangilbreathphotography" target="_blank">Facebook</a><span class="spacer">|</span>
                <a href="http://www.instagram.com/briangilbreath" target="_blank">Instagram</a><span class="spacer">|</span>
                <a href="http://briangilbreath.tumblr.com/" target="_blank">Tumblr</a><span class="spacer">|</span>
                <a href="http://www.500px.com/briangilbreath" target="_blank">500px</a>
            </div>

            <footer>
                <div class="legal">
                    Copyright © {{date('Y')}} Brian Gilbreath. All Rights Reserved.
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="{{asset('js/vendor/justifiedGallery.js')}}"/></script>
        <script src="{{asset('js/vendor/jquery.swipebox.min.js')}}"/></script>
        <script src="{{asset('js/master.js')}}"/></script>
    </body>
</html>
