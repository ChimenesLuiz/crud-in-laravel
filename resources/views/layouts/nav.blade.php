
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <div class="container">
      <button class="navbar-toggler my-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/avatars/{{ Auth::user()->avatar }}" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong class="mx-1" style="text-transform: uppercase">{{(auth() -> user() -> name ?? 'User')}}</strong>
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" id="linkcadastros" href="{{route('account.edit', ['id' => Auth::id()])}}">Minha Conta</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" id="linkcadastros" href="{{route('login.destroy')}}">Sair</a></li>
            </ul>
          </li>
          <li class=" mt-1 mx-1 nav-item">
            <a class="nav-link" aria-current="page" href="{{route('dash.index')}}">Dashboard</a>
          </li>
          <style>
            #linkcadastros{
                color: white;
                opacity: 1;
            }
            #linkcadastros:hover{
                color: black;
                opacity: 0.6;
            }
          </style>
          <li class="nav-item dropdown mt-1 mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastros
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" id="linkcadastros" href="{{route('user.index')}}">Usuarios</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" id="linkcadastros" href="{{route('profile.index')}}">Perfis</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" id="linkcadastros" href="{{route('client.index')}}">Clientes</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" id="linkcadastros" href="{{route('product.index')}}">Produtos/Fornecedores</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" id="linkcadastros" href="{{route('transaction.index')}}">Vendas</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
