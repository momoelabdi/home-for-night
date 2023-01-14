@extends('layout')

@section('content')
    <div class="create-title">
        <h3>Host someone</h3>
        <h1>Travel Learn and Share with people </h1>
    </div>
    <section aria-label="Newest Photo">
        <div class="carousel" data-carousel>
            <button class="carousel-btn prev" data-carousel-button="prev">&lsaquo;</button>
            <button class="carousel-btn next" data-carousel-button="next">&rsaquo;</button>
            <ul data-slides>
                <li class="slide" data-active> <img src="{{ asset('./images/create-2.jpg') }}" alt="Home image" />
                </li>
                <li class="slide"> <img src="{{ asset('./images/create-4.jpg') }}" alt="Home image" />
                </li>
                <li class="slide"> <img src="{{ asset('./images/create-1.jpg') }}" alt="Home image" />
                </li>
                <li class="slide"> <img src="{{ asset('./images/some.jpg') }}" alt="Home image" />
                </li>
            </ul>
        </div>
    </section>
    <div class="create-form">
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
                <input type="submit" value="Submit">
            </div>


        </form>
    </div>






    <script defer >
        const buttons = document.querySelectorAll("[data-carousel-button]");
        buttons.forEach(button => {
            button.addEventListener('click', () => {

                const offset = button.dataset.carouselButton === "next" ? 1 : -1
                const slides = button.closest('[data-carousel]').querySelector('[data-slides]')
                const activeSilde = slides.querySelector("[data-active]")
                let newIndex = [...slides.children].indexOf(activeSilde) + offset
                if (newIndex < 0) newIndex = slides.children.length - 1
                if (newIndex >= slides.children.length) newIndex = 0
                slides.children[newIndex].dataset.active = true
                delete activeSilde.dataset.active

            })
        });
    </script>
@endsection
