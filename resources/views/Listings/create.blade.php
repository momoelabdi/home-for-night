@extends('layout')

@section('content')
<div class="create-form">
        <h1> Join the community and connect with curious people </h1>
        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="hoster-form">
                <label> Hoster </label>
                <input type="text" name="hoster" placeholder="Full Name" value="{{ old('hoster') }}">
                @error('hoster')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label>Location</label>
                <input type="text" name="title" placeholder="Location" value="{{ old('title') }}">
                @error('title')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label> Address </label>
                <input type="text" name="location" placeholder="Full Address"
                    value="{{ old('location') }}">
                @error('location')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label>Meals </label>
                <select type="text" name="tags"  value="{{ old('tags') }}">
                    <option value="Dinner and Breakfast">Dinner and Breakfast</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="None">None</option>
                </select>
                @error('tags')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" value="{{ old('tags') }}">
                @error('email')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <div class="hoster-form">
                <label> Picture </label>
                <input type="file" name="logo" 
                value="{{ old('logo') }}"
                    >
                @error('logo')
                    <p class="message"> {{ $message }}</p>
                @enderror
            </div>
            <Input type="hidden" name="status" value="Panding...">
            <div class="hoster-form">
                <label>Description</label>
                <textarea type="text" placeholder="Description" name="description" > {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="message"> {{ $message }}</p>
                @enderror
                <input type="submit" value="Submit">
            </div>


        </form>
    </div>
@endsection
