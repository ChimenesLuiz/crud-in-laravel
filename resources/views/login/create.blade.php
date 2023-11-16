@extends('login.header')
@section('login.index')

<div class="container-fluid p-5 h-100 w-100">
    @include('login.validation')
  <div class="card card0 border-0 h-100">
      <div class="row d-flex h-100 align-items-center">
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
              <div class="card2 card border-0 px-4 py-5 ">
                  <div class="d-flex mb-4">
                      <h6 class="mb-0 mx-2 mt-2">Cadastrar com: </h6>
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
                      <label class="mb-1"><h6 class="mb-0 text-sm">Nome</h6></label>
                      <input class="mb-4" type="text" value="luiz" name="name" placeholder="Digite seu nome">
                  </div>

                  <div class="row px-3">
                      <label class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                      <input class="mb-4" type="text" name="email"  value="luiz@email.com" placeholder="Digite seu email">
                  </div>
                
                <div class="row px-3">
                    <label class="mb-1"><h6 class="mb-0 text-sm">Senha</h6></label>
                    <input class="mb-4" type="password" name="password"  value="123" placeholder="Digite sua senha">
                </div>

                  <div class="d-flex justify-content-between my-5 px-1 ">
                        <a class="btn btn-danger text-center w-25 rounded-0" href="{{route('login.index')}}">Voltar</a>
                        <button type="submit" class="btn btn-blue w-25 text-center">Registrar-se</button>
                  </div>
              </div>
            </form>
          </div>
      </div>
      <div class="bg-blue py-4">
          <div class="row px-3">
              <small class="">No Copyright &copy; 2023. Open source system developed by Luiz Guilherme Chimenes.</small>
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