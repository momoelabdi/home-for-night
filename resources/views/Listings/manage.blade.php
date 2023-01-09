@extends('layout')

@section('content')

    <div class="manage">
        <h2>Manage my hosting posts</h2>
        <table class="host-table">
            @unless($listings->isEmpty())
                <tr>
                    <th> My Hosting</th>
                    <th> Edit Hosting</th>
                    <th>Delete Hosting</th>
                </tr>
                @foreach ($listings as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->hoster }}, {{ $item->title }} </td>
                            <td><a class="manage-btn edit" href="/listing/{{ $item->id }}/edit">Edit</a></td>
                            <td>
                                <form method="POST" action="/listings/{{ $item->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="manage-btn" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <h3 class="message">No Listings Found!! Create a hosting and connect with travelers</h3>
            @endunless
        </table>
        <h2>Requests for Hosting</h2>
        <div class="reservation-status">
            @foreach ($listings as $listing)
                @foreach ($reservations as $reservation)
                    @if ($listing->id === $reservation->listing_id && ($listing->user_id = auth()->id()))
                        <h2>{{ $reservation->user_name }} has requested your hosting at {{substr($reservation->created_at, 14)}}</h2>
                        <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}" />
                        <p><em>"{{ $reservation->message }}"</em></p>
                        <p><em>{{ $reservation->user_name }}</em></p>
                        <p>From {{ Str::limit($reservation->start, 10, '') }} To  {{ Str::limit($reservation->end, 10, '') }}</p>
                        <form method="POST" action="/listings/{{ $listing->id }}">
                            @csrf
                            @method('PUT')
                            <Input type="hidden" name="status" value="Confirmed √">
                            <button class="confirm-btn" type="submit">Confirm</button>
                        </form>
                        <form method="POST" action="/listings/{{ $listing->id }}">
                            @csrf
                            @method('PUT')
                            <Input type="hidden" name="status" value="Refused X">
                            <button class="refuse-btn" type="submit">Refuse</button>
                        </form>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
