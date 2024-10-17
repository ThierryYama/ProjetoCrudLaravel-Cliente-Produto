<!DOCTYPE html>
    @extends('layouts.main')
    
    @section('title', 'Atividade 9')
    @section('h1', 'Atividade 9')
    
    @section('main')

    @foreach ($nomes as $nome)
    <p>{{$nome}}</p>
    @endforeach

    @endsection