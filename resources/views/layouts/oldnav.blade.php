<nav class="col-sm-2 bg-primary p-0">
    <div class="w-100 h-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
        <div class="d-flex justify-content-center">

            <img src="https://cdn.freelogodesign.org/files/0745f4cddafe40fcb170003a197e76e7/thumb/logo_200x200.png?v=0" class="img-fluid" style="max-width: 30%; height: auto;" alt="">
            {{-- <i class="bi bi-feather" style="font-size: 30px;"></i> --}}
           {{-- <h3 class="mx-3">CRM LUIZ</h3> --}}
        </div>

   
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="container w-100">
            <button type="button" class="btn btn-light w-100 mb-3">  
                <a href="{{route('dash.index')}}" class="text-dark text-decoration-none">
                    <i class="bi bi-speedometer2"></i>
                    DASHBOARD
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('user.index')}} "class="text-dark text-decoration-none">
                    <i class="bi bi-people"></i>
                    USUARIOS
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('profile.index')}} "class="text-dark text-decoration-none">
                    <i class="bi bi-people"></i>
                    PERFIS
                </a>
            </button>
        </li>
        
        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('product.index')}} "class="text-dark text-decoration-none">
                    <i class="bi bi-box"></i>
                    PRODUTOS
                </a>
            </button>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        {{-- <!-- Default dropup button -->
        <div class="btn-group dropup">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropup
            </button>
            <div class="dropdown-menu">
            <!-- Dropdown menu links -->
            </div>
        </div> --}}
        <a href="" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://avatars.githubusercontent.com/u/122306667?s=400&u=fe9a98d87cda3a0159fcf0d9f6460a12ca26b28e&v=4" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{(auth() -> user() -> name ?? 'User')}} </strong>
           
        
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{route('login.destroy')}}">Sign out</a></li>
        </ul>
    </div>
    </div>
</nav>