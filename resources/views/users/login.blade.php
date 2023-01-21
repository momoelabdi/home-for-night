<div id="login" class="login">
    <form class="modal-content animate" method="POST" action="/users/authenticate">
        <span onclick="hideLogin()" class="close" title="Close Modal">&times;</span>
        @csrf
        <div class="imgcontainer">
            <img src="{{ asset('./images/Non-profit logo.png') }}" alt="Avatar" class="main-logo">
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
            <button type="submit">Login</button>
            <button type="button" onclick="getSignUp()">Sign up</button>
        </div>
        <div class="form-container">
            <button type="button" onclick="hideLogin()" class="cancelbtn">Cancel</button>
        </div>
        <a href="{{ route('google-auth') }}" class="google btn">
            <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
    </form>
</div>

<script>
    function showLogin() {
        document.getElementById('login').style.display = 'block';
    }

    function hideLogin() {
        document.getElementById('login').style.display = 'none'
    }

    function showSignUp() {
        document.getElementById('register').style.display = 'block';
    }

    function hideSignUp() {
        document.getElementById('register').style.display = 'none';
    }

    const loginErr = document.getElementById('login-msg') !== null;
    const registerErr = document.getElementById('register-msg') !== null;

    if (loginErr) {
        showLogin();
    } else if (registerErr) {
        hideLogin();
        showSignUp();
    }

    function getSignUp() {
        document.getElementById('login').style.display = 'none';
        document.getElementById('register').style.display = 'block';
    }
</script>
