@extends('login.header')
@section('login.index')

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    @include('login.validation')
  <div class="card card0 border-0">
      <div class="row d-flex">
          <div class="col-lg-6">
              <div class="card1 pb-5">
                  <div class="row">
                      <img src="https://i.imgur.com/CXQmsmF.png" class="logo">
                  </div>
                  <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                      <img src="https://i.imgur.com/uNGdWHi.png" class="image">
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
            <form action="{{route('login.store')}}" method="POST">
                @csrf
              <div class="card2 card border-0 px-4 py-5">
                  <div class="d-flex">
                      <h6 class="mb-0 mx-2 mt-2">Entrar com: </h6>
                      <div class="d-flex mx-3 w-25 justify-content-between">
                        <a href=""><i class="bi bi-google" style="font-size: 30px;"></i></a>
                        <a href=""><i class="bi bi-github" style="font-size: 30px;"></i></a>
                        <a href=""><i class="bi bi-twitter-x" style="font-size: 30px;"></i></a>
                      </div>
                  </div>
                  <div class="row px-3 mb-4">
                      <div class="line"></div>
                      <small class="or text-center">Ou</small>
                      <div class="line"></div>
                  </div>
                  <div class="row px-3">
                      <label class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                      <input class="mb-4" type="text" value="luiz@email.com" name="email" placeholder="Digite seu Email">
                  </div>
                  <div class="row px-3">
                      <label class="mb-1"><h6 class="mb-0 text-sm">Senha</h6></label>
                      <input type="password" name="password"  value="123" placeholder="Digite sua senha">
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex my-3 px-1">
                        <label for="">Lembrar-se: </label>
                            <div class="form-check">
                                <input class="mx-1 my-1 form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                            </div>
                    </div>
                      <a href="" class="ml-auto my-3 px-1 text-primary">Esqueceu a senha?</a>
                  </div>
                  <div class="row mb-3 px-3">
                      <button type="submit" class="btn btn-blue text-center w-100">Login</button>
                  </div>
                  <div class="row mb-4 px-1">
                      <h6 class="font-weight-bold">Nao tem um conta? <a class="text-primary ">Registre-se</a></h6>
                  </div>
              </div>
            </form>
          </div>
      </div>
      <div class="bg-blue py-4">
          <div class="row px-3">
              <small class="ml-4 ml-sm-5 mb-2">No Copyright &copy; 2023. Open source system developed by Luiz Guilherme Chimenes.</small>
              <div class="social-contact ml-4 ml-sm-auto">
                  <span class="fa fa-facebook mr-4 text-sm"></span>
                  <span class="fa fa-google-plus mr-4 text-sm"></span>
                  <span class="fa fa-linkedin mr-4 text-sm"></span>
                  <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection