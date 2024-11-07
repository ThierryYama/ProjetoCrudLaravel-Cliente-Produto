<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/clienteIndex.css">
    <script type="text/javascript" src="./js/filtro.js"> </script>
    <title>Listar Categorias</title>
</head> 
<body>  
    <div class="container">
        <h1>Lista de Categorias</h1>
        <input type="text" id="myInput" onkeyup="filtrar()" placeholder="Pesquisar Categorias..">
        {{ session('mensagem') }}
        @if($categorias->isEmpty())
            <h3>Nenhuma Categoria Cadastrada</h3>
        @else
        <table id="myTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nome}}</td>
                    <td>{{ $categoria->descricao}}</td>
                    <td>
                        <div class="formt">
                            <form action="{{ route('Categorias.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                                @csrf   
                                @method('DELETE')
                                <button type="submit" value="excluir">Deletar</button>
                            </form>
                                <a href="{{ route('Categorias.update', $categoria->id) }}">Editar</a>
                                <a href="{{ route('Categorias.show', $categoria->id) }}">Ver Detalhes</a>    
                                <a href="{{route('dashboard')}}">Dashboard</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</body>
</html>