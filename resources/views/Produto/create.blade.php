<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/produto.css">
    <title>Cadastrar Produto</title>
</head>
<body>
    
    <div class="container">
        <h1>Cadastrar Produto</h1>
    
        <form action="cadastrarProduto" method="post">
            @csrf
    
            {{session('mensagem')}}
            <p>Nome: <input type="text" name="nome"> </p>
            <p>Descrição: <input type="text" name="descricao"> </p>
            <p>Medida: <input type="text" name="medida"> </p>
            <p>Quantidade: <input type="number" name="quantidade"> </p>
            <p>Preço: <input type="number" name="preco" step="0.01"> </p>
            <input type="submit" value="Cadastrar">
        </form>
    
        <a href="read">Listar Produtos</a> <a href="cadastrarCliente">Cadastro de Clientes</a>
    </div>
</body>
</html>