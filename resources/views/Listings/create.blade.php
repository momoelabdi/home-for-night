@extends('layout')

@section('content')
    <div class="create-content">
        <div class="create-title">
            <h3>Experience Hosting</h3>
            <h1>Earn money leading people on activities you love. </h1>
            <a class="lets-go-btn" href="#create-form">Let's Go</a>
        </div>
        <div class="slideshow-container">
            <button class="carousel-btn prev " onclick="plusDivs(-1)">&#10094;</button>
            <button class="carousel-btn next" onclick="plusDivs(+1)">&#10095;</button>
            <img class="mySlides" src="{{ asset('./images/create-2.jpg') }}" alt="Home image" style="width: 100%" />
            <img class="mySlides" src="{{ asset('./images/create-1.jpg') }}" alt="Home image" style="width: 100%" />
            <img class="mySlides" src="{{ asset('./images/create-4.jpg') }}" alt="Home image" style="width: 100%" />
        </div>

        <div class="testimonial">
            <a class="lets-go-btn" href="#create-form">Let's Go</a>
            <div class="testimonial-card">
                <img src="{{ asset('./images/createA.jpg') }}" alt="Home image" />
                <h2>What’s an experience?</h2>
                <p>It’s an activity that goes beyond the typical tour or class, designed and led by locals all over the
                    world.
                    Show
                    off your city, craft, cause, or culture by hosting an experience.</p>
            </div>
            <div class="testimonial-card">
                <img src="{{ asset('./images/createX.jpg') }}" alt="Home image" />
                <h2>Show what you know</h2>
                <p>Experiences of every kind, like cooking, crafting, kayaking, and more. There’s no limit to what you can
                    do.
                    Explore these featured categories.</p>
            </div>
            <div class="testimonial-card">
                <img src="{{ asset('./images/createX.jpg') }}" alt="Home image" />
                <h2>Show what you know</h2>
                <p>Experiences of every kind, like cooking, crafting, kayaking, and more. There’s no limit to what you can
                    do.
                    Explore these featured categories.</p>
            </div>
        </div>



        <div class="create-form" id="create-form">
            <h1>Join a growing community of curious people</h1>
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
                    <input type="text" name="location" placeholder="Full Address" value="{{ old('location') }}">
                    @error('location')
                        <p class="message"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="hoster-form">
                    <label>Meals </label>
                    <select type="text" name="tags" value="{{ old('tags') }}">
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
                    <input type="file" name="logo" value="{{ old('logo') }}">
                    @error('logo')
                        <p class="message"> {{ $message }}</p>
                    @enderror
                </div>
                <Input type="hidden" name="status" value="Panding...">
                <div class="hoster-form">
                    <label>Description</label>
                    <textarea type="text" placeholder="Description" name="description"></textarea>

                    @error('description')
                        <p class="message"> {{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Submit">
                <a href="/" class="cancel-btn"> Cancel</a>


            </form>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            let i;
            let x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            };
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
@endsection
