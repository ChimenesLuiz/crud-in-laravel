
<form action="{{route('profile.update', ['id' => $data -> id])}}" method="POST" novalidate>
  @method('PUT')
  @csrf
  @include('profile.form.validation')
  <div class="row g-3">

    <div class="col-12">
      <label for="firstName" class="form-label">Nome</label>
      <input type="text" class="form-control" id="firstName" placeholder="" value="{{$data -> name}}" name="name">
    </div>

    <div class="col-12">
      <div class="d-flex justify-content-between">
        <div class="form-check form-switch" style="font-size: 25px">
          <input class="form-check-input" name="usuario" type="checkbox" id="flexSwitchCheckChecked" {{(($data -> usuario) === 1) ? 'checked' : ''}}>
          <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Usuarios</label>
        </div>

        <div class="d-flex justify-content-between">
          <div class="form-check form-switch" style="font-size: 25px">
            <input class="form-check-input" name="cliente" type="checkbox" id="flexSwitchCheckChecked" {{(($data -> cliente) === 1) ? 'checked' : ''}}>
            <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Clientes</label>
          </div>

          <div class="d-flex justify-content-between">
            <div class="form-check form-switch" style="font-size: 25px">
              <input class="form-check-input" name="perfil" type="checkbox" id="flexSwitchCheckChecked" {{(($data -> perfil) === 1) ? 'checked' : ''}}>
              <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Perfis</label>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="form-check form-switch" style="font-size: 25px">
              <input class="form-check-input" name="produto" type="checkbox" id="flexSwitchCheckChecked" {{(($data -> produto) === 1) ? 'checked' : ''}}>
              <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Produtos</label>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="form-check form-switch" style="font-size: 25px">
              <input class="form-check-input" name="venda" type="checkbox" id="flexSwitchCheckChecked" {{(($data -> venda) === 1) ? 'checked' : ''}}>
              <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Vendas</label>
          </div>
      </div>
    </div>
  </div>

    <hr class="my-4">

    <div class="col-12">
      <div class="d-flex justify-content-between">
        <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('profile.index')}}">Cancelar</a>
        <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
      </div>
    </div>
</form>