<button id="collaborate">Collaborate</button>
<div id="collaboration"></div>

<script>
    document.getElementById('collaborate').addEventListener('click', () => {
        fetch('/collaborate')
            .then(response => response.json())
            .then(data => console.log(data));
    });

    window.Echo.channel('collaboration')
        .listen('CollaborativeUpdate', (e) => {
            document.getElementById('collaboration').innerHTML += `<p>${e.message}</p>`;
        });
</script>