@extends('layout')

@section('content')
    <form method="POST" action="/users/authenticate">
        @csrf
        <div> <label>Your Email</label>
            <input type="email" name="email">
        </div>
        <div> <label>Your Password</label>
            <input type="password" name="password">
            <input type="submit" value="Log in">
        </div>
    </form>
@endsection
