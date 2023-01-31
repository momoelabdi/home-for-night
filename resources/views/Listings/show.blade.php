 @extends('layout')
 @section('content')
     <div class="show-container">
         <div class="show-card">
             <h2>{{ $host->title }}. </h2>
             <p>{{ $host->location }}. </p>
             <div class="show-item">
                 <img src="{{ $host->logo ? asset('storage/' . $host->logo) : asset('./images/home.jpg') }}"
                     alt="Home image" />
                 <h3> Get hosted by {{ $host->hoster }}.</h3>
                 <h4> {{ $host->description }}.</h4>
                 <h4>{{ $host->hoster }} propose {{ $host->tags }} for free.</h4>
             </div>
         </div>
     </div>
     @auth
         <div class="create-reservation">
             <div class="spc">
                 <form method="POST" action="/reservations" enctype="multipart/form-data">
                     @csrf
                     <h2>Let's Reserve it Now</h2>
                     <div class="reservation-form">
                         <label>Name</label>
                         <input type="text" name="user_name" placeholder="Full Name">
                         @error('user_name')
                             <p class="reservation-msg"> {{ $message }}</p>
                         @enderror
                     </div>
                     <div class="reservation-form">
                         <label> Email </label>
                         <input type="email" name="user_email" placeholder="Email">
                         @error('user_email')
                             <p class="reservation-msg"> {{ $message }}</p>
                         @enderror
                     </div>
                     <div class="reservation-form">
                         <label>Start date</label>
                         <input type="date" name="start">
                         @error('start')
                             <p class="reservation-msg"> {{ $message }}</p>
                         @enderror
                     </div>
                     <div class="reservation-form">
                         <label>End date</label>
                         <input type="date" name="end">
                         @error('end')
                             <p class="reservation-msg"> {{ $message }}</p>
                         @enderror
                     </div>
                     <Input type="hidden" name="listing_id" value="{{ $host->id }}">
                     <div class="reservation-form">
                         <label>Message</label>
                         <textarea type="text" placeholder="Leave a message" name="message"></textarea>
                         @error('message')
                             <p class="reservation-msg"> {{ $message }}</p>
                         @enderror
                         <input type="submit" value="Reserve">
                     </div>
                 </form>
             </div>
         @else
             <div class="create-reservation">
                 <form method="POST" action="/reservations" enctype="multipart/form-data">
                     @csrf
                     <h2>Let's Reserve it Now</h2>
                     <div class="reservation-form">
                         <label>Name</label>
                         <input type="text" placeholder="Full Name">
                     </div>
                     <div class="reservation-form">
                         <label> Email </label>
                         <input type="email" placeholder="Email" value="">
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
                         <textarea type="text" placeholder="Leave a message"></textarea>
                         <input type="button" onclick="showLogin()" value="Reserve">
                     </div>
                 </form>
             </div>
         @endauth
     </div>
 @endsection
