<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/show.css">
    <title>Ver Detalhes</title>
</head>

<body>
    <div class="container">
        <h1>Produto: {{$produto->nome}}</h1>

        <p><span>Descrição:</span> {{$produto->descricao}} </p>
        <p><span>Medida:</span> {{$produto->medida}} </p>
        <p><span>Quantidade:</span> {{$produto->quantidade}} </p>
        <p><span>Preço:</span> {{$produto->preco}} </p>

        <a href="{{route('listarProduto')}}">Voltar</a>
    </div>
</body>

</html>