
<form action="{{route('transaction.store')}}" method="POST" novalidate>
  @csrf
  @include('transaction.form.validation')
    <div class="row g-3">
      <input type="text" name="id_user" value="{{Auth() -> user() -> id}}" hidden>

      <div class="col-12">
        <label for="username" class="form-label">Cliente</label>
        <select class="form-select" name="id_client">
          @foreach ($client_data as $row)
          <option value="{{$row -> id}}">{{$row -> name}}</option>  
          @endforeach

        </select>
      </div>
      <div class="col-12">
        <label for="username" class="form-label">Produto</label>
        <select class="form-select" name="id_product" id="product">
          <option value="" selected>Escolha um produto</option>
          @foreach ($product_data as $row)
          <option productAmount="{{$row -> amount}}" productValue="{{$row -> value}}" value="{{$row -> id}}">{{$row -> name}}</option>  
          @endforeach

        </select>
      </div>
      <div class="col-sm-8">
        <label for="firstName" class="form-label">Quantidade</label>
        <select class="form-select" id="transactionAmount" name="amount" onchange="calc_total_transaction(this.value);"></select>
        <div id="msgerror" style="position: absolute"></div>
      </div>

      <div class="col-sm-4">
        <label for="username" class="form-label">Total</label>
        <div class="input-group has-validation">
          <span class="input-group-text">R$</span>
          <input type="text" class="form-control total" id="total"  name="total" value="">
        </div>
      </div>
      <input type="hidden" id="new_amount" name="new_amount" value="">
      

    <hr class="my-4">
    <div class="d-flex justify-content-between">

      <a class="w-25 btn btn-danger text-decoration-none text-white" href="{{route('transaction.index')}}">Cancelar</a>
      <input class="w-25 btn btn-primary" type="submit" value="Cadastrar">
    </div>
  </form>
