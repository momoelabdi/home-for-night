@extends('layout')
@section('content')
    <div class="container">
        @foreach ($listing as $item)
            <div class="grid-card">
                <a href="/item/{{ $item->id }}">
                    <div class="house-cards">
                        <img src="{{ $item->logo ? asset('storage/' . $item->logo) : asset('./images/home.jpg') }}"
                            alt="Home image" />
                        <h4><i class="fa-thin fa fa-house"></i>{{ $item->title }} </h4>
                        <p><i class="fa-thin fa fa-utensils"></i>   {{ $item->tags }} </p>
                        <span> <i class="fa-thin fa fa-location-dot"></i> {{ $item->location }} </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
