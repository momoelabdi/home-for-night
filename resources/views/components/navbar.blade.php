<div class="navbar">
    <a href="/"><img class="main-logo" src="{{ asset('./images/Non-profit logo.png') }}" /></a>
    <form class="search-form">
        <input type="text" name="search" placeholder="Anywhere . anytime ">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="dropdown">
        <button class="drop navigatin-avatar" onclick="dropDown()">
            <i class="drop fa-light fa fa-bars"></i>
            <i class="drop fa-thin fa fa-circle-user"></i>
        </button>
        <div id="dropNav" class="drop-content">
            @auth
                <a href="/">{{ auth()->user()->name }}</a>
                <a href="/listing/create">Experience Hosting</a>
                <a href="/listings/manage">Mange</a>
                <a href="/reservations/manage">My Reservations</a>
                <form method="GET" action="/logout">
                    <button type="submit"><a>logout</a></button>
                </form>
            @else
                <a onclick="showSignIn()"> Sign up</a>
                <a onclick="showLogin()"> log in</a>
                <a onclick="showSignIn()"> Experience Hosting</a>
            @endauth
        </div>
    </div>
</div>

<script>
    function dropDown() {
        document.getElementById('dropNav').classList.toggle('show');
    }

    window.onclick = function(event) {
        // dropdown menu
        if (!event.target.matches('.drop')) {
            const drops = document.getElementsByClassName('drop-content');
            for (let i = 0; i < drops.length; i++) {
                const openDown = drops[i];
                if (openDown.classList.contains('show')) {
                    openDown.classList.remove('show');
                }

            }
        }
        // leave login form 
        const auths = document.getElementById('login');
        if (event.target == auths) {
            auths.style.display = "none";
        }
        
        //leave Sign in form
        const register = document.getElementById('register');
        if (event.target == register) {
            register.style.display = "none";
        }

    }
</script>
