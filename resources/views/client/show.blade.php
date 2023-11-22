
<button class="btn btn-dark mb-3">
    <i class="bi bi-plus-circle"></i>
    <a class="text-decoration-none text-white" href="{{route('client.create')}}">CRIAR CLIENTE</a>
</button>
<table class="table table-hover text-left">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">CPF</th>
        <th scope="col">Sexo</th>
        <th scope="col">CEP</th>
        <th scope="col">Acoes</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $row)
        <tr>
            <td>{{$row -> name}}</td>
            <td>{{$row -> email}}</td>
            <td class="phone">{{$row -> phone}}</td>
            <td class="cpf">{{$row -> cpf}}</td>
            <td>{{$row -> sexo}}</td>
            <td class="cep">{{$row -> cep}}</td>
            <td>
                <a href="{{route('client.edit', ['id' => $row -> id])}}" class="link-dark mx-1">
                    <i class="bi bi-pencil-square" style="font-size: 20px;"></i>
                </a>
                    <a href="{{route('client.destroy', ['id' => $row -> id])}}" class="link-dark mx-1">
                        <i class="bi bi-trash" style="font-size: 20px; color:red;"></i>
                    </a>

            </td> 
        </tr>
    @endforeach
    </tbody>
</table>
