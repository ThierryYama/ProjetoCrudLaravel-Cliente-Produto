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
        <h1>Cliente: {{$cliente->nome}}</h1>
    
        <p><span>Cpf:</span> {{$cliente->cpf}} </p>
        <p><span>Telefone:</span> {{$cliente->telefone}} </p>
        <p><span>Email:</span> {{$cliente->email}} </p>

        <a href="{{route('listarCliente')}}">Voltar</a>
    </div>
</body>
</html>