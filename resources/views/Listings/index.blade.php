@extends('layout')
@section('content')
    <div class="container">
        @foreach ($listing as $host)
            <div class="grid-card">
                <a href="/host/{{ $host->id }}">
                    <div class="house-cards">
                        <img src="{{ $host->logo ? asset('storage/' . $host->logo) : asset('./images/home.jpg') }}"alt="image broken" />
                        {{-- http://home-for-night.up.railway.app --}}
                        <ul>
                            <li><i class="fa-thin fa fa-house"></i>{{ $host->title }}</li>
                            <li><i class="fa-thin fa fa-utensils"></i> {{ $host->tags }}</li>
                            <li><span><i class="fa-thin fa fa-location-dot"></i> {{ $host->location }}</span></li>
                        </ul>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
