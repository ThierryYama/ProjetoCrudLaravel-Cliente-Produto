    @extends('layouts.main')
    
    @section('title', 'Atividade 3')
    @section('h1', 'Atividade 3')
    
    @section('main')
    
    @if ($n > 50)
        @php
        $n_temporaria = $n - 50;
        $e = ($n_temporaria * 20);
        $salario = 50 * 10;
        @endphp
    @else
        $e = 0;
        $salario = $n * 10;
    @endif

    @php
    $soma = $salario + $e;
    @endphp

    <p>Salário total: {{$salario}}</p>
    <p>Salário excedente: {{$e}}</p>
    <p>Salário dos dois: {{$soma}}</p>
    @endsection