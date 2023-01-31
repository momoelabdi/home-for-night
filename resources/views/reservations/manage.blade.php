@extends('layout')
@section('content')
    <div class="reservation-container">
        <h1>Trips</h1>
        <h2 class="next-rsv">Upcoming reservations</h2>
        @unless($reservations->isEmpty())
            @foreach ($reservations as $reserved)
                <div class="reserved">
                    @foreach ($listings as $listing)
                        <a href="/host/{{ $listing->id }}">
                            @if ($reserved->listing_id == $listing->id)
                                <img
                                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}" />
                                <div class="rsv-details">
                                    <h2>{{ $listing->location }}</h2>
                                    <h3>Hosted by {{ $listing->hoster }}</h3>
                                    <h3 class="status">Status {{ $listing->status }}</h3>
                                    <h3>From {{ Str::limit($reserved->start, 10, '') }}</h3>
                                    <h3>To {{ Str::limit($reserved->end, 10, '') }}</h3>
                                </div>
                            @endif
                    @endforeach
                    </a>
                    <form method="POST" action="/reservations/{{ $reserved->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="delete-reservation-btn" type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
        @else
            <h3 class="n-reservation">No reservations Found!!</h3>
        @endunless
    </div>

    <script>
        const deleteReservationBtn = document.querySelectorAll('.delete-reservation-btn');
        deleteReservationBtn.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                if (confirm('Are you sure you want to delete this reservation?')) {
                    btn.parentElement.submit();
                }
            });
        });
    </script>
@endsection
