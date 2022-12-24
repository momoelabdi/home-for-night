<div id="login" class="login">
    <form class="modal-content animate" method="POST" action="/users/authenticate">
        <span onclick="hideLogin()" class="close" title="Close Modal">&times;</span>
        @csrf
        <div class="imgcontainer">
            <img src="./images/user.png" alt="Avatar" class="avatar">
        </div>
        <div class="form-container">
            <label>Your Email</label>
            <input type="text" name="email">
            @error('email')
                <p id="login-msg" class="message"> {{ $message }} </p>
            @enderror
            <label>Your Password</label>
            <input type="password" name="password">
            @error('password')
                <p id="login-msg" class="message"> {{ $message }} </p>
            @enderror
            <button type="submit">Login</button>
            {{-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> --}}
        </div>
        <div class="form-container">
            <button id="login-btn" type="button" onclick="hideLogin()" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<script>
    function showLogin() {
        document.getElementById('login').style.display = 'block'
    }

    function hideLogin() {
        document.getElementById('login').style.display = 'none'
    }

    // function check() {

    //     if (document.querySelector('p[id="login-msg"]:not([register-msg])') == null) {
    //         hideLogin()
    //     }

    //     if (document.querySelector('p[id="login-msg"]:not([register-msg])') != null) {
    //         showLogin()
    //     }

    // }



    // keep login form displayed if input return errors
    // if (document.getElementById('login-msg') != null) {
    // document.addEventListener("DOMContentLoaded", function(event) {
    //     const validateForm = document.getElementById("login-msg");
    //    const p = validateForm.innerText;
    //      if (p = null) {
    //         document.getElementById('login').style.display = 'none' ;
    //     }else if(p  != null) {
    //          document.getElementById('login').style.display = 'block';}
    //        else {
    //         document.getElementById('login').style.display = 'none';
    //     }
    // console.log(event.currentTarget);
    // });
    // }

    window.onload = function(event) {
        if (document.getElementById('login-msg') != null) {
            document.getElementById('login').style.display = 'block'
        };

        if (document.getElementById('login-msg') == null) {
            document.getElementById('login').style.display = 'none';
        }
    }
</script>
