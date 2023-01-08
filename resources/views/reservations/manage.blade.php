@extends('layout')
@section('content')
    <div class="reservation-container">
        <h1>Trips</h1>
        @unless($reservations->isEmpty())
            <h2 class="next-rsv">Upcoming reservations</h2>
            @foreach ($reservations as $reserved)
                <div class="reserved">
                    @foreach ($listings as $listing)
                        <a href="/item/{{ $listing->id }}">
                            @if ($reserved->listing_id == $listing->id)
                                <img
                                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}" />
                                <h2>{{ $listing->location }}</h2>
                                <h3>Hosted by {{ $listing->hoster }}</h3>
                                <h1>Status {{ $listing->status }}</h1>
                            @endif
                    @endforeach
                    <h3>From {{ Str::limit($reserved->start, 10) }}</h3>
                    <h3>To {{ Str::limit($reserved->end, 10) }}</h3>
                    </a>
                </div>
                <form method="POST" action="/reservations/{{ $reserved->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="manage-btn" type="submit">Delete</button>
                </form>
            @endforeach
        @else
            <h3 class="message">No reservations Found!!</h3>
        @endunless
    </div>
@endsection
