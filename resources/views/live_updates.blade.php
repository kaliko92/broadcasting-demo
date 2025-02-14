<button id="updateData">Update Data</button>
<div id="liveData"></div>

<script>
    document.getElementById('updateData').addEventListener('click', () => {
        fetch('/update-data')
            .then(response => response.json())
            .then(data => console.log(data));
    });

    window.Echo.channel('live-updates')
        .listen('LiveUpdate', (e) => {
            document.getElementById('liveData').innerHTML += `<p>${e.data}</p>`;
        });
</script>