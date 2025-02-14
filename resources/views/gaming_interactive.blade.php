<button id="gameAction">Game Action</button>
<div id="gameUpdates"></div>

<script>
    document.getElementById('gameAction').addEventListener('click', () => {
        fetch('/game-action')
            .then(response => response.json())
            .then(data => console.log(data));
    });

    window.Echo.channel('gaming')
        .listen('GamingUpdate', (e) => {
            document.getElementById('gameUpdates').innerHTML += `<p>${e.message}</p>`;
        });
</script>