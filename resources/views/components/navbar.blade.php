<div class="navbar">
    <h2>Home For Night</h2>
    <div class="dropdown">
        <button class="drop navigatin-avatar" onclick="dropDown()">
            <i class="drop fa-light fa fa-bars"></i>
            <i class="drop fa-thin fa fa-circle-user"></i>
        </button>
        <div id="dropNav" class="drop-content">
        @auth
        <span>{{auth()->user()->name}}
        <form method="GET" action="/logout">
            <button type="submit" >logout</button>
        </form>
        <a href="/listing/create">Experience Hosting</a>
        <a href="/listings/manage">Mange</a>            
        @else
            <a href="/register">sign up</a>
            <a onclick="document.getElementById('login').style.display='block'"> log in</a>
            <a href="/register">Experience Hosting</a>
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
        // login form
        const auths = document.getElementById('login');
        if (event.target == auths) {
            auths.style.display = "none";
          }
    }
</script>