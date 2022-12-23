

    <div id="login" class="login">
        <form class="modal-content animate" method="POST" action="/users/authenticate" >
        <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
            @csrf
            <div class="imgcontainer">
                <img src="./images/user.png" alt="Avatar" class="avatar">
            </div>
            <div class="form-container"> 
                <label>Your Email</label>
                <input type="text" name="email">
                @error('email')
                    <p id="message" class="message"> {{ $message }} </p>
                @enderror
                <label>Your Password</label>
                <input type="password" name="password">
                @error('password')
                    <p class="message" id="message"> {{ $message }} </p>
                @enderror
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="form-container">
                <button id="login-btn" type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>