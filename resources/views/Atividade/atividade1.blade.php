    @extends('layouts.main')
    
    @section('title', 'Atividade 1')
    @section('h1', 'Atividade 1')
    
    @section('main')
    @foreach($numeros as $numero)
        @php
        $numero = $numero * $numero;
        $novos_numeros[] = $numero;
        @endphp
    @endforeach

    @php
    $terceiro = $novos_numeros[2];
    @endphp

    @if($terceiro >= 1000)
        @php
        echo $terceiro;
        die();
        @endphp
    @else
        @foreach ($numeros as $numero)
        <p>Numeros da lista: {{$numero}}</p>
        @endforeach
        
        @foreach ($novos_numeros as $novo_numero)
        <p>Numeros Quadrados: {{$novo_numero}}</p>
        @endforeach

    @endif
    @endsection