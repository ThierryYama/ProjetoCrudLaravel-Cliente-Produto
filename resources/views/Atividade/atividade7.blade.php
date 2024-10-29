@extends('layouts.main')
    
    @section('title', 'Atividade 7')
    @section('h1', 'Atividade 7')
    
    @section('main')

    @for ($i=0; $i <500; $i++)
        @php
        $numeros[] = random_int(1, 2000);
        @endphp
    @endfor

    @php
    $valor_maior = max($numeros);
    $valor_menor = min($numeros);

    $totalElementos = count($numeros);
    $somaElementos = array_sum($numeros);

    $valor_medio = $somaElementos / $totalElementos;
    @endphp

    <p>Maior valor é: {{$valor_maior}}</p>
    <p>Menor valor é: {{$valor_menor}}</p>
    <p>"Média é {{$somaElementos}} divido por {{$totalElementos}}: {{$valor_medio}}</p>
    @endsection