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
                                <h4>{{ $listing->location }}</h4>
                                <h4>hosted by {{ $listing->hoster }}</h4>
                            @endif
                        @endforeach
                        <h3>from {{ Str::limit($reserved->start, 10) }}</h3>
                        <h3>to {{ Str::limit($reserved->end, 10) }}</h3>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h3 class="message">No reservations Found!!</h3>
    @endunless
@endsection
