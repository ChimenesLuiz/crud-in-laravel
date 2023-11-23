
<div class="">
  <!-- Account page navigation-->
  <nav class="nav nav-borders">
      <a class="nav-link active ms-0" href="{{route('account.edit', ['id' => Auth::user() -> id])}}">Conta</a>
      <a class="nav-link">Seguranca</a>

  </nav>
  <hr class="mt-0 mb-4">
  <div class="d-flex justify-content-between">
      <div class="col-4">
          <!-- Profile picture card-->
          <div class="card h-100 mx-1">
              <div class="card-header">Foto de perfil</div>
              <div class="card-body text-center">
                  <!-- Profile picture image-->
                  {{-- <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt=""> --}}
                  <div class="d-flex w-100 mb-2 card" style="width: 18rem;">
                    <img id="avatarPreview" src="/avatars/{{ Auth::user()->avatar }}">
                  </div>
                  <div class="mb-3 w-100">
                    <form action="{{route('account.passwordUpdate', ['id' => $account -> id])}}" method="POST" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      @include('account.form.validation')
                  </div>
                  {{-- <button id="avatar" class="btn btn-primary" name="avatar" value="{{ old('avatar') }}" type="file">Escolher imagem</button> --}}
              </div>
          </div>
      </div>
      <div class="col-8 mx-1">
          <!-- Account details card-->
          <div class="card h-100">
              <div class="card-header text-center"><strong>Perfil - Administrador</strong></div>
              <div class="card-body">

                        <div class="row gx-3 mb-3">
                              <label class="small mb-1" for="inputFirstName">Senha Antiga</label>
                              <input class="form-control" name="current_password" id="inputFirstName" type="password"  value="">
                          </div>
                        <div class="row gx-3 mb-3">
                            <label class="small mb-1" for="inputFirstName">Nova Senha</label>
                            <input class="form-control" name="password" id="inputFirstName" type="password"  value="">
                        </div>
                        <div class="row gx-3 mb-3">
                          <label class="small mb-1" for="inputFirstName">Confirmar Nova Senha</label>
                          <input class="form-control" name="password_confirmation" id="inputFirstName" type="password"  value="">
                        </div>
                      

                        <div class="row gx-1 mb-3">
                          <div class="col-md-10"></div>
                          <input type="submit" class="btn btn-primary col-md-2 text-center" value="Salvar">
    
                        </div>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{asset('js/change_avatar.js')}}"></script>
