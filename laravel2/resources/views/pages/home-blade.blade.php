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


            <li class="{{ $cl }}"> Il prezzo è di <strong>{{ $pagamento['price'] }}$</strong> e lo status risulta <strong>{{ $pagamento['status'] }}</strong></li>
            

        @endforeach

    </ul>

@endsection