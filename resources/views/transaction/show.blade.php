
<button class="btn btn-dark mb-3">
    <i class="bi bi-plus-circle"></i>
    <a class="text-decoration-none text-white" href="{{route('transaction.create')}}">CRIAR VENDA</a>
</button>
<table class="table table-hover text-left">
    <thead>
    <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Cliente</th>
        <th scope="col">Telefone</th>
        <th scope="col">Produto</th>
        <th scope="col">Valor Produto</th>
        <th scope="col">TOTAL</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $row)
        <tr>
            <td>{{Auth() -> user() -> name}}</td>
            <td>{{$row -> client_name}}</td>
            <td>{{$row -> client_phone}}</td>
            <td>{{$row -> product_name}}</td>
            <td>{{$row -> product_value}}</td>
            <td>{{$row -> transaction_total}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
