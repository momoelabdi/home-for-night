{{-- @extends('layout')
@section('content') --}}
{{-- {{dd($listing)}} --}}

{{-- <h1>You are more than welcome</h1>
    <div class="create-form">
        <form method="POST" action="/reservations" enctype="multipart/form-data">
            @csrf
            <div class="reservation-form">
                <label>Name</label>
                <input type="text" name="user_name" placeholder="California beach" value="{{ auth()->user()->name }}">
            </div>
            <div class="reservation-form">
                <label> Email </label>
                <input type="email" name="user_email" placeholder="Jhon Doe familly" value="{{ auth()->user()->email }}">
            </div>
            <div class="reservation-form">
                <label >Start date</label>
                <input type="date" name="start">
            </div>
            <div class="reservation-form">
                <label >End date</label>
                <input type="date" name="end">
            </div>
            
            <div class="reservation-form">
                <Input  type="hidden"  name="listing_id" value="{{$listing->id}}" >
                </div>
            <div class="reservation-form">
                <label>Message</label>
                <textarea type="text" placeholder="Leave a message" name="message"> {{ old('description') }}
                </textarea>
                <input type="submit" value="Confirm">
            </div>
        </form>
    </div> --}}
{{-- @endsection --}}
