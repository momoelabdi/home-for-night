<div class="navbar">
    <h2>Home For Night</h2>
    <div class="dropdown">
        <button class="drop navigatin-avatar" onclick="dropDown()">
            <i class="drop fa-light fa fa-bars"></i>
            <i class="drop fa-thin fa fa-circle-user"></i>
        </button>
        <div id="dropNav" class="drop-content">
        @auth
        <a href="/" >{{auth()->user()->name}}</a>
            <a href="/listing/create">Experience Hosting</a>
            <a href="/listing/manage">Mange</a>            
            <form method="GET" action="/logout">
                <button type="submit" ><a>logout</a></button>
            </form>
        @else
            <a onclick="document.getElementById('register').style.display='block'"> Sign up</a>
            <a onclick="document.getElementById('login').style.display='block'"> log in</a>
            <a onclick="document.getElementById('register').style.display='block'"> Experience Hosting</a>
        @endauth
    </div>
</div>
</div>
    <span>{{session('message')}}</span>

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
        // login form
        const auths = document.getElementById('login');
        if (event.target == auths) {
            auths.style.display = "none";
          }
        //   const register = document.getElementById('register');
        //   if (event.target == register) {
        //     register.style.display = "none";
        //   }
    }
</script>
