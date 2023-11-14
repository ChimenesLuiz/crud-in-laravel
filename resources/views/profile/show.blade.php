
<button class="btn btn-dark mb-3">
    <i class="bi bi-plus-circle"></i>
    <a class="text-decoration-none text-white" href="{{route('profile.create')}}">CRIAR PERFIL</a>
</button>
<table class="table table-hover text-left">
    <thead>
    <tr>
        <th scope="col">Perfil</th>
        <th scope="col">Gerenciar Usuarios</th>
        <th scope="col">Gerenciar Perfis</th>
        <th scope="col">Gerenciar Produtos</th>
        <th scope="col">Gerenciar Vendas</th>
        <th scope="col">Acoes</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $row)
        <tr>
            <td>{{$row -> name}}</td>
            <td>{{($row -> usuario === 1) ? 'ON' : 'OFF'}}</td>
            <td>{{($row -> perfil === 1) ? 'ON' : 'OFF'}}</td>
            <td>{{($row -> produto === 1) ? 'ON' : 'OFF'}}</td>
            <td>{{($row -> venda === 1) ? 'ON' : 'OFF'}}</td>
            <td>
                <a href="{{route('profile.edit', ['id' => $row -> id])}}" class="link-dark mx-1">
                    <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                </a>
                <a href="{{route('profile.destroy', ['id' => $row -> id])}}" class="link-dark mx-1">
                    <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                </a>
            </td> 
        </tr>
    @endforeach
    </tbody>
</table>
