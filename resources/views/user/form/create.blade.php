<form action="{{route('user.store')}}" class="container px-5" novalidate>
    @csrf
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nome" required>
      </div>

      <div class="col-sm-6">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" name="sobrenome" required>
        <div class="invalid-feedback">
          Informe seu Sobrenome
        </div>
      </div>

      <div class="col-12">
        <label for="username" class="form-label">Nome de usuario</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="username"  name="usuario" required>
          <div class="invalid-feedback">
            Informe seu Nome de usuario
          </div>
        </div>
      </div>
      
      <div class="col-12">
        <label for="lastName" class="form-label">Senha</label>
        <input type="password" class="form-control" id="lastName" placeholder="" value="" name="senha" required>
        <div class="invalid-feedback">
          Informe sua Senha
        </div>
      </div>

      <div class="col-12">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
          Informe seu email
        </div>
      </div>

      <div class="col-10">
        <label for="address" class="form-label">CEP</label>
        <input type="text" class="form-control" id="address" name="cep" required>
        <div class="invalid-feedback">
          Informe seu CEP
        </div>
      </div>

      <div class="d-flex col-2 justify-content-center mt-5">
        <button class="btn btn-success w-75">Buscar</button>
      </div>

      <div class="col-12">
        <label for="address" class="form-label">Endereco</label>
        <input type="text" class="form-control" id="address" name="endereco" required>
        <div class="invalid-feedback">
          Informe seu endereco
        </div>
      </div>

      <div class="col-6">
        <label for="address" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="address" name="cidade" required>
        <div class="invalid-feedback">
          Informe sua cidade
        </div>
      </div>
      
      <div class="col-6">
        <label for="address" class="form-label">Estado</label>
        <input type="text" class="form-control" id="address" name="estado" required>
        <div class="invalid-feedback">
          Informe seu Estado
        </div>
      </div>
    </div>
    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('user.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>