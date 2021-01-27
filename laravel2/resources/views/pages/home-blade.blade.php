@extends('layouts.main-layout')

@section('content')

    <ul>
        @foreach ($pagamenti as $pagamento)
        
            @if ($loop->even)
                
                @php
                    $cl = "red"; 
                @endphp
            @else 

                @php
                    $cl = "green"; 
                @endphp

            @endif

            <li class="{{ $cl }}">{{ $pagamento['price'] }} {{ $pagamento['status'] }}</li>
        @endforeach

    </ul>

@endsection