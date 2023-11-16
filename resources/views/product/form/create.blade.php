@include('product.form.modal_supplier.create')
<form action="{{route('product.store')}}" method="POST" novalidate>
  @csrf
  @include('user.form.validation')
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="name">
      </div>

      <div class="col-6">
        <label for="username" class="form-label">Valor</label>
        <div class="input-group has-validation">
          <span class="input-group-text">R$</span>
          <input type="text" class="form-control" id="username"  name="value">
        </div>
      </div>


      <div class="col-12">
        <label for="lastName" class="form-label">Quantidade</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" name="amount">
      </div>

      <div class="col-12">
        <label for="username" class="form-label">Fornecedor</label>
        <select class="form-select" name="supplier" onchange="mostrarModal(this.value);">
          <option style="color: blue;" value="mostrarModal">Adicionar Novo Fornecedor</option>
          <option selected>Nenhum</option>
        </select>
      </div>

      
      
      
      <hr class="my-4">
      <div class="d-flex justify-content-between">
        <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('product.index')}}">Cancelar</a>
        <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
      </div>
</form>
<script src="{{asset('js/showmodal.js')}}"></script>

