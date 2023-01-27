<div id="register" class="register">
    <form class="regiter-content animate" method="POST" action="/users">
        <span onclick="hideSignUp()" class="close" title="Close Modal">&times;</span>
        @csrf
        <div class="imgcontainer">
            <img src="{{ asset('./images/Non-profit logo.png') }}" alt="Avatar" class="main-logo">
        </div>
        <div class="register-container">
            <label>Your name</label>
            <input type="text" name="name" placeholder="Name" required>
            @error('name')
                <p id="register-msg" class="message"> {{ $message }} </p>
            @enderror
            <label>Your email</label>
            <input type="email" name="email" placeholder="Email" required>
            @error('email')
                <p id="register-msg" class="message"> {{ $message }} </p>
            @enderror
            <label>Your Password</label>
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p id="register-msg" class="message"> {{ $message }} </p>
            @enderror
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder=" Confirm Password" required>
            @error('password_confirmation')
                <p id="register-msg" class="message"> {{ $message }} </p>
            @enderror
            <button type="submit">Sign Up</button>
            <button type="button" onclick="hideSignUp()" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>


