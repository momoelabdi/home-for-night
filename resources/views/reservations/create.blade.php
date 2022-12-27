@extends('layout')
@section('content')
    <h1>You are more than welcome</h1>
    <div class="create-form">
        <form method="" action="/reservations" enctype="multipart/form-data">
            @csrf
            <div class="reservation-form">
                <label>Name</label>
                <input type="text" name="hoster" placeholder="California beach" value="{{ auth()->user()->name }}">
            </div>
            <div class="reservation-form">
                <label> Email </label>
                <input type="email" name="email" placeholder="Jhon Doe familly" value="{{ auth()->user()->email }}">
            </div>
            <div class="reservation-form">
                <label>Message</label>
                <textarea type="text" placeholder="Description" name="description"> {{ old('description') }}
            </textarea>
                @error('description')
                    <p class="message"> {{ $message }}</p>
                @enderror
                <input type="submit" value="Confirm">
            </div>
        </form>
    </div>



    </div>
@endsection
