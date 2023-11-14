
<form action="{{route('profile.store')}}" novalidate>
  @csrf
  @include('profile.form.validation')
    <div class="row g-3">
      <div class="col-12">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="name">
      </div>

      <div class="d-flex justify-content-between">
        <div class="form-check form-switch" style="font-size: 25px">
          <input class="form-check-input" name="usuario" type="checkbox" id="flexSwitchCheckChecked" >
          <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Usuarios</label>
        </div>

          <div class="form-check form-switch" style="font-size: 25px">
            <input class="form-check-input" name="perfil" type="checkbox" id="flexSwitchCheckChecked" >
            <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Perfis</label>
          </div>

        <div class="form-check form-switch" style="font-size: 25px">
          <input class="form-check-input" name="produto" type="checkbox" id="flexSwitchCheckChecked" >
          <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Produtos</label>
        </div>

        <div class="form-check form-switch" style="font-size: 25px">
          <input class="form-check-input" name="venda" type="checkbox" id="flexSwitchCheckChecked" >
          <label class="form-check-label" for="flexSwitchCheckChecked">Gerenciar Vendas</label>
        </div>
      </div>



    <hr class="my-4">
    <br>
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('profile.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>