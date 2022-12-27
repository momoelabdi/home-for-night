 @extends('layout')

 @section('content')
     <div class="show-card">
         <div class="show-item">
             <h2>{{ $item->title }} </h2>
             <img src="{{ $item->logo ? asset('storage/' . $item->logo) : asset('./images/home.jpg') }}" alt="Home image" />
             <h3> Get hosted by {{ $item->hoster }}, 
            {{ $item->description }}</h3>            
             <p>{{ $item->location }} </p>
         </div>
         @auth         
         <button><a href="/reservations/create">Resereve</a></button>
         @else
         <button onclick="showLogin()">Resereve</button>
         @endauth
     </div>
 @endsection
