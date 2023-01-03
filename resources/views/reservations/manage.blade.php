@extends('layout')
@section('content')
    @unless($reservations->isEmpty())
        @foreach ($reservations as $reserved)
            <div id="inf">
                <h2>Hello</h2>
                <h2>{{ $reserved->user_name }}</h2>
                <h2>{{ $reserved->start }}</h2>
                <h2>{{ $reserved->end }}</h2>
                <h2>{{ $reserved->user_email }}</h2>
                <h2>{{ $reserved->listing_id }}</h2>
            </div>
            <style>
                #inf{
                    background-color: aqua;
                    padding-top: 10%;
                    text-align: center
                }
            </style>
        @endforeach
    
    @else
        <h3 class="message">No rservations Found!!</h3>
    @endunless
@endsection
