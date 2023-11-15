<nav class="col-sm-2 bg-primary p-0">
    <div class="w-100 h-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="bi bi-feather" style="font-size: 30px;"></i>
       <h3 class="mx-3">CRM LUIZ</h3>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="container w-100">
            <button type="button" class="btn btn-light w-100 mb-3">  
                <a href="{{route('home.index')}}" class="text-dark text-decoration-none">
                    <i class="bi bi-house"></i>
                    HOME
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('user.index')}} "class="text-dark text-decoration-none">
                    <i class="bi bi-people"></i>
                    USER
                </a>
            </button>
        </li>

        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('profile.index')}} "class="text-dark text-decoration-none">
                    <i class="bi bi-people"></i>
                    PROFILE
                </a>
            </button>
        </li>
        
        <li class="container w-100">
            <button class="btn btn-light w-100 mb-3">  
                <a href="{{route('product.index')}} "class="text-dark text-decoration-none">
                    <i class="bi bi-box"></i>
                    PRODUCT
                </a>
            </button>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
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