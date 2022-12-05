  @extends('layout')

  @section('content')
      @foreach ($listing as $item)
          <div class="grid-card">
              <div class="house-cards">
                  <img src="{{ $item->logo ? asset('public/' . $item->logo) : asset('./images/home.jpg') }}"
                      alt="Home image" />
                      
                  <a href="listing/{$item}{{$item->id}}">{{ $item->title }} </a>
                  <p>{{ $item->location }} </p>
              </div>
          </div>
      @endforeach
  @endsection