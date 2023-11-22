
<form action="{{route('client.store')}}" method="POST" novalidate>
  @csrf
  @include('client.form.validation')
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="name">

      </div>

      <div class="col-sm-6">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" name="last_name">
      </div>

      <div class="col-12">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Telefone 1</label>
        <input type="text" class="form-control" id="phone" name="phone">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Telefone 2</label>
        <input type="text" class="form-control" id="phone2" name="phone2">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf">
      </div>

      <div class="col-sm-6">
        {{-- <span class="text-muted">(Opcional)</span> --}}
        <label for="email" class="form-label">Data de Nascimento</label>
        <input class="form-control" name="nascimento" id="date" placeholder="DD-MM-YYYY">
      </div>

      <div class="col-12">
        <label for="username" class="form-label">Sexo</label>
        <select class="form-select" name="sexo">
          <option value="feminino" selected>Feminino</option>
          <option value="masculino">Masculino</option>
          <option value="apache">Optimus Prime</option>
        </select>
      </div>

      
      <div class="col-10">
        <label for="address" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep">
      </div>

      <a class="d-flex col-2 justify-content-center mt-5 btn btn-success text-decoration-none text-white" href="{{route('user.index')}}">Buscar</a>

      <div class="col-12">
        <label for="address" class="form-label">Endereco</label>
        <input type="text" class="form-control" id="address" name="endereco">
      </div>

      <div class="col-6">
        <label for="address" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="address" name="cidade">
      </div>
      
      <div class="col-6">
        <label for="address" class="form-label">Estado</label>
        <input type="text" class="form-control" id="address" name="estado">
      </div>
    </div>
    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('client.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>
