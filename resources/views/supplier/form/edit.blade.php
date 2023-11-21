
<form action="{{route('supplier.update', ['id' => $supplier_data -> id])}}" method="POST" novalidate>
  @method('PUT')
  @csrf
  @include('user.form.validation')
      <div class="col-12">
        <label for="lastName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="{{$supplier_data -> name}}" name="name">
      </div>
      <div class="col-12">
        <label for="lastName" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="{{$supplier_data -> cnpj}}" name="cnpj">
      </div>

    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('product.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>