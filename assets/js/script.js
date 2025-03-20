// assets/js/script.js

// Toggle light and dark mode (assumes a button with id "toggle-mode" exists)
document.addEventListener("DOMContentLoaded", function(){
    const toggleModeBtn = document.getElementById("toggle-mode");
    if(toggleModeBtn){
        toggleModeBtn.addEventListener("click", function(){
            document.body.classList.toggle("dark-mode");
            document.body.classList.toggle("light-mode");
        });
    }
    
    // Polling for notifications (simplified demo; replace with AJAX for production)
    setInterval(function(){
        // Replace with real-time fetching logic as needed
        document.getElementById("notification-count").innerText = Math.floor(Math.random()*10);
    }, 5000);
});
