@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="pt">
    <head>
        @include('layouts.titles')
        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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

                    @yield('product.index')
                    @yield('product.create')
                    @yield('product.edit')
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>