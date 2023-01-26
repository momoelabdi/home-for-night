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
                                    <button class="manage-btn delete-btn" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <h3 class="message">No hosting  Found!</h3>
                <p>Share a hosting on Home for Night will help you to connect with more people. By doing so, you can increase your Knowledge and make you learn more about other cultures! <a href="/listing/create">Experience Hosting people from here</a></p>
            @endunless
        </table>
        <h2>Latests Requests for Hosting</h2>
        <div class="recent-reservations">
            @foreach ($listings as $listing)
                @foreach ($reservations as $reservation)
                    @if ($listing->id === $reservation->listing_id && ($listing->user_id = auth()->id()))
                        <div class="reservation-status">
                            <h2>{{ $reservation->user_name }} has requested your hosting at
                                {{ substr($reservation->created_at, 10) }}</h2>
                            <img
                                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}" />
                            <p><em>"{{ $reservation->message }}"</em></p>
                            <p><em>{{ $reservation->user_name }}</em></p>
                            <p>From {{ Str::limit($reservation->start, 10, '') }} To
                                {{ Str::limit($reservation->end, 10, '') }}</p>
                            <form method="POST" action="/listings/{{ $listing->id }}/status">
                                @csrf
                                @method('PUT')
                                <Input type="hidden" name="status" value="Confirmed √">
                                <button class="confirm-btn" type="submit">Confirm</button>
                            </form>
                            <form method="POST" action="/listings/{{ $listing->id }}/status">
                                @csrf
                                @method('PUT')
                                <Input type="hidden" name="status" value="Refused">
                                <button class="refuse-btn" type="submit">Refuse</button>
                            </form>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
    <script>
        const reservationMsg = document.querySelector('.recent-reservations');
        if (reservationMsg.innerText === '') {
            reservationMsg.innerHTML = '<h3 class="message">No Reservation Request Found!!</h3>';

        }

        const deleteBtn = document.querySelector('.delete-btn');
        deleteBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this Hosting?')) {
                deleteBtn.parentElement.submit();
            }
        });
    </script>
@endsection
