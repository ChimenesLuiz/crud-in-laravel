@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<html>
    <head>
        @include('layouts.titles')
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
        <script src="{{asset('js/sidebar.js')}}"></script>
    </head>
    <body class="container-fluid">
        <main class="h-100 row">
            @include('layouts.nav')
            <section class="col-sm-10" style="background-color: #f5f5f5">
                <div class="container p-5">
                    @include('layouts.alerts')
                    @yield('login.index')

                    @yield('user.index')
                    @yield('user.create')
                    @yield('user.edit')

                    @yield('profile.index')
                    @yield('profile.create')
                    @yield('profile.edit')
                </div>
            </section>
        </main>
    </body>
</html>