@extends('layout')

@section('content')
    <div class="register">
        <form method="POST" action="/users">
            @csrf
            <div> <label>Your name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div> <label>Your email</label>
                <input type="email" name="email" placeholder="Email">
                @error('email')       
                <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div> <label>Your password</label>
                <input type="password" name="password" placeholder="Password">
                @error('password')       
                <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div> <label>Confirm password</label>
                <input type="password" name="password_confirmation" placeholder=" password">
                @error('password')       
                <p class="message"> {{ $message }}</p>
                @enderror
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
