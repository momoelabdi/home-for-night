@extends('layout')
@section('content')
    <div class="reservation-card">
        @unless($reservations->isEmpty())
            @foreach ($reservations as $reserved)
                <div class="reserved">

                    <h2> Dear {{ $reserved->user_name }} your reservation has been submitted</h2>
                    <h2>from {{ Str::limit($reserved->start, 10) }}</h2>
                    <h2>to {{ Str::limit($reserved->end, 10) }}</h2>
                    <h2>The confirmation has been sent by emmail to the folowing address <address> {{ $reserved->user_email }}
                        </address>
                    </h2>
                    <p>Enjoy your holiday </p>
                    {{-- <h2>{{ $reserved->listing_id}}</h2> --}}
                </div>
            @endforeach
        @else
            <h3 class="message">No rservations Found!!</h3>
        @endunless
    </div>
@endsection
