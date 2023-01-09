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
        <h1>My Resrvations</h1>
        @foreach ($listings as $listing)
            @foreach ($reservations as $reservation)
                @if ($listing->id === $reservation->listing_id && $listing->user_id = auth()->id())
                    {{$listing->id}}
                    {{$reservation->user_name}}
                    {{$reservation->message}}
                    {{$reservation->start}}
                    {{$reservation->end}}
                @endif
            @endforeach
        @endforeach

    </div>
@endsection
