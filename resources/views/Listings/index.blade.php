  @extends('layout')

  @section('content')
  <div class="container">
      @foreach ($listing as $item)
          <div class="grid-card">
              <div class="house-cards">
                  <img src="{{ $item->logo ? asset('public/' . $item->logo) : asset('./images/home.jpg') }}"
                      alt="Home image" />
                      
                  <a href="/item/{{$item->id}}">{{ $item->title }} </a>
                  <p>{{ $item->location }} </p>
              </div>
          </div>
      @endforeach
    </div>
  @endsection