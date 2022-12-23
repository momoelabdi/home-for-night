@extends('layout')

@section('content')

    <div class="manage">
        <h2>Manage my hosting posts</h2>
        <table class="host-table">
            @unless($listing->isEmpty())
                <tr>
                    <th> My Hosting</th>
                    <th> Edit Hosting</th>
                    <th>Delete Hosting</th>
                </tr>
                @foreach ($listing as $item)
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
    </div>
@endsection
