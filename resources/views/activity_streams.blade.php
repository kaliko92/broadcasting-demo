<button id="addActivity">Add Activity</button>
<div id="activityStream"></div>

<script>
    document.getElementById('addActivity').addEventListener('click', () => {
        fetch('/add-activity')
            .then(response => response.json())
            .then(data => console.log(data));
    });

    window.Echo.channel('activity')
        .listen('ActivityStream', (e) => {
            document.getElementById('activityStream').innerHTML += `<p>${e.message}</p>`;
        });
</script>