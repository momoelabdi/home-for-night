 




 <div id="register" class="register">
    <form class="regiter-content animate" method="POST" action="/users">
        <span onclick="hideSignIn()" class="close" title="Close Modal">&times;</span>
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
            <input  type="password" name="password" placeholder="Password">
            @error('password')
                <p id="register-msg" class="message"> {{ $message }}</p>
            @enderror

            <label>Confirm password</label>
            <input type="password" name="password_confirmation" placeholder=" password">
            @error('password')
                <p id="register-msg" class="message"> {{ $message }}</p>
            @enderror
            <button type="submit" onclick="registerErr()" >Sign in</button>
            <button type="button" onclick="hideSignIn()" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div> 

<script>
    function showSignIn() {
        document.getElementById('register').style.display = 'block';
    }

    function hideSignIn() {
        document.getElementById('register').style.display = 'none';
    }
      
    // if (document.getElementById('register-msg') != null) {
    //     document.getElementById('register').style.display = 'block';
    // }

    
        
        
   
</script>
