@extends('layout')
@section('content')
    @unless($reservations->isEmpty())
        @foreach ($reservations as $it)
            <div id="inf">
                <h2>Hello</h2>
                <h2>{{ $it->user_name }}</h2>
                <h2>{{ $it->start }}</h2>
                <h2>{{ $it->end }}</h2>
                <h2>{{ $it->user_email }}</h2>
                <h2>{{ $it->listing_id }}</h2>
            </div>
            <style>
                #inf{
                    padding-top: 10%;
                    text-align: center
                }
            </style>
        @endforeach
    @else
        <h3 class="message">No rservations Found!!</h3>
    @endunless
@endsection
