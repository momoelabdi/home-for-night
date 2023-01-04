@extends('layout')
@section('content')
    <div class="reservation-card">

        @foreach ($listings as $item)
            @if (isset($reservations->listing_id))
                @foreach ($reservations as $reserved)
                    <h2> Dear {{ $reserved->user_name }} your reservation has been submitted</h2>
                    <h2>from {{ Str::limit($reserved->start, 10) }}</h2>
                    <h2>to {{ Str::limit($reserved->end, 10) }}</h2>
                    <h2>The confirmation has been sent by emmail to the folowing address <address>
                            {{ $reserved->user_email }} </address>
                    </h2>
                @endforeach
            @endif
         
            <div>
                <h1>{{ $item->description }}</h1>
            </div>
        @endforeach
        {{-- @unless($reservations->isEmpty())
            @foreach ($reservations as $reserved)
            <div class="reserved">
                @if (isset($reserved->listing_id))
                @foreach ($listings as $listing)
                <p>{{$listing->email}} </p>
                @endforeach 
                @endif
                    <h1>Trips</h1>
                    <h2>Upcoming reservations</h2>
                    <h2> Dear {{ $reserved->user_name }} your reservation has been submitted</h2>
                    <h2>from {{ Str::limit($reserved->start, 10) }}</h2>
                    <h2>to {{ Str::limit($reserved->end, 10) }}</h2>
                    <h2>The confirmation has been sent by emmail to the folowing address <address> {{ $reserved->user_email }}                       </address>
                    </h2>
                    <p>Enjoy your holiday </p>
                </div>
            @endforeach
        @else
            <h3 class="message">No rservations Found!!</h3>
        @endunless --}}
    </div>
@endsection
