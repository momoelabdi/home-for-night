 @extends('layout')

 @section('content')
     <div class="show-card">
         <img src="{{ $item->logo ? asset('public/' . $item->logo) : asset('./images/home.jpg') }}" alt="Home image" />
         <p>{{ $item->title }} </p>
         <p>{{ $item->tags }} </p>
         <p>{{ $item->description }} </p>
         <p>{{ $item->location }} </p>

     </div>
 @endsection
