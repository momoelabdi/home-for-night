    <script>
        function dropDown() {
            document.getElementById('dropNav').classList.toggle('show');

        }

        window.onclick = function(event) {
            if (!event.target.matches('.drop')) {
                const drops = document.getElementsByClassName('drop-content');

                for (let i = 0; i < drops.length; i++) {
                    const openDown = drops[i];
                    if (openDown.classList.contains('show')) {
                        openDown.classList.remove('show');
                    }

                }
            }
        }
    </script>
    <div class="navbar">
        <h2>Home For Night</h2>
        <div class="dropdown">
            <button class="drop navigatin-avatar" onclick="dropDown()" >
            <i   class="drop fa-light fa fa-bars"></i>
            <i  class="drop fa-thin fa fa-circle-user"></i>
            </button>
            <div id="dropNav" class="drop-content">
                <a href="/register">sign up</a>
                <a href="/login">log in</a>
                <a href="/listing/create">Experience Hosting</a>
            </div>
        </div>
    </div>
