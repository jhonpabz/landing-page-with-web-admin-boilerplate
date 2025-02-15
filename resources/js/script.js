function updateServers() {
    fetch("/get-servers")  // You'll need to create this route in Laravel
        .then(response => response.text())
        .then(html => {
            const serverContainer = document.getElementById("server-container");
            if (serverContainer) {
                serverContainer.innerHTML = html;
            }
        })
        .catch(error => console.error('Error:', error));
}

// Only start the interval if we're on a page with the server container
if (document.getElementById("server-container")) {
    setInterval(updateServers, 2000);
}