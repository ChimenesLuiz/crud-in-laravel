
<div class="mx-1 w-50">
    <button class="btn btn-dark mb-3">
        <i class="bi bi-plus-circle"></i>
        <a class="text-decoration-none text-white" href="{{route('supplier.create')}}">FORNECEDOR</a>
    </button>
    <table class="table table-hover text-left">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            {{-- <th scope="col">Categoria</th> --}}
            <th scope="col">CNPJ</th>
            <th scope="col">Acoes</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{$row -> supplier_name}}</td>
                <td>{{$row -> supplier_cnpj}}</td>
                <td>
                    <a href="{{route('supplier.edit', ['id' => $row -> supplier_id])}}" class="link-dark mx-1">
                        <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                    </a>
                    <a href="{{route('supplier.destroy', ['id' => $row -> supplier_id])}}" class="link-dark mx-1">
                        <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                    </a>
                </td> 
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

