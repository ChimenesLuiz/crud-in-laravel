
<div class="">
  <!-- Account page navigation-->
  <nav class="nav nav-borders">
      <a class="nav-link active ms-0">Conta</a>
      <a class="nav-link" href="{{route('account.password', ['id' => Auth::user() -> id])}}">Seguranca</a>

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
                 
                  <!-- Profile picture help block-->
                  <div class="small font-italic text-muted mb-4">JPG or PNG menor que 5MB</div>
                  <!-- Profile picture upload button-->.
                  <div class="mb-3 w-100">
                    <form action="{{route('account.update', ['id' => $account -> id])}}" method="POST" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      @include('account.form.validation')
                    <label for="formFile" class="form-label">Escolha sua foto</label>
                    <input accept="image/*" onchange="previewImage()" id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"autocomplete="avatar">
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
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputFirstName">Nome</label>
                              <input class="form-control" name="name" id="inputFirstName" type="text"  value="{{$account -> name}}">
                          </div>
                          <!-- Form Group (last name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputLastName">Sobrenome</label>
                              <input class="form-control" id="inputLastName" name="last_name" type="text"  value="{{$account -> last_name}}">
                          </div>
                      </div>


                        {{-- <div class="row gx-1 mb-3">
                          <label for="username" class="form-label">Sexo</label>
                          <select class="form-select" name="sexo">
                            <option value="feminino" {{($account -> sexo == 'feminino') ? 'selected' : ''}}>Feminino</option>
                            <option value="masculino" {{($account -> sexo == 'masculino') ? 'selected' : ''}}>Masculino</option>
                            <option value="apache" {{($account -> sexo == 'apache') ? 'selected' : ''}}>Optimus Prime</option>
                          </select>
                        </div> --}}


                    <div class="row gx-1 mb-3">

                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" value="{{$account -> email}}" name="email">
                    </div>
{{-- 
                    <div class="row gx-3 mb-3">
                      <div class="col-md-10">
                        <label for="address" class="form-label">CEP</label>
                        <input type="text" name="cep" class="form-control" id="address" value="{{$account -> cep}}" name="cep">
                      </div>
                      
                      <button class="col-md-2 btn btn-success mt-4"><a class="text-decoration-none text-white" href="{{route('user.index')}}">Buscar</a></button>
                    </div>

                    <div class="row gx-1 mb-3">
                      <label for="address" class="form-label">Endereco</label>
                      <input type="text" class="form-control" id="address" value="{{$account -> endereco}}" name="endereco">
                    </div>

                    <div class="row gx-3 mb-3">

                      <div class="col-md-6">
                        <label for="address" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="address" value="{{$account -> cidade}}" name="cidade">
                      </div>
                      
                      <div class="col-md-6">
                        <label for="address" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="address" value="{{$account -> estado}}" name="estado">
                      </div>
                    </div> --}}
                    
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
