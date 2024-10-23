<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./js/cliente.js"> </script>
    <title>Listar Clientes</title>
</head> 
<body>  
    
    <input type="text" id="myInput" onkeyup="filtrar()" placeholder="Pesquisar Clientes..">
   <!-- feito com ajuda de: https://www.w3schools.com/howto/howto_js_filter_table.asp-->
   <!-- e  https://www.youtube.com/watch?v=VhORHExINuQ -->

    <table id="myTable">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->email}}</td>
                <td>
                    <form action="deletarCliente/{{ $cliente->id}}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                        @csrf   
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>

                </td>

                <td>
                    <a href="editarCliente/{{$cliente->id}}">Editar</a>
                </td>
                <td><a href="{{route('dashboard')}}">Dashboard</a></td>
            </tr>

        @endforeach


    </table>

</body>
</html>