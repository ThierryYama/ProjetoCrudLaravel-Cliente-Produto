    @extends('layouts.main')
    
    @section('title', 'Atividade 4')
    @section('h1', 'Atividade 4')
    
    @section('main')


    @if ($indicePoluicao >= 0.3 && $indicePoluicao < 0.4) 
    <p>{{$grupo1}} intimidada</p>
    @elseif ($indicePoluicao >= 0.4 && $indicePoluicao < 0.5) 
    <p>{{$grupo1}} e {{$grupo2}} intimidadas</p>
    @elseif ($indicePoluicao >= 0.5) 
    <p>{{$grupo1}} e {{$grupo2}} e {{$grupo3}} intimidadas</p>
    @else 
    <p>Nenhum grupo foi intimidado</p>
    @endif
    @endsection

