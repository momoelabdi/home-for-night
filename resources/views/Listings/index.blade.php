@extends('layout')
@section('content')
    <div class="container">
        @foreach ($listing as $item)
            <div class="grid-card">
                <a href="/item/{{ $item->id }}">
                    <div class="house-cards">
                        <img src="{{ $item->logo ? asset('images/' . $item->logo) : asset('./images/home.jpg') }}"
                            alt="image broken" />
                        <ul>
                            <li><i class="fa-thin fa fa-house"></i>{{ $item->title }}</li>
                            <li><i class="fa-thin fa fa-utensils"></i> {{ $item->tags }}</li>
                            <li><span><i class="fa-thin fa fa-location-dot"></i> {{ $item->location }}</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
