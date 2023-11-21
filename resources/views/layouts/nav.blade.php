<nav class="col-sm-2 bg-primary p-0 h-100">
    <div class="w-100 h-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
        <div class="d-flex justify-content-center">

            <img src="https://cdn.freelogodesign.org/files/0745f4cddafe40fcb170003a197e76e7/thumb/logo_200x200.png?v=0" class="img-fluid" style="max-width: 30%; height: auto;" alt="">
        </div>

   
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="container w-100">
            <button type="button" class="btn btn-light w-100 mb-3">  
                <a href="{{route('dash.index')}}" class="text-dark text-decoration-none">
                    
                    DASHBOARD
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('user.index')}} "class="text-dark text-decoration-none">
                    
                    USUARIOS
                </a>
            </button>
        </li>
        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('client.index')}} "class="text-dark text-decoration-none">
                    
                    CLIENTES
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('profile.index')}} "class="text-dark text-decoration-none">
                    
                    PERFIS
                </a>
            </button>
        </li>
        
        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('product.index')}} "class="text-dark text-decoration-none">
                    
                    PRODUTOS
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('transaction.index')}} "class="text-dark text-decoration-none">
                    
                    VENDAS
                </a>
            </button>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="/avatars/{{ Auth::user()->avatar }}" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{(auth() -> user() -> name ?? 'User')}}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="{{route('account.edit', ['id' => Auth::id()])}}">Minha conta</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{route('login.destroy')}}">Sair</a></li>
        </ul>
    </div>
</nav>