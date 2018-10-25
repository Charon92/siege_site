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
        <div id="scroll" class="row grid-x main">

            @component('sections.sidebar')
        
            @show
            @endcomponent
            
            <aside class="large-1 small-12 column grid-x">
                @section('left-sidebar')
                    
    
                @show
                 
            </aside>

            <section class="large-10 small-10 column body grid-x">
                @yield('content')
            </section>

            <aside class="large-1 small-12 column grid-x">
                @component('sections.rightSidebar')
    
                @show
                @endcomponent
            </aside>

        </div>

        <canvas id="canvas"></canvas>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>

</html>