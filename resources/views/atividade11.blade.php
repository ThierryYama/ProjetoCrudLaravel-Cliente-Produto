    @extends('layouts.main')
    
    @section('title', 'Atividade 11')
    @section('h1', 'Atividade 11')
    
    @section('main')

    @php
    echo strrev($meuNome);
    @endphp
    @endsection