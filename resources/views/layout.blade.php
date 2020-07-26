<!DOCTYPE HTML>
<html lang="br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            @yield('content')

            <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
        </div>
    </body>
</html>
