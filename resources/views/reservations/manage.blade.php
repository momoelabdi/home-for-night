@extends('layout')
@section('content')
    <div class="reservation-card">
        @unless($reservations->isEmpty())
        @foreach ($reservations as $reserved)
            <div class="reserved">
                @foreach ($listings as $listing)
                    @if ($reserved->listing_id == $listing->id)
                        <h1>{{ $listing->id }}</h1>
                        <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}"/>
                        <h1>{{ $listing->location }}</h1>
                        <h1>{{ $listing->description }}</h1>
                        {{-- <h1>{{ $listing->logo }}</h1> --}}
                    @endif
                @endforeach
                <h1>{{ $reserved->message }}</h1>
                <h2> Dear {{ $reserved->user_name }} your reservation has been submitted</h2>
                <h2>from {{ Str::limit($reserved->start, 10) }}</h2>
                <h2>to {{ Str::limit($reserved->end, 10) }}</h2>
                <h2>The confirmation has been sent to email to the folowing address <address>
                        {{ $reserved->user_email }} </address>
                </h2>
            </div>
        @endforeach
        @else
            <h3 style="padding-top:20%" class="message">No reservations Found!!</h3>
        @endunless
    </div>
@endsection
