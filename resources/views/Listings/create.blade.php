@extends('layout')

@section('content')
    <div class="create-form">
        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="hoster-form">
                <label> Hoster </label>
                <input type="text" name="hoster" placeholder="California beach" value="{{ old('hoster') }}">
            </div>
            <div class="hoster-form">
                <label> where you Sleep </label>
                <input type="text" name="title" placeholder="Jhon Doe familly" value="{{ old('title') }}">
            </div>
            <div class="hoster-form">
                <label> Location </label>
                <input type="text" name="location" placeholder="Clifornia beach 73, steert 32, US" value="{{ old('location') }}">
            </div>
            <div class="hoster-form">
                <label>Meals we offer</label>
                <input type="text" name="tags" placeholder="Dinner" value="{{ old('tags') }}">
            </div>
            <div class="hoster-form">
                <label> Picture </label>
                <input type="file" name="logo" placeholder="Clifornia beach 73, steert 32, US" value="{{ old('logo') }}">
            </div>
            <div class="hoster-form">
                <label>Description</label>
                <textarea type="text" name="decription" placeholder="Amazing place to be" value="{{ old('decription') }}"></textarea>
                <input type="submit" value="Submit">
            </div>


        </form>
    </div>
@endsection
