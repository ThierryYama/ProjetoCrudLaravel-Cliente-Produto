<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/clienteIndex.css">
    <script type="text/javascript" src="./js/filtro.js"> </script>
    <title>Listar Clientes</title>
</head> 
<body>  
    <div class="container">
        <h1>Lista de Clientes</h1>
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
                        <div class="formt">
                            <form action="deletarCliente/{{ $cliente->id}}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                                @csrf   
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>
    
                        
                                <a href="editarCliente/{{$cliente->id}}">Editar</a>
                                <a href="mostrarCliente/{{$cliente->id}}">Ver Detalhes</a>    
                                <a href="{{route('dashboard')}}">Dashboard</a>
                        </div>
                    </td>
    
                    
                   
                </tr>
    
            @endforeach
    
    
        </table>

    </div>

</body>
</html>