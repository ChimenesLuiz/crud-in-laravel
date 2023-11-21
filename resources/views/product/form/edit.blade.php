
<form action="{{route('product.update', ['id' => $product_data -> id])}}" method="POST" novalidate>
  @method('PUT')
  @csrf
  @include('user.form.validation')
  <div class="col-12 d-flex justify-content-between mb-3">
    <div class="" style="width: 85%">
      <label for="username" class="form-label">Fornecedor</label>
      <select class="form-select" name="id_supplier">
        <option value="void" selected>Nenhum</option>
        @foreach ($supplier_data as $row)
        @if ($row -> id == $product_data -> id_supplier)
        <option selected value="{{$row -> id}}">{{$row -> name}}</option>  
        @endif
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
        @endforeach
      </select>
    </div>
    <button type="button" class="btn btn-success mt-3" data-toggle="modal" style="width: 10%;" data-target="#exampleModal">Adicionar</button>
  </div>


    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Produto nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="{{$product_data -> name}}" name="name">
      </div>

      <div class="col-6">
        <label for="username" class="form-label">Valor</label>
        <div class="input-group has-validation">
          <span class="input-group-text">R$</span>
          <input type="text" value="{{$product_data -> value}}" class="form-control" id="username"  name="value">
        </div>
      </div>


      <div class="col-12">
        <label for="lastName" class="form-label">Quantidade</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="{{$product_data -> amount}}" name="amount">
      </div>

      
      
      <hr class="my-4">
      <div class="d-flex justify-content-between">
        <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('product.index')}}">Cancelar</a>
        <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
      </div>
</form>

          {{-- <select class="form-select" name="sexo">
          <option value="feminino" {{($product -> id_supplier == 1) ? 'selected' : ''}}>Sem Fornecedor</option>
          <option value="feminino" {{($product -> id_supplier == 2) ? 'selected' : ''}}>Colaborador</option>
          <option value="feminino" {{($product -> id_supplier == 3) ? 'selected' : ''}}>Administrador</option>
        </select> --}}