    @extends('layouts.main')
    
    @section('title', 'Atividade 6')
    @section('h1', 'Atividade 6')
    
    @section('main')

    @while ($i <= 200)
        @if ($i % 2 == 1)
            @php
            $total++;
            @endphp
            <p> {{$i}} </p>
        @endif
        @php
        $i++;  
        @endphp
    @endwhile

    <p>total: {{$total}}</p>
    @endsection
