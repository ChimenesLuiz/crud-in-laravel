@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<html>
    <head>
        @include('layouts.titles')
        <link rel="stylesheet" href="{{asset('css/login/index.css')}}">
    </head>
    <body>
        @include('layouts.alerts')
        @yield('login.index')
    </body>
</html>