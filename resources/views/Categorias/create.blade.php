
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/clienteCreate.css">
    <title>Cadastrar Categoria</title>

</head>
<body>

    <div class="container">
        <h1>Cadastrar Categoria</h1>
        <form action="{{ route('Categorias.store') }}" method="post">
            @csrf
    
            {{session('mensagem')}}
            <p>Nome: <input type="text" name="nome"> </p>
            <p>Descrição:<textarea name="descricao" cols="20" rows="4"></textarea></p>
            
            <input type="submit" value="Cadastrar">
        </form>
    
        <a href="{{ route('Categorias.index') }}">Listar Categorias</a>
        <a href="{{route('dashboard')}}">Dashboard</a>
    </div>
</body>
</html>