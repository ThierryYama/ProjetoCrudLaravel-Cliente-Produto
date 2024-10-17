<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    
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

    <a href="">Listar Clientes</a>
</body>
</html>