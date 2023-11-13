@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<html>
    <head>
        @include('layouts.titles')
        <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
        <script src="{{asset('js/sidebar.js')}}"></script>
    </head>
    <body class="container-fluid">
        <main class="h-100 row">
            @include('layouts.nav')
            <section class="col-sm-10" style="background-color: #f5f5f5">
                <div class="container p-5">
                    @include('layouts.alerts')
                    @yield('user.index')
                    @yield('user.create')
                    @yield('user.edit')
                </div>
            </section>
        </main>
    </body>
</html>