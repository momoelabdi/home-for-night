@extends('layout')

@section('content')

<div class="manage">
    <h2>Manage my hostings</h2>
    <table class="host-table">
        @unless($listing->isEmpty())
        <tr>
            <th> My Hosting</th>
            <th> Edit</th>
            <th>Delete</th>
        </tr>
            @foreach ($listing as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->title }}</td>
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
            <h3 class="message">No Listings Found</h3>
        @endunless
    </table>
</div>
@endsection
