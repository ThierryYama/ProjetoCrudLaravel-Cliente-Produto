
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/clienteCreate.css">
    <title>Cadastrar Cliente</title>

</head>
<body>

    <div class="container">
        <h1>Cadastrar Cliente</h1>
    
        <form action="cadastrarCliente" method="post">
            @csrf
    
            {{session('mensagem')}}
            <p>Nome: <input type="text" name="nome"> </p>
            <p>CPF: <input type="text" name="cpf"> </p>
            <p>Telefone: <input type="text" name="telefone"> </p>
            <p>Email: <input type="email" name="email"> </p>
    
            <input type="submit" value="Cadastrar">
        </form>
    
        <a href="/listarCliente">Listar Clientes</a>
        <a href="{{route('dashboard')}}">Dashboard</a>
    </div>
</body>
</html>