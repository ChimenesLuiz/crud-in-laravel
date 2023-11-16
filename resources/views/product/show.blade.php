
<button class="btn btn-dark mb-3">
    <i class="bi bi-plus-circle"></i>
    <a class="text-decoration-none text-white" href="{{route('product.create')}}">CRIAR PRODUTO</a>
</button>
<table class="table table-hover text-left">
    <thead>
    <tr>
        <th scope="col">Produto</th>
        {{-- <th scope="col">Categoria</th> --}}
        <th scope="col">Valor</th>
        <th scope="col">Estoque</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Acoes</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($product as $row)
        <tr>
            <td>{{$row -> name}}</td>
            <td>{{$row -> value}}</td>
            <td>{{$row -> amount}}</td>
            <td>{{$row -> supplier}}</td>
            {{-- <td>Categoria do Produto</td> --}}
            <td>
                <a href="{{route('product.edit', ['id' => $row -> id])}}" class="link-dark mx-1">
                    <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                </a>
                <a href="{{route('product.destroy', ['id' => $row -> id])}}" class="link-dark mx-1">
                    <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                </a>
            </td> 
        </tr>
    @endforeach
    </tbody>
</table>
