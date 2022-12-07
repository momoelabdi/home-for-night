@extends('layout')

@section('content')
    <form method="POST" action="/users">
        @csrf
        <div> <label>Your Name</label>
            <input type="text" name="name">
        </div>
        <div> <label>Your Email</label>
            <input type="email" name="email">
        </div>
        <div> <label>Your Password</label>
            <input type="password" name="password">
        </div>
        <div> <label>Confirm Password</label>
            <input type="password" name="password_confirmation">
            <input type="submit" value="Submit">

        </div>

    </form>
@endsection
