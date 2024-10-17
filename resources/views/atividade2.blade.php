    @extends('layouts.main')
    
    @section('title', 'Atividade 2')
    @section('h1', 'Atividade 2')
    
    @section('main')
    
    @if ($numero % 2 ==0 )
        <p>{{$numero}} é par</p>
    @else
        <p>{{$numero}} é impar</p>
    @endif


    @if ($numero < 0)
        <p>{{$numero}} é negativo</p>
    @else
        <p>{{$numero}} é positivo</p>
    @endif
    @endsection
