  @extends('layout')

  @section('content')
      @foreach ($listing as $item)
          <div class="grid-card">
              <div class="house-cards">
                  <img src="{{ $item->logo ? asset('public/' . $item->logo) : asset('./images/home.jpg') }}"
                      alt="Home image" />
                  <h3>{{ $item->title }} </h3>
                  <p>{{ $item->location }} </p>
              </div>
          </div>
      @endforeach
  @endsection
