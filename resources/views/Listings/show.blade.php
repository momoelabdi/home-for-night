 @extends('layout')

 @section('content')
     <div class="show-card">
         <div class="show-item">
             <img src="{{ $item->logo ? asset('storage/' . $item->logo) : asset('./images/home.jpg') }}" alt="Home image" />
             <h1>{{ $item->title }} </h1>
             <h4>{{ $item->location }} </h4>
             <h2> Hosted by{{ $item->hoster }} </h2>
             <p>{{ $item->description }} </p>
             <p>{{ $item->tags }} </p>
         </div>

     </div>
 @endsection
