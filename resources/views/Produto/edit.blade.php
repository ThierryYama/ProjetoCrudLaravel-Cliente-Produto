<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>

<body>

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

        <button type="submit">Atualizar</button>
    </form>

</body>

</html>