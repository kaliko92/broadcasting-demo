<button id="triggerEvent">Trigger Event</button>
<div id="eventUpdates"></div>

<script>
    document.getElementById('triggerEvent').addEventListener('click', () => {
        fetch('/trigger-event')
            .then(response => response.json())
            .then(data => console.log(data));
    });

    window.Echo.channel('event-driven')
        .listen('EventDrivenUpdate', (e) => {
            document.getElementById('eventUpdates').innerHTML += `<p>${e.message}</p>`;
        });
</script>