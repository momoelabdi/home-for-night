@extends('layout')

@section('content')
    <div class="edit-form">
        <h1>Edit my hosting</h1>
        <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="hoster-form">
                <label> Hoster </label>
                <input type="text" name="hoster" placeholder="California beach" value="{{ $listing->hoster }}">
                @error('hoster')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label> Where you sleep </label>
                <input type="text" name="title" placeholder="Jhon Doe familly" value="{{ $listing->title }}">
                @error('title')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <Input type="hidden" name="status" value="Panding...">
            <div class="hoster-form">
                <label> Location </label>
                <input type="text" name="location" placeholder="Clifornia beach 73, steert 32, US"
                    value="{{ $listing->location }}">
                @error('location')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label>Meals we offer</label>
                <input type="text" name="tags" placeholder="Dinner" value="{{ $listing->tags }}">
                @error('tags')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" value="{{ $listing->email }}">
                @error('email')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label for="logo"> Picture </label>
                <input type="file" name="logo">
                <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('./images/home.jpg') }}"
                    alt=" " />
                @error('logo')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label>Description</label>
                <textarea type="text" name="description" placeholder="Description">{{ $listing->description }}</textarea>
                @error('description')
                    <p class="message"> {{ $message }}</p>
                @enderror
                <input type="submit" value="Submit">
            </div>


        </form>
    </div>
@endsection
