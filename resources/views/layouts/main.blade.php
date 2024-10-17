<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @for($i=1;$i<=11;$i++)
    <a href="/atividade{{$i}}">Atividade {{$i}}</a>
    @endfor
<h1>@yield('h1')</h1>

@yield('main')

</body>
</html> 