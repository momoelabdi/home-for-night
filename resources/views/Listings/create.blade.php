@extends('layout')

@section('content')
    <div class="create-form">
        <form method="POST" action="/listing" enctype="multipart/form-data">
            @csrf
            <div class="hoster-form">
                <label> Hoster </label>
                <input type="text" name="Hoster" placeholder="California beach">
            </div>
            <div class="hoster-form">
                <label> where you Sleep </label>
                <input type="text" name="title" placeholder="Jhon Doe familly">
            </div>
            <div class="hoster-form">
                <label> Location </label>
                <input type="text" name="location" placeholder="Clifornia beach 73, steert 32, US">
            </div>
            <div class="hoster-form">
                <label>Meals we offer</label>
                <input type="text" name="tags" placeholder="Dinner">
            </div>
            <div class="hoster-form">
                <label> Picture </label>
                <input type="file" name="logo" placeholder="Clifornia beach 73, steert 32, US">
            </div>
            <div class="hoster-form">
                <label>Description</label>
                <textarea type="text" name="decription" placeholder="Amazing place to be"></textarea>
                <input type="submit" value="Submit">
            </div>


        </form>
    </div>
@endsection
