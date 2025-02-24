document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.animateButton a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent immediate navigation

            const targetUrl = this.href; // Get the clicked link's href

            // Show the full-screen image overlay
            const overlay = document.getElementById('overlay');
            overlay.style.display = 'flex';

            // Fade out the content
            const contents = document.querySelectorAll('.content');
            contents.forEach(content => {
                content.classList.add('fade-out');
            });

            // Navigate to the clicked link after a delay
            setTimeout(() => {
                window.location.href = targetUrl;
            }, 1000); // Match the duration of the animation (1s)
        });
    });
});