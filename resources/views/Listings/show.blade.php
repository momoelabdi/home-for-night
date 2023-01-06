 @extends('layout')
 @section('content')
     <div class="show-container">
         <div class="show-card">
             <h2>{{ $item->title }} </h2>
             <p>{{ $item->location }} </p>
             <div class="show-item">
                 <img src="{{ $item->logo ? asset('storage/' . $item->logo) : asset('./images/home.jpg') }}"
                     alt="Home image" />
                 {{-- <div class="host-info"> --}}
                     <h3> Get hosted by {{ $item->hoster }}</h3>
                     <h3> {{ $item->description }}</h3>
                     <h4>{{ $item->hoster }} offers {{ $item->tags }} for free</h4>
                 {{-- </div> --}}
                </div>
            </div>
        </div>
         @auth
             <div class="create-reservation">
                 <form method="POST" action="/reservations" enctype="multipart/form-data">
                     @csrf
                     <div class="reservation-form">
                         <label>Name</label>
                         <input type="text" name="user_name" placeholder="California beach" {{-- value="{{ auth()->user()->name }}" --}}>
                     </div>
                     <div class="reservation-form">
                         <label> Email </label>
                         <input type="email" name="user_email" placeholder="Jhon Doe familly" {{-- value="{{ auth()->user()->email }}" --}}>
                     </div>
                     <div class="reservation-form">
                         <label>Start date</label>
                         <input type="date" name="start">
                     </div>
                     <div class="reservation-form">
                         <label>End date</label>
                         <input type="date" name="end">
                     </div>
                     <Input type="hidden" name="listing_id" value="{{ $item->id }}">
                     <div class="reservation-form">
                         <label>Message</label>
                         <textarea type="text" placeholder="Leave a message" name="message"> {{ old('description') }}
                </textarea>
                         <input type="submit" value="Reserve">
                     </div>
                 </form>
             </div>
         @else
             <div class="create-reservation">
                 <form method="POST" action="/reservations" enctype="multipart/form-data">
                     @csrf
                     <div class="reservation-form">
                         <label>Name</label>
                         <input type="text" placeholder="California beach">
                     </div>
                     <div class="reservation-form">
                         <label> Email </label>
                         <input type="email" placeholder="Jhon Doe familly" value="">
                     </div>
                     <div class="reservation-form">
                         <label>Start date</label>
                         <input type="date">
                     </div>
                     <div class="reservation-form">
                         <label>End date</label>
                         <input type="date">
                     </div>
                     <div class="reservation-form">
                         <label>Message</label>
                         <textarea type="text" placeholder="Leave a message">
                </textarea>
                         <input type="button" onclick="showLogin()" value="Reserve">
                     </div>
                 </form>
             </div>
         @endauth
 @endsection
