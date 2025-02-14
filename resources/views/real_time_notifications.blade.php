<button id="sendNotification">Send Notification</button>
<div id="notifications"></div>

<script>
    document.getElementById('sendNotification').addEventListener('click', () => {
        fetch('/send-notification')
            .then(response => response.json())
            .then(data => console.log(data));
    });

    window.Echo.channel('notifications')
        .listen('RealTimeNotification', (e) => {
            document.getElementById('notifications').innerHTML += `<p>${e.message}</p>`;
        });
</script>