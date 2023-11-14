
<form action="{{route('user.update', ['id' => $data -> id])}}" novalidate>
    @csrf
    @include('user.form.validation')
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Nome</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="{{$data -> name}}" name="name">
        </div>
  
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="{{$data -> last_name}}" name="last_name">
        </div>
  

        <div class="col-6">
          <label for="username" class="form-label">Sexo</label>
          <select class="form-select" name="sexo">
            <option value="feminino" {{($data -> sexo == 'feminino') ? 'selected' : ''}}>Feminino</option>
            <option value="feminino" {{($data -> sexo == 'masculino') ? 'selected' : ''}}>Masculino</option>
            <option value="feminino" {{($data -> sexo == 'apache') ? 'selected' : ''}}>Optimus Prime</option>
          </select>
        </div>

        <div class="col-6">
          <label for="username" class="form-label">Perfil</label>
          <select class="form-select" name="sexo">
            <option value="feminino" {{($data -> id_profile == 1) ? 'selected' : ''}}>Sem Perfil</option>
            <option value="feminino" {{($data -> id_profile == 2) ? 'selected' : ''}}>Colaborador</option>
            <option value="feminino" {{($data -> id_profile == 3) ? 'selected' : ''}}>Administrador</option>
          </select>
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