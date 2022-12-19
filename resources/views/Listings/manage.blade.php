@extends('layout')

@section('content')

<h1>Hello </h1>
<table>
    @unless ($listing->isEmpty())
        @foreach ($listing as $item)
            <tbody>
                <tr>
                    <td>{{$item->title}}</td>
                    <td><a href="/listing/{{$item->id}}/edit">Edit</a></td>
                    <td><form method="POST" action="/listings/{{$item->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form></td>

                </tr>
            </tbody>
        @endforeach
    @endunless
</table>




@endsection
