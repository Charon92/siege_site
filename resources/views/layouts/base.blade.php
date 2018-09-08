<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https:/fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('images/r6-siege-bg_1280.mp4') }}" type="video/mp4">
        </video>
        <div class="row grid-x main">

            <div class="large-10 small-12 column body">
                @yield('content')
            </div>

            @component('sections.sidebar')
            
            @show
            @endcomponent

        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>

</html>