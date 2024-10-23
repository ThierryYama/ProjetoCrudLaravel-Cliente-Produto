<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./js/filtro.js"> </script>
    <title>Listar Produtos</title>
</head>

<body>

    <input type="text" id="myInput" onkeyup="filtrar()" placeholder="Pesquisar Produtos..">
    <!-- feito com ajuda de: https://www.w3schools.com/howto/howto_js_filter_table.asp-->


    <table id="myTable">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Medida</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        @foreach ($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->medida}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->preco}}</td>
                <td>
                    <form action="deletarProduto/{{ $produto->id}}" method="POST"
                        onsubmit="return confirm('TEM CERTEZA?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>

                </td>

                <td>
                    <a href="editarProduto/{{$produto->id}}">Editar</a>
                </td>
            </tr>

        @endforeach


    </table>

</body>

</html>