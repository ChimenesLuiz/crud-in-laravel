
<button class="btn btn-dark mb-3">
    <i class="bi bi-plus-circle"></i>
    <a class="text-decoration-none text-white" href="{{route('transaction.create')}}">CRIAR VENDA</a>
</button>
<table class="table table-hover text-left">
    <thead>
    <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Cliente</th>
        <th scope="col">Produto</th>
        <th scope="col">Acoes</th>
    </tr>
    </thead>
    <tbody>
    {{-- @foreach ($data as $row) --}}
        <tr>
            {{-- <td>{{$row -> id_user}}</td>
            <td>{{$row -> id_client}}</td>
            <td>{{$row -> id_product}}</td> --}}
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>
                <a href="" class="link-dark mx-1">
                    <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                </a>
                    <a href="" class="link-dark mx-1">
                        <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                    </a>

            </td> 
        </tr>
    {{-- @endforeach --}}
    </tbody>
</table>
