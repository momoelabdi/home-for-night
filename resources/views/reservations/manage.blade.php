@extends('layout')
@section('content')
    @unless($reservations->isEmpty())
        @foreach ($reservations as $it)
            <div>
                <h2>Hello</h2>
                <h2>{{ $it->user_name }}</h2>
                <h2>{{ $it->start }}</h2>
                <h2>{{ $it->end }}</h2>
                <h2>{{ $it->user_email }}</h2>
                <h2>{{ $it->listing_id }}</h2>
            </div>
        @endforeach
    @else
        <h3 class="message">No rservations Found!! Create a hosting and connect with travelers</h3>
    @endunless
@endsection
