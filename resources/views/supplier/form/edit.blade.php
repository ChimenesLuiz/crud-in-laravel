
<form action="{{route('product.update', ['id' => $product -> id])}}" method="POST" novalidate>
  @method('PUT')
  @csrf
  @include('user.form.validation')
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="{{$product -> name}}" name="name">
      </div>

      <div class="col-6">
        <label for="username" class="form-label">Valor</label>
        <div class="input-group has-validation">
          <span class="input-group-text">R$</span>
          <input type="text" class="form-control" id="username"  value="{{$product -> value}}" name="">
        </div>
      </div>


      <div class="col-12">
        <label for="lastName" class="form-label">Quantidade</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="{{$product -> amount}}" name="amount">
      </div>

      

      <div class="col-12">
        <label for="username" class="form-label">Fornecedor</label>
        <select class="form-select" name="supplier">
          <option value="feminino" selected>Feminino</option>
          <option value="masculino">Masculino</option>
          <option value="apache">Optimus Prime</option>
        </select>
        {{-- <select class="form-select" name="sexo">
          <option value="feminino" {{($product -> id_supplier == 1) ? 'selected' : ''}}>Sem Fornecedor</option>
          <option value="feminino" {{($product -> id_supplier == 2) ? 'selected' : ''}}>Colaborador</option>
          <option value="feminino" {{($product -> id_supplier == 3) ? 'selected' : ''}}>Administrador</option>
        </select> --}}
      </div>



    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('product.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>