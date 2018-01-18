<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SigaLab') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        
        window.onscroll = function() {myFunction()};

        function myFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.body.className = "scrolled";
            } else {
                document.body.className = "";
            }
        }
    </script>
</head>
<body>
    <div id="app" class="app">
        @include('includes.nav')

        <div id="content">
            @yield('content')
        </div>
        
        @include('includes.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
