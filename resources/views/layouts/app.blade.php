<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Restaurant')}}</title>

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        @include('inc.navbar')
        <br><br>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>


        
        <script src ="{{asset('js/app.js')}}"> </script>
    </body>
</html>
