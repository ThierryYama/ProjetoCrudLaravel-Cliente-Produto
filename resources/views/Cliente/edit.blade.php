<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/clienteEdit.css">
    <title>Editar Cliente</title>
    
</head>

<body>
    <div class="container">
        <h1>Editar Cliente</h1>
        <form action="/atualizarCliente/{{$cliente->id}}" method="POST">
            @csrf
            @method('PUT') 
            Nome:
            <input type="text" name="nome" value="{{$cliente->nome}}">
            CPF:
            <input type="text" name="cpf" value="{{$cliente->cpf}}">
            Telefone:
            <input type="text" name="telefone" value="{{$cliente->telefone}}">
            Email:
            <input type="email" name="email" value="{{$cliente->email}}">
    
            <input type="submit">
        </form>
    </div>

</body>

</html>