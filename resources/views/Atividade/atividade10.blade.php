    @extends('layouts.main')
    
    @section('title', 'Atividade 10')
    @section('h1', 'Atividade 10')
    
    @section('main')

    @for ($i=1; $i<=20;$i++)
        @php
        $numeros[] = $i;
        @endphp
    @endfor

    @php
    $somaNumeros = array_sum($numeros);
    @endphp

    <p>"A soma dos numeros do array de 1 a 20 é: {{$somaNumeros}}</p>
    @endsection