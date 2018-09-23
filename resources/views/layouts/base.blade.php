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
        <div class="row grid-x main">

                @component('sections.sidebar')
            
                @show
                @endcomponent

            <section class="large-12 small-12 column body">
                @yield('content')
            </section>

        </div>
        <canvas id="canvas"></canvas>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>

</html>