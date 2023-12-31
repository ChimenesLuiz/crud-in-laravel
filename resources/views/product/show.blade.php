<div class="d-flex justify-content-between">

    <div class="mx-1 w-50">
        <button class="btn btn-dark mb-3">
            <i class="bi bi-plus-circle"></i>
            <a class="text-decoration-none text-white" href="{{route('product.create')}}">CRIAR PRODUTO</a>
        </button>
        <table class="table table-hover text-left">
            <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Valor</th>
                <th scope="col">Estoque</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Acoes</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $row)
                @isset($row -> product_id)
                <tr>
                    <td>{{$row -> product_name}}</td>
                    <td class="value" >{{$row -> value}}</td>
                    <td>{{$row -> amount}}</td>
                    <td>{{$row -> supplier_name}}</td>
                    <td>
                        <a href="{{route('product.edit', ['id' => $row -> product_id])}}" class="link-dark mx-1">
                            <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                        </a>
                        <a href="{{route('product.destroy', ['id' => $row -> product_id])}}" class="link-dark mx-1">
                            <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                        </a>
                    </td> 
                </tr>
                @endisset
            @endforeach
            </tbody>
        </table>
    </div>
    @include('supplier.show')
</div>
