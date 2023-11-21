
<form action="{{route('transaction.update', ['id' => $inner_data -> id_transaction])}}" method="POST" novalidate>
    @method('PUT')
    @csrf
    @include('user.form.validation')
    <div class="row g-3">
      <input type="text" name="id_user" value="{{Auth() -> user() -> id}}" hidden>

      <div class="col-12">
        <label for="username" class="form-label">Cliente</label>
        <select class="form-select"  name="id_client">
          @foreach ($client_data as $row)
          @if ($row -> id == $inner_data -> id_client)
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
          @endif
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
          @endforeach

        </select>
      </div>
      <div class="col-12">
        <label for="username" class="form-label">Produto</label>
        <select class="form-select" name="id_product">
          @foreach ($product_data as $row)
          @if ($row -> id == $inner_data -> id_product)
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
          @endif
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
          @endforeach

        </select>
      </div>
      <div class="col-sm-8">
        <label for="firstName" class="form-label">Quantidade</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="{{$inner_data -> amount}}" name="amount">

      </div>

      <div class="col-sm-4">
        <label for="username" class="form-label">Total</label>
        <div class="input-group has-validation">
          <span class="input-group-text">R$</span>
          <input type="text" class="form-control" id="username" value="{{$inner_data -> total}}" name="total">
        </div>
      </div>
      

    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('transaction.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>