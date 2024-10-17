    @extends('layouts.main')
    
    @section('title', 'Atividade 5')
    @section('h1', 'Atividade 5')
    
    @section('main')


    
    @if ($idade >= 5 && $idade < 8) 
        <p> Infantil A: {{$idade}} anos</p>
    @elseif ($idade >= 8 && $idade < 12) 
        <p> Infantil B: {{$idade}} anos</p>
    @elseif ($idade >= 12 && $idade < 14) 
        <p> Juvenil A: {{$idade}} anos</p>
    @elseif ($idade >= 14 && $idade < 18) 
        <p> Juvenil B: {{$idade}} anos</p>
    @elseif ($idade >= 18) 
        <p> "Adulto"</p>
    @else 
        <p> Criança de {{$idade}} anos</p>
    @endif
    @endsection
