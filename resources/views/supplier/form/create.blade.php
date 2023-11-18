
<form action="{{route('supplier.store')}}" method="POST" novalidate>
  @csrf
  @include('supplier.form.validation')
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome do Fornecedor</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="name">
      </div>

      <div class="col-6">
        <label for="username" class="form-label">CPNJ</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" id="username"  name="cnpj">
        </div>
      </div>
      
      
      <hr class="my-4">
      <div class="d-flex justify-content-between">
        <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('product.index')}}">Cancelar</a>
        <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
      </div>
</form>