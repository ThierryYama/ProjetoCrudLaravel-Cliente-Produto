<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/produtoEdit.css">
    <title>Editar Produto</title>
</head>

<body>
    <div class="container">
        <h1>Atualizar Produto</h1>
        <form action="/atualizarProduto/{{$produto->id}}" method="POST">
            @csrf
            @method('PUT') 
            Nome:
            <input type="text" name="nome" value="{{$produto->nome}}">
            Descrição:
            <input type="text" name="descricao" value="{{$produto->descricao}}">
            Medida:
            <input type="text" name="medida" value="{{$produto->medida}}">
            Quantidade:
            <input type="number" name="quantidade" value="{{$produto->quantidade}}">
            Preço:
            <input type="number" name="preco" value="{{$produto->preco}}" step="0.01">
    
            <input type="submit"> 
        </form>
        <a href="{{route('listarProduto')}}">Listar Produtos </a>  <a href="{{route('dashboard')}}">Dashboard</a>
    </div>

</body>

</html>