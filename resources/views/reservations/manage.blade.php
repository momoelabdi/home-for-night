@extends('layout')
@section('content')
    <div class="reservation-container">
        @unless($reservations->isEmpty())
        <div class="reservation-card">
                @foreach ($reservations as $reserved)
                <div class="reserved">
                    @foreach ($listings as $listing)
                    <a href="/item/{{ $listing->id }}">
                            @if ($reserved->listing_id == $listing->id)
                                <img
                                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}" />
                                <h2>{{ $listing->location }}</h2>
                                <h3>Hosted by {{ $listing->hoster }}</h3>
                            @endif
                        @endforeach
                        <h3>From {{ Str::limit($reserved->start, 10) }}</h3>
                        <h3>To {{ Str::limit($reserved->end, 10) }}</h3>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h3 class="message">No reservations Found!!</h3>
    @endunless
@endsection
