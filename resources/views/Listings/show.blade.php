
@extends('layout')

@section('content')


<div class="show-card">
    <img src="{{ $listing->logo ? asset('public/' . $listing->logo) : asset('./images/home.jpg') }}" alt="Home image" />
    <h3>{{ $listing->title }} </h3>
    <p>{{ $listing->location }} </p>

</div>
@endsection