
<form action="{{route('user.update', ['id' => $data -> id])}}" novalidate>
    @csrf
    @include('user.form.validation')
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Nome</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="{{$data -> nome}}" name="nome">
        </div>
  
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="{{$data -> sobrenome}}" name="sobrenome">
        </div>
  
        <div class="col-12">
          <label for="username" class="form-label">Nome de usuario</label>
          <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="username" value="{{$data -> usuario}}" name="usuario">
          </div>
        </div>
        
        <div class="col-12">
          <label for="lastName" class="form-label">Senha</label>
          <input type="password" class="form-control" id="lastName" placeholder="" value="{{$data -> senha}}" name="senha">
        </div>
  
        <div class="col-12">
          {{-- <span class="text-muted">(Opcional)</span> --}}
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{$data -> email}}" >
        </div>
  
        <div class="col-10">
          <label for="address" class="form-label">CEP</label>
          <input type="text" class="form-control" id="address" value="{{$data -> cep}}" name="cep" >
        </div>
  
        <div class="d-flex col-2 justify-content-center mt-5">
          <button class="btn btn-success w-75">Buscar</button>
        </div>
  
        <div class="col-12">
          <label for="address" class="form-label">Endereco</label>
          <input type="text" class="form-control" id="address" value="{{$data -> endereco}}" name="endereco">
        </div>
  
        <div class="col-6">
          <label for="address" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="address" value="{{$data -> cidade}}" name="cidade" >
        </div>
        
        <div class="col-6">
          <label for="address" class="form-label">Estado</label>
          <input type="text" class="form-control" id="address" value="{{$data -> estado}}" name="estado" >
        </div>
      </div>
      <hr class="my-4">
      <div class="d-flex justify-content-between">
  
        <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('user.index')}}">Cancelar</a>
        <input class="w-25 btn btn-primary" type="submit" value="Editar">
      </div>
    </form>