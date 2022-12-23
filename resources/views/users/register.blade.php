
    <div id="register" class="register">
        <form class="regiter-content animate" method="POST" action="/users">
            <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
            @csrf
            <div class="register-container">
                <label>Your name</label>
                <input type="text" name="name" placeholder="Name">

                <label>Your email</label>
                <input type="email" name="email" placeholder="Email">
                @error('email')
                    <p id="register-msg" class="message"> {{ $message }}</p>
                @enderror

                <label>Your password</label>
                <input type="password" name="password" placeholder="Password">
                @error('password')
                    <p id="register-msg" class="message"> {{ $message }}</p>
                @enderror

                <label>Confirm password</label>
                <input type="password" name="password_confirmation" placeholder=" password">
                @error('password')
                    <p id="register-msg" class="message"> {{ $message }}</p>
                @enderror
                <button type="submit" value="Sign in">Sign in</button>
            </div>
        </form>
    </div>

    <script>
         // keep sign in form displayed if input throw errors
        const validator = document.getElementById('register-msg');
        const msg = validator.innerText;
        if (msg != null) {
            document.getElementById('register').style.display = 'block';
        }
    </script>
    
    