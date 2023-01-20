<div id="login" class="login">
    <form class="modal-content animate" method="POST" action="/users/authenticate">
        <span onclick="hideLogin()" class="close" title="Close Modal">&times;</span>
        @csrf
        <div class="imgcontainer">
            {{-- <img src="./images/user.png" alt="Avatar" class="avatar"> --}}
        </div>
        <div class="form-container">
            <label>Your Email</label>
            <input type="text" name="email">
            @error('email')
                <p id="login-msg" class="message"> {{ $message }} </p>
            @enderror
            <label>Your Password</label>
            <input type="password" name="password" autocomplete="on">
            @error('password')
                <p id="login-msg" class="message"> {{ $message }} </p>
            @enderror
            <button  type="submit">Login</button>
            <button type="button" onclick="getSignUp()">Sign up</button>
        </div>
        <div class="form-container">
            <button id="login-btn" type="button" onclick="hideLogin()" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<script>
    function showLogin() {
        document.getElementById('login').style.display = 'block';
    }

    function hideLogin() {
        document.getElementById('login').style.display = 'none'
    }
    if (document.getElementById('login-msg')!= null) {
        showLogin();
        hideSignIn();
    }

    function getSignUp() {
        document.getElementById('login').style.display = 'none';
        document.getElementById('register').style.display = 'block';
    }

    


   
</script>
