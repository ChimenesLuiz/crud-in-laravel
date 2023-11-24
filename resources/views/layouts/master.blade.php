@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="pt">
    <head>
        {{-- <link rel="stylesheet" href="{{asset('css/clear.css')}}"> --}}
        @include('layouts.titles')

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 


        {{-- DA CONFLITO COM O MODAL --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>


        <script src="{{asset('assets/jquery.js')}}"></script>
        <script src="{{asset('assets/jquery.mask.min.js')}}"></script>
        <script src="{{asset('js/maskingOn.js')}}"></script>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <script>
        $(document).ready(function(){
            maskingOnClient();
            maskingOnProduct();
            maskingOnSupplier();
            maskingOnTransaction();
        })
    </script>
    <body>
        @include('layouts.nav')
        <main class="container-fluid w-100 h-100" style="background-color: #dbdbdb">
            <section class="container px-3 py-5">
                    @include('layouts.alerts')
                    @yield('login.index')

                    @yield('account.edit')
                    @yield('account.password')

                    @yield('user.index')
                    @yield('user.create')
                    @yield('user.edit')

                    @yield('client.index')
                    @yield('client.create')
                    @yield('client.edit')

                    @yield('profile.index')
                    @yield('profile.create')
                    @yield('profile.edit')

                    @yield('product.index')
                    @yield('product.create')
                    @yield('product.edit')

                    @yield('supplier.index')
                    @yield('supplier.create')
                    @yield('supplier.edit')

                    @yield('transaction.index')
                    @yield('transaction.create')
                    @yield('transaction.edit')
            </section>
        </main>

    </body>
</html>