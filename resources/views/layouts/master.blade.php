@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="pt">
    <head>
        @include('layouts.titles')
        {{-- BOOTSTRAP EXAMPLES NAVBAR --}}
        {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/"> --}}


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 


        {{-- DA CONFLITO COM O MODAL --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

        {{-- CSS FEIAO --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

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
        <script src="{{asset('js/sidebar.js')}}"></script>
    </body>
</html>